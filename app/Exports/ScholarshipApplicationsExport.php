<?php

namespace App\Exports;

use App\Models\ScholarshipApplication;
use Maatwebsite\Excel\Concerns\FromCollection;

class ScholarshipApplicationsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ScholarshipApplication::all();
    }
}
