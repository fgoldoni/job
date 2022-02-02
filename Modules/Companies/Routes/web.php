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

use Modules\Companies\Http\Livewire\Admin\CompaniesDatatable;

Route::middleware(['auth', 'verified', 'role:User'])->prefix('admin')->group(
    function () {
        Route::get('/companies', CompaniesDatatable::class)->name('admin.companies');
    }
);
