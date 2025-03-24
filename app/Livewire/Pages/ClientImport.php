<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ClientsImport;
use App\Models\Contribuyente;

class ClientImport extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $file;


    protected $rules = [
        'file' => 'required|mimes:csv,txt|max:2048',
    ];

    public function importCVS()
    {

        $this->validate();
        Excel::import(new ClientsImport, $this->file);
    }

    public function mouth() {}

    public function render()
    {
        $contribuyentes = Contribuyente::orderBy('id', 'desc')->paginate(8);

       return view('livewire.pages.client-import', compact('contribuyentes'));
    }
}
