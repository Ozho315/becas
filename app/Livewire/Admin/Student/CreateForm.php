<?php

namespace App\Livewire\Admin\Student;

use App\Mail\StudentRegistered;
use App\Models\Major;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateForm extends Component
{
    use WithFileUploads;

    #[Validate('required|string')]
    public $name;

    #[Validate('required|string')]
    public $lastName;

    #[Validate('required')]
    public $identification;

    #[Validate('required')]
    public $email;

    #[Validate('required')]
    public $phoneNumber;

    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public bool $isDisabled = false;

    #[Validate('required')]
    public $profilePicture;

    #[Validate('required')]
    public $majorId;

    #[Validate('required')]
    public $semester;

    #[Validate('required')]
    public $averageRating;

    #[Validate('required')]
    public $averageIncomes;


    public function render()
    {
        return view('livewire.admin.student.create-form', [
            'majors' => Major::all(),
        ]);
    }

    public function save()
    {
        $this->validate();

        \Log::debug('Saving student');
        $name = $this->identification . '.jpg';
        $path = $this->profilePicture->storeAs(path: 'profile_pics', name: $name);


        $student = Student::create([
            'name' => $this->name,
            'last_name' => $this->lastName,
            'identification_number' => $this->identification,
            'average_rating' => $this->averageRating,
            'average_incomes' => $this->averageIncomes,
            'is_disabled' => $this->isDisabled,
            'phone_number' => $this->phoneNumber,
            'address' => $this->address,
            'semester' => $this->semester,
            'major_id' => $this->majorId,
        ]);

        $studentUser = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->identification,
        ]);

        $studentUser->assignRole('student');
        $student->user()->save($studentUser);


        Mail::to($this->email)->send(new StudentRegistered($student));
    }
}
