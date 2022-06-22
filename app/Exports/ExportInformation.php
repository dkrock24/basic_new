<?php

namespace App\Exports;

use App\Models\Information;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportInformation implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Information::orderBy('id', 'DESC')->get();
    }
}
