<?php
namespace Modules\Categories\Http\Livewire\Admin;

use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithSorting;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Categories\Entities\Category;

class CategoriesDatatable extends Component
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

    public Category $editing;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshCategorys' => '$refresh'];

    public function rules()
    {
        return [
            'editing.name' => 'required|min:3',
            'editing.description' => 'required|min:3',
            'editing.online' => 'required',
            'editing.user_id' => 'nullable|int',
        ];
    }

    public function mount()
    {
        $this->editing = $this->makeBlankCategory();
    }

    // Computed Property
    public function getToggleProperty()
    {
        return !is_null($this->editing->email_verified_at);
    }

    public function updatedFilters()
    {
        $this->resetPage();
    }

    public function exportSelected()
    {
        return response()->streamDownload(
            function () {
                echo $this->selectedRowsQuery->toCsv();
            },
            'users.csv'
        );
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('You\'ve deleted ' . $deleteCount . ' users');
    }

    public function makeBlankCategory()
    {
        return Category::make(['name' => '', 'description' => '', 'user_id' => auth()->user()->id]);
    }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = !$this->showFilters;
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->editing->getKey()) {
            $this->editing = $this->makeBlankCategory();
        }

        $this->showEditModal = true;
    }

    public function edit(Category $company)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($company)) {
            $this->editing = $company->load('user');
            $this->avatar = null;
        }

        $this->showEditModal = true;
    }

    public function impersonate(Category $company)
    {
        $this->useCachedRows();

        auth()->user()->impersonate($company);

        return redirect(config('laravel-impersonate.take_redirect_to'));
    }

    public function save()
    {
        $this->validate();

        $this->editing->save();

        $this->notify('The Category has been successfully saved');

        $this->showEditModal = false;
    }

    public function resetFilters()
    {
        $this->reset('filters');
    }

    public function getRowsQueryProperty()
    {
        $query = Category::search($this->filters['search'])
            ->published()
            ->childrenFor('area')
            ->when($this->filters['date-min'], fn ($query, $date) => $query->where('created_at', '>=', Carbon::parse($date)))
            ->when($this->filters['date-max'], fn ($query, $date) => $query->where('created_at', '<=', Carbon::parse($date)))
            ->with(['user']);

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
        return view('categories::livewire.admin.categories-datatable', ['items' => $this->rows])
            ->extends('layouts.admin.app', ['title' => 'Categories']);
    }
}
