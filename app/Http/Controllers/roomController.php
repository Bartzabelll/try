<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class roomController extends Controller
{
    public function roomReference(Request $request  ){
        return Room::query()
            ->select('id', 'name')
            ->orderBy('name')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('name', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get();
    }
    //
}
