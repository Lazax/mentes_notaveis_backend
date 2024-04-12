<?php

namespace App\Http\Controllers;

use App\Models\Address;

class AddressController extends Controller
{
    public function index() 
    {
        return Address::with([
            'user' => function($query) {
                return $query->select('*');
            }
        ])->get();
    }

    public function show(int $id) 
    {
        return Address::with([
            'user' => function($query) {
                return $query->select('*');
            }
        ])->where('id', $id)->get();
    }
}
