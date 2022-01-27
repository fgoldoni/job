<?php

namespace Modules\Users\Http\Livewire\Admin;

use Livewire\Component;

class UsersDatatable extends Component
{
    public function render()
    {
        return view('users::livewire.admin.users-datatable')
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
