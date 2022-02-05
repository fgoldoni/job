<?php

namespace Modules\Settings\Http\Livewire\Admin\Settings;

use Livewire\WithFileUploads;
use Modules\Settings\Entities\Setting;
use Modules\Settings\Http\Livewire\Admin\Settings;

class Site extends Settings
{
    use WithFileUploads;

    public $logo;

    public $favicon;

    public $color;

    public $title;

    public $description;

    public function rules()
    {
        return [
            'logo' => 'nullable|image|max:1000',
            'favicon' => 'nullable|max:1000',
            'title' => 'required|min:4',
            'description' => 'required|min:4',
        ];
    }

    protected $listeners = ['changeColor'];

    public function mount()
    {
        $this->color = config('setting.color');
        $this->title = config('setting.title');
        $this->description = config('setting.description');
        $this->editing = new Setting();
    }

    public function changeColor($value)
    {
        $this->color = $value;
    }

    public function save()
    {
        $this->validate();

        $this->updateField('title', $this->title);

        $this->updateField('description', $this->description);

        $this->updateField('color', $this->color);

        $this->logo && $this->updateFile('logo', $this->logo);

        $this->favicon && $this->updateFile('favicon', $this->favicon);

        $this->forget('settings');

        $this->notify('The Site configuration has been successfully saved');

        $this->emit('saved');
    }


    public function render()
    {
        return view('settings::livewire.admin.settings.site')
            ->layout('layouts.admin.app', ['title' => 'Site Setting']);
    }
}
