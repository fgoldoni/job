<?php

namespace Modules\Settings\Http\Livewire\Admin\Settings;

use App\Http\Livewire\DataTable\WithCachedRows;
use http\Encoding\Stream;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Settings\Entities\Setting;

class Site extends Component
{
    use WithCachedRows;

    use WithFileUploads;

    public $logo;

    public $favicon;

    public $color;

    public $title;

    public $description;

    public Setting $editing;

    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'logo' => 'nullable|image|max:1000',
            'favicon' => 'nullable|image|max:1000',
        ];
    }

    public function mount()
    {
        $this->color = config('setting.color');
        $this->title = config('setting.title');
        $this->description = config('setting.description');
        $this->editing = new Setting();
    }

    public function save()
    {
        $this->validate();

        Setting::updateOrCreate(
            ['name' => 'title'],
            ['value' => $this->title]
        );



        $this->updateField('description', $this->description);

        $this->updateField('color', $this->color);

        $this->logo && $this->updateFile('logo', $this->logo);

        $this->favicon && $this->updateFile('favicon', $this->favicon);

        cache()->forget('settings');

        $this->notify('Success update');
        $this->emit('saved');
    }

    public function getRowsQueryProperty()
    {
        return Setting::get(['id','name','value']);
    }

    public function getRowsProperty()
    {
        return $this->cache(
            function () {
                return $this->rowsQuery;
            }
        );
    }

    public function logo()
    {
        return config('setting.logo')
            ? Storage::disk('logos')->url(config('setting.logo'))
            : $this->defaultAvatarUrl();
    }

    public function favicon()
    {
        return config('setting.favicon')
            ? Storage::disk('logos')->url(config('setting.favicon'))
            : $this->defaultAvatarUrl();
    }


    public function render()
    {
        return view('settings::livewire.admin.settings.site', [ 'items' => $this->rows ])->extends('layouts.admin.app');
    }

    private function updateFile(string $name, UploadedFile $photo)
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

    private function updateField(string $field, $value)
    {
        Setting::updateOrCreate(
            ['name' => $field],
            ['value' => $value]
        );
    }
}
