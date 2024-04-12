<?php

namespace App\Http\Controllers;

use App\Models\State as StateModel;

class StateController extends Controller
{
    public function index()
    {
        return StateModel::with([
            'cities' => function($query) {
                $query->select('*');
            }
        ])->get();
    }

    public function show(int $id) 
    {
        return StateModel::where('id', $id)->get();
    }
}
