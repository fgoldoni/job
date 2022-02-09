<?php

namespace Modules\Jobs\Http\Livewire\Jobs;

use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithSorting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Jobs\Entities\Job;

class JobsComponent extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;

    public ?Job $job;

    public $filters = [
        'search' => '',
        'status' => '',
        'amount-min' => null,
        'amount-max' => null,
        'date-min' => null,
        'date-max' => null,
    ];

    public function mount($slug = null)
    {
        $this->job = Job::where('slug', $slug)->first();
    }

    public function getRowsQueryProperty()
    {
        $query = Job::search($this->filters['search'])->with('categories', 'company');

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->rowsQuery->limit(5)->get();
        });
    }

    public function render()
    {
        return view('jobs::livewire.jobs.jobs-component', ['items' => $this->rows, 'job' => $this->job]);
    }
}
