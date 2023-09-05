<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use WireUi\Traits\Actions;
use Illuminate\Support\Str;

class Create extends Component
{
    use Actions;
    public $roomId;
    public $slug;
    public $name;
    public $description;
    public $capacity;


    public $rules = [
        'name' => 'required',
        'capacity' => 'required',
    ];

    public function create()
    {

        $this->validate();


        try{
        DB::beginTransaction();

        $room = new Room();
        $room->slug = Str::slug($this->name, '-');
        $room->name = $this->name;
        $room->description = $this->description;
        $room->capacity = $this->capacity;
        if ($room->save()){

            DB::commit();
            $this->dialog()->success(
                $title = 'Room saved',
                $description = 'Room was successfully saved',
            );
        } else {
            DB::rollBack();
            $this->dialog()->error(
                $title = 'Error !!!',
                $description = 'Room was not saved',

            );
        }
    } catch (\throwable $th){
        DB::rollBack();
        dd($th->getMessage());
    }
    }
    public function render()
    {

        return view('livewire.room.create');
    }
}

