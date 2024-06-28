<?php

namespace App\Livewire\Admin;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Professor;

class ProfessorTable extends DataTableComponent
{
    protected $model = Professor::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->deselected(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Last name", "last_name")
                ->sortable()
                ->searchable(),
            Column::make("Identification number", "identification_number")
                ->sortable()
                ->searchable(),
            Column::make("Committee id", "committee_id")
                ->sortable()
                ->collapseAlways(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->collapseAlways(),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->collapseAlways(),
            Column::make('Action')
                ->label(
                    fn($row, Column $column) => view('components.livewire.datatables.action-column')->with(
                        [
                            'viewLink' => route('professors.show', $row),
                            'editLink' => route('professors.edit', $row),
                            'deleteLink' => route('professors.destroy', $row),
                        ]
                    )
                )->html(),
        ];
    }
}
