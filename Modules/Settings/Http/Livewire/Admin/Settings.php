<?php

namespace Modules\Settings\Http\Livewire\Admin;

use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        return view('settings::livewire.admin.settings')->extends('layouts.admin.app');
    }
}
