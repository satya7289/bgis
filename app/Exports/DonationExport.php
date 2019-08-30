<?php

namespace App\Exports;

use App\Donation;
use Maatwebsite\Excel\Concerns\FromCollection;

class DonationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Donation::all();
    }
}
