<?php

namespace App\Exports;

use App\Admissions;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdmissionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Admissions::all();
    }
}
