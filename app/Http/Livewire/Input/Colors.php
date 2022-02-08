<?php
namespace App\Http\Livewire\Input;

use Livewire\Component;

class Colors extends Component
{
    public $color;

    public $items = [
        'indigo',
        'pink',
        'purple',
        'blue',
        'yellow',
        'cyan',
        'teal',
        'sky',
        'violet',
        'fuchsia',
        'green',
        'rose',
        'emerald',
        'orange',
        'red',
    ];

    public function updatedColor($value)
    {
        $this->emit('changeColor', $value);
    }

    public function render()
    {
        return view('livewire.input.colors');
    }
}
