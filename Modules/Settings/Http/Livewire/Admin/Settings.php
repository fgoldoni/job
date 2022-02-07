<?php
namespace Modules\Settings\Http\Livewire\Admin;

use App\Http\Livewire\DataTable\WithCachedRows;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Modules\Settings\Entities\Setting;

class Settings extends Component
{
    use WithCachedRows;

    protected function updated($proprety, $value)
    {
        $this->{$proprety} = is_string($value) && $value === '' ? null : $value;
    }

    protected function logo()
    {
        return config('setting.logo')
            ? Storage::disk('logos')->url(config('setting.logo'))
            : $this->defaultAvatarUrl();
    }

    protected function favicon()
    {
        return config('setting.favicon')
            ? Storage::disk('logos')->url(config('setting.favicon'))
            : $this->defaultAvatarUrl();
    }

    protected function updateFile(string $name, UploadedFile $photo)
    {
        tap(config("setting.$name"), function ($previous) use ($name, $photo) {
            Setting::updateOrCreate(
                ['name' => $name],
                ['value' => $photo->store('/', 'logos')]
            );

            if ($previous) {
                Storage::disk('logos')->delete($previous);
            }
        });
    }

    protected function updateField(string $field, $value)
    {
        Setting::updateOrCreate(
            ['name' => $field],
            ['value' => $value]
        );
    }
}
