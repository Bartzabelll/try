<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use WireUi\Traits\Actions;
use Illuminate\Support\Str;

class Create extends Component
{
    use Actions;
    public $roomId;
    public $eventId;
    public $slug;
    public $name;
    public $description;
    public $event_start;
    public $event_end;

    // public $is_active;
    // public $created_at;
    // public $updated_at;

    public $rules = [
        'name' => 'required',
        'event_start' => 'required',
        'event_end' => 'required',
    ];
    public function create()
    {

        $this->validate();


        try{
        DB::beginTransaction();

        $event = new Event();
        $event->slug = Str::slug($this->name, '-');
        $event->name = $this->name;
        $event->description = $this->description;
        $event->event_start = Carbon::parse($this->event_start)->toDateTimeString();
        $event->event_end = Carbon::parse($this->event_end)->toDateTimeString();
        $event->room_id = $this->roomId;


        if ($event->save()){

            DB::commit();
            $this->dialog()->success(
                $title = 'Event saved',
                $description = 'Event was successfully saved',
            );
        } else {
            DB::rollBack();
            $this->dialog()->error(
                $title = 'Error !!!',
                $description = 'Event was not saved',

            );
        }
    } catch (\throwable $th){
        DB::rollBack();
        dd($th->getMessage());
    }
    }

    public function render()
    {
        return view('livewire.event.create');
    }
}
