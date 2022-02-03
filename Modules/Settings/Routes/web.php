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


use Modules\Settings\Http\Livewire\Admin\Settings;
use Modules\Settings\Http\Livewire\Admin\Settings\Site;

Route::middleware(['auth', 'verified', 'role:User'])->prefix('admin')->group(function () {
        Route::redirect('/admin/settings', '/admin/settings/site')->name('admin.settings');
        Route::get('/settings/site', Site::class)->name('admin.settings.site');
        Route::get('/settings/email', Site::class)->name('admin.settings.email');
        Route::get('/settings/payment', Site::class)->name('admin.settings.payment');
        Route::get('/settings/mailchimp', Site::class)->name('admin.settings.mailchimp');
        Route::get('/settings/analytics', Site::class)->name('admin.settings.analytics');
});
