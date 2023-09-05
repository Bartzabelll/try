<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Event;

class EventsTables extends DataTableComponent
{
    protected $model = Event::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setConfigurableAreas([
            'toolbar-left-start' => 'layouts.components.buttons.event-buttons.event-table-buttons',

          ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Event", "id")
                ->searchable(),
            Column::make("Tag", "slug")
                ->sortable(),
            Column::make("Event Name", "name")
                ->searchable(),
            Column::make("Description", "description")
                ->searchable(),
            Column::make("Time Start", "event_start")
                ->sortable(),
            Column::make("Time End", "event_end")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Actions')
                ->label(
                    fn ( $row, Column $column) => view('layouts.components.buttons.event-buttons.event-row-buttons')->withRow($row)
                )->html(),
        ];
    }
}
