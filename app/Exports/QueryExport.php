<?php

namespace App\Exports;

use App\Help;
use Maatwebsite\Excel\Concerns\FromCollection;

class QueryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Help::all();
    }
}
