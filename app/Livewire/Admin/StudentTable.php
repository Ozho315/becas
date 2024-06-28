<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Student;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class StudentTable extends DataTableComponent
{
    protected $model = Student::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable()->deselected(),
            Column::make(__('Name'), "name")->sortable()->searchable(),
            Column::make(__('Last name'), "last_name")->sortable()->searchable(),
            Column::make(__('Identification number'), "identification_number")->sortable(),
            Column::make(__('Average rating'), "average_rating")->sortable()->collapseAlways(),
            Column::make(__('Average incomes'), "average_incomes")->sortable()->collapseAlways(),
            BooleanColumn::make(__('Is disabled'), "is_disabled")->sortable(),
            Column::make(__('Phone number'), "phone_number")->sortable()->collapseAlways(),
            Column::make(__('Address'), "address")->sortable()->collapseAlways()->collapseAlways(),
            // Column::make("Profile picture path", "profile_picture_path")->sortable(),
            Column::make(__('Semester'), "semester")->sortable()->collapseAlways(),
            Column::make(__('Major'), "major.name")->sortable(),
            Column::make("Created at", "created_at")->sortable()->deselected(),
            Column::make("Updated at", "updated_at")->sortable()->deselected(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('components.livewire.datatables.action-column')->with(
                        $this->getRoutes($row),
                    )
                )->html(),
        ];
    }

    protected function getRoutes($row): array
    {
        if (Auth::user()->hasRole('admin')) {
            return [
                'viewLink' => route('students.show', $row),
                'editLink' => route('students.edit', $row),
                'deleteLink' => route('students.destroy', $row),
            ];
        }

        return [
            'viewLink' => route('students.show', $row),
        ];
    }
}
