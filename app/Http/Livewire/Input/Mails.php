<?php
namespace App\Http\Livewire\Input;

use Livewire\Component;

class Mails extends Component
{
    public $mailDriver;

    public function updatedMailDriver($value)
    {
        $this->emit('changeMailDriver', $value);
    }

    public $items = [
        'smtp',
        'mailgun',
        'ses',
        'postmark',
        'sendmail',
        'log',
    ];

    public function render()
    {
        return view('livewire.input.mails');
    }
}
