<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Modules\Jobs\Http\Livewire\Jobs\JobsComponent;
use Modules\Users\Http\Livewire\Admin\UsersDatatable;

Route::middleware(['auth', 'verified', 'role:User'])->prefix('admin')->group(function () {
    Route::get('/jobs', UsersDatatable::class)->name('admin.jobs');
});

Route::prefix('jobs')->group(function () {
    Route::get('/', JobsComponent::class)->name('jobs');
    Route::get('/{slug}', JobsComponent::class)->name('jobs.job');
});
