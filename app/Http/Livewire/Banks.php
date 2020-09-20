<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bank;

class Banks extends Component
{
    public function render()
    {

        $banks = Bank::all();

        return view('livewire.banks', [
            'banks' => $banks,
        ]);
    }
}
