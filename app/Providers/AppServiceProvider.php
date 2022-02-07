<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Categories\Providers\CategoriesServiceProvider;
use Modules\Companies\Providers\CompaniesServiceProvider;
use Modules\Dashboard\Providers\DashboardServiceProvider;
use Modules\Jobs\Providers\JobsServiceProvider;
use Modules\Plans\Providers\PlansServiceProvider;
use Modules\Roles\Providers\RolesServiceProvider;
use Modules\Settings\Providers\SettingsServiceProvider;
use Modules\Users\Providers\UsersServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(UsersServiceProvider::class);
        $this->app->register(RolesServiceProvider::class);
        $this->app->register(SettingsServiceProvider::class);
        $this->app->register(DashboardServiceProvider::class);
        $this->app->register(CategoriesServiceProvider::class);
        $this->app->register(CompaniesServiceProvider::class);
        $this->app->register(JobsServiceProvider::class);
        $this->app->register(PlansServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Component::macro('notify', function ($message) {
            $this->dispatchBrowserEvent('notify', $message);
        });

        Builder::macro('toCsv', function () {
            $results = $this->get();

            if ($results->count() < 1) {
                return;
            }

            $titles = implode(',', array_keys((array) $results->first()->getAttributes()));

            $values = $results->map(function ($result) {
                return implode(',', collect($result->getAttributes())->map(function ($thing) {
                    return '"' . $thing . '"';
                })->toArray());
            });

            $values->prepend($titles);

            return $values->implode("\n");
        });
    }
}
