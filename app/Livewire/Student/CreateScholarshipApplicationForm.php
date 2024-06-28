<?php

namespace App\Livewire\Student;

use App\Models\ScholarshipApplication;
use App\Models\ScholarshipType;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateScholarshipApplicationForm extends Component
{
    use WithFileUploads;

    #[Validate('required|integer')]
    public int $scholarshipTypeId;
    public string $committee;

    #[Validate('required|mimetypes:application/pdf')]
    public $document;

    public function render()
    {
        $scholarshipTypes = ScholarshipType::all();

        return view('livewire.student.create-scholarship-application-form', compact('scholarshipTypes'));
    }

    public function updatedScholarshipTypeId()
    {
        $scholarshipType = ScholarshipType::find($this->scholarshipTypeId);
        $this->committee = $scholarshipType->committee->name;
    }

    public function save()
    {
        abort_if(!Auth::user()->hasRole('student'), 403);

        $this->validate();

        $scholarshipType = ScholarshipType::find($this->scholarshipTypeId);

        $name = Auth::user()->userable->identification_number . '-' . Carbon::now()->year . '.pdf';
        $path = $this->document->storeAs(path: 'applications', name: $name);

        $documents = [
            $path,
        ];

        ScholarshipApplication::create([
            'documents' => json_encode($documents),
            'scholarship_type_id' => $scholarshipType->id,
            'student_id' => Auth::user()->userable_id,
            'committee_id' => $scholarshipType->committee_id,
        ]);

        return redirect()->route('scholarship-applications.index');
    }
}
