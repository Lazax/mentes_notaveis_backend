<?php

namespace App\Http\Controllers;

use App\Models\City as CityModel;

class CityController extends Controller
{
    public function index()
    {
        return CityModel::with([
            'state' => function($query) {
                $query->select('*');
            }
        ])->get();
    }

    public function show(int $id) 
    {
        return CityModel::with([
            'state' => function($query) {
                $query->select('*');
            }
        ])->where('id', $id)->get();
    }
}
