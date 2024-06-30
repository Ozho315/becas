<?php

namespace App\Livewire\Admin\ScholarshipApplication;

use App\Exports\ScholarshipApplicationsExport;
use App\Models\ScholarshipApplication;
use LivewireUI\Modal\ModalComponent;
use Maatwebsite\Excel\Facades\Excel;

class ReportModal extends ModalComponent
{
    public array $years = [];
    public $selectedYear;

    public function mount()
    {
        $this->years = $this->getYears();
    }

    public function render()
    {
        return view('livewire.admin.scholarship-application.report-modal');
    }

    protected function getYears()
    {
        return ScholarshipApplication::selectRaw('extract(year FROM created_at) AS year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->get()
            ->toArray();
    }

    public function generateReport()
    {
        \Log::debug(print_r(gettype($this->selectedYear), true));
        \Log::debug("Generating report for the {$this->selectedYear}");

        return Excel::download(new ScholarshipApplicationsExport, 'test.xlsx');

    }
}
