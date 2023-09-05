<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Room;

class RoomsTables extends DataTableComponent
{
    protected $model = Room::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setConfigurableAreas([
            'toolbar-left-start' => 'layouts.components.buttons.room-buttons.room-table-buttons',

          ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Room", "id")
                ->searchable(),
            Column::make("Tag", "slug")
                ->sortable(),
            Column::make("Room Name", "name")
                ->searchable(),
            Column::make("Description", "description")
                ->searchable(),
            Column::make("Capacity", "capacity")
                ->sortable(),
            Column::make("Is Active", "is_active")
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
