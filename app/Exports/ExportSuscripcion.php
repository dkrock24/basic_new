<?php

namespace App\Exports;

use App\Models\Suscripcion;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSuscripcion implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Suscripcion::orderBy('id', 'DESC')->get();
    }
}
