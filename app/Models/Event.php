<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function render()
    {
        return view('livewire.Event');
    }
    use HasFactory;
}
