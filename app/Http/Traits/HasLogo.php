<?php
namespace App\Http\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Jetstream\Features;

/**
 * Class HasLogo
 *
 * @package \App\Http\Traits
 */
trait HasLogo
{
    /**
     * Update the user's logo photo.
     *
     * @param  \Illuminate\Http\UploadedFile  $photo
     * @return void
     */
    public function updateLogo(UploadedFile $photo)
    {
        tap($this->value, function ($previous) use ($photo) {
            $this->forceFill([
                'value' => $photo->storePublicly('/', ['disk' => $this->logoDisk()]),
            ])->save();

            if ($previous) {
                Storage::disk($this->logoDisk())->delete($previous);
            }
        });
    }

    /**
     * Delete the user's logo photo.
     *
     * @return void
     */
    public function deleteLogo()
    {
        if (!Features::managesLogos()) {
            return;
        }

        Storage::disk($this->logoDisk())->delete($this->value);

        $this->forceFill([
            'value' => null,
        ])->save();
    }

    /**
     * Get the URL to the user's logo photo.
     *
     * @return string
     */
    public function getLogoUrlAttribute()
    {
        return $this->value
            ? Storage::disk($this->logoDisk())->url($this->value)
            : $this->defaultLogoUrl();
    }

    /**
     * Get the default logo photo URL if no logo photo has been uploaded.
     *
     * @return string
     */
    protected function defaultLogoUrl()
    {
        return 'https://ui-logos.com/api/?name=' . urlencode($this->value) . '&color=7F9CF5&background=EBF4FF';
    }

    /**
     * Get the disk that logo photos should be stored on.
     *
     * @return string
     */
    protected function logoDisk()
    {
        return isset($_ENV['VAPOR_ARTIFACT_NAME']) ? 's3' : config('jetstream.logo_disk', 'logos');
    }
}
