<?php

namespace App\Livewire;

use App\Mail\ApplicationReplied;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ScholarshipApplication;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class ScholarshipApplicationTable extends DataTableComponent
{
    public function builder(): Builder
    {
        if (Auth::user()->hasRole('professor')) {
            $userCommitteeId = Auth::user()->userable->committee_id;
            return ScholarshipApplication::query()->where('committee_id', $userCommitteeId);
        }

        if (Auth::user()->hasRole('admin')) {
            return ScholarshipApplication::query();
        }

        // Student case
        $studentId = Auth::user()->userable->id;
        return ScholarshipApplication::query()->where('student_id', $studentId);
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Comisión', 'committee.name'),
            Column::make('Aprobada', 'is_approved')->view('components.livewire.datatables.bool-nullable'),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Administrar')->hideIf(!Auth::user()->hasRole('professor'))->label(
                fn($row, Column $column) => view('components.livewire.datatables.applications.professor-actions')->with([
                    'row' => $row,
                ])
            ),
            Column::make('Acciones')->hideIf(!Auth::user()->hasRole('student'))->label(
                fn($row, Column $column) => view('components.livewire.datatables.applications.student-actions')->with([
                    'row' => $row,
                ])
            ),
        ];
    }

    public function updateStatus(bool $isApproved, int $applicationId)
    {
        \Log::debug('El profesor ' . Auth::user()->userable->name . ' está ' . ($isApproved ? 'autorizando' : 'negando') . ' la solicitud');

        $application = ScholarshipApplication::find($applicationId);

        $application->update([
            'is_approved' => $isApproved,
        ]);


        Mail::to($application->student->user->email)->send(new ApplicationReplied($application));

    }
}
