<?php

namespace App\Livewire\Pages;

use Livewire\Component;

use App\Models\Contribuyente;
use App\Models\Direccion;

class ClientDetail extends Component
{

    public $cliente;
    public $direccion;

    public function mount($id)
    {
        $this->cliente = Contribuyente::find($id);
        $this->direccion = Direccion::find($id);
        
    }

    public function btnBack()
    {
        return redirect()->route('client');
    }

    public function render()
    {
        return view('livewire.pages.client-detail')->layout('layouts.default');
    }
}
