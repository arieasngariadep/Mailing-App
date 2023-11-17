<?php

namespace App\Exports;

use App\Models\RegisterSurat;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegisterSuratExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RegisterSurat::all();
    }
}
