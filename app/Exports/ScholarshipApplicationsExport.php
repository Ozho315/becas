<?php

namespace App\Exports;

use App\Models\ScholarshipApplication;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ScholarshipApplicationsExport implements FromView, ShouldAutoSize
{
    public function __construct(private int $year)
    {
    }
    public function view(): View
    {
        $data = ScholarshipApplication::whereYear('created_at', '=', $this->year)->get();
        return view('exports.scholarship-applications', [
            'applications' => $data,
        ]);
    }
}
