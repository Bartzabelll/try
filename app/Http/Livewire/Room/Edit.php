<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use WireUi\Traits\Actions;

class Edit extends Component
{
    use Actions;
    public $id;
    public $slug;
    public $name;
    public $description;
    public $capacity;
    public $is_active;
    public $created_at;
    public $updated_at;


    public $rules = [
        'id' => 'required',
        'name' => 'required',
        'capacity' => 'required',
    ];

    public function create()
    {

        $this->validate();


        try{
        DB::beginTransaction();

        $room = new Room();
        $room->id= $this->ID;
        $room->slug = $this->slug;
        $room->name = $this->Name;
        $room->description = $this->Description;
        $room->capacity = $this ->Capacity;
	$room->is_active = $this ->Status;
	$room->created_at = $this ->TimeCreated;
	$room->updated_at = $this ->TimeUpdated;

        if ($room->save()){
            DB::commit();
            $this->dialog()->success(
                $title = 'Profile saved',
                $description = 'User profile was successfully saved',
            );
        } else {
            DB::rollBack();
            $this->dialog()->error(
                $title = 'Error !!!',
                $description = 'User profile was not saved',

            );
        }
    } catch (\throwable $th){
        DB::rollBack();
        dd($th->getMessage());
    }
    }
    public function render()
    {

        return view('livewire.room.edit');
    }
}

