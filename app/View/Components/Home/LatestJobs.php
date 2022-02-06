<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Modules\Jobs\Entities\Job;

class LatestJobs extends Component
{
    /**
     * @var \Modules\Jobs\Entities\Job
     */
    private $job;


    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.latest-jobs', ['items' => $this->job->with('company:id,name', 'categories')->published()->limit(8)->get()]);
    }
}
