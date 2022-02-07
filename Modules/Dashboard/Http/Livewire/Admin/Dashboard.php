<?php
namespace Modules\Dashboard\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('dashboard::livewire.admin.dashboard')
            ->extends('layouts.admin.app');
    }
}
