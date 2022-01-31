<?php

namespace Modules\Users\Http\Livewire\Admin;

use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithSorting;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsersDatatable extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;

    public $showDeleteModal = false;

    public $showEditModal = false;

    public $showFilters = false;

    public $avatar;

    public $filters = [
        'search' => '',
        'status' => '',
        'amount-min' => null,
        'amount-max' => null,
        'date-min' => null,
        'date-max' => null,
    ];

    public User $editing;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshUsers' => '$refresh'];

    public function rules() { return [
        'editing.name' => 'required|min:3',
        'editing.email' => 'required',
        'avatar' => 'nullable|image|max:1000',
    ]; }

    public function mount() { $this->editing = $this->makeBlankUser(); }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'users.csv');
    }

    public function deleteSelected(){
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('You\'ve deleted '.$deleteCount.' users');
    }

    public function makeBlankUser()
    {
        return User::make(['date' => now(), 'status' => 'success']);
    }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = ! $this->showFilters;
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->editing->getKey()) $this->editing = $this->makeBlankUser();

        $this->showEditModal = true;
    }

    public function edit(User $user)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($user)) $this->editing = $user;

        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();

        $this->editing->save();

        $this->avatar && $this->editing->update([
            'avatar_path' => $this->avatar->store('/', 'avatars'),
        ]);

        if (isset($this->avatar)) {
            $this->editing->updateAvatar($this->avatar);
        }

        $this->showEditModal = false;
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = User::query()
            ->when($this->filters['search'], fn($query, $search) => $query->where('name', 'like', '%'.$search.'%'));

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        return view('users::livewire.admin.users-datatable', [ 'items' => $this->rows ])
            ->extends('layouts.admin.app');
    }
}
