<?php
namespace Modules\Jobs\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Jobs\Entities\Job;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index(Request $request)
    {
        $job = Job::where('name', $request->get('job'))->first();

        return view('jobs::index', ['job' => $job]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create()
    {
        return view('jobs::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     *
     * @param  int $id
     * @return Renderable
     */
    public function show()
    {
        return view('jobs::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('jobs::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int     $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
