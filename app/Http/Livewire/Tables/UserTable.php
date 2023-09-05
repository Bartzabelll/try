<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setConfigurableAreas([
            'toolbar-left-start' => 'layouts.components.buttons.user-table-buttons',

          ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("First name", "first_name")
                ->sortable()
                ->searchable(),
            Column::make("Middle name", "middle_name")
                ->sortable()
                ->searchable(),
            Column::make("Last name", "last_name")
                ->sortable()
                ->searchable(),
            Column::make("Email", "email")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->searchable(),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->searchable(),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->searchable(),
            Column::make('Actions')
                ->label(
                    fn ( $row, Column $column) => view('layouts.components.user-row-buttons')->withRow($row)
                )->html(),
        ];
    }
}
