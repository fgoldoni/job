<?php

namespace Modules\Settings\Http\Livewire\Admin;

use App\Http\Livewire\DataTable\WithCachedRows;
use Livewire\Component;
use Modules\Settings\Entities\Setting;

class Settings extends Component
{
    use WithCachedRows;

    protected function updateField(string $field, $value)
    {
        Setting::updateOrCreate(
            ['name' => $field],
            ['value' => $value]
        );
    }

    public function getRowsQueryProperty()
    {
        return Setting::get(['id', 'name', 'value']);
    }

    public function getRowsProperty()
    {
        return $this->cache(
            function () {
                return $this->rowsQuery;
            }
        );
    }
}
