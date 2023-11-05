<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ErrorComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.error-component')->layout('layouts.error');
    }
}
