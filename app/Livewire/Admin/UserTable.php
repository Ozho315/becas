<?php

namespace App\Livewire\Admin;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable()->deselected(),
            Column::make(__('Name'), "name")->sortable()->searchable(),
            Column::make(__('Email'), "email")->sortable()->searchable(),
            Column::make(__('Created at'), "created_at")->sortable()->deselected(),
            Column::make(__('Updated at'), "updated_at")->sortable()->deselected(),
            Column::make('Acciones')
                ->label(
                    fn($row, Column $column) => view('components.livewire.datatables.action-column')->with(
                        [
                            // 'viewLink' => route('users.show', $row),
                            // 'editLink' => route('users.edit', $row),
                            'deleteLink' => route('users.destroy', $row),
                        ]
                    )
                )->html(),
        ];
    }
}
