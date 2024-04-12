<?php

namespace App\Http\Controllers;

use App\Models\Address as AddressModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return User::with([
            'address' => function($query) {
                return $query->select('*');
            }
        ])->get();
    }

    public function show(int $id) 
    {
        return User::where('id', $id)->get();
    }

    public function store(Request $request) 
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required',
                'street' => 'required|max:255',
                'zip_code' => 'required|max:100',
                'city_id' => 'required|integer'
            ], [], [
                'name' => 'Nome',
                'email' => 'E-mail',
                'street' => 'Endereço',
                'zip_code' => 'CEP',
                'city_id' => 'Cidade'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e){
            return response()->json(['error' => $e->errors()], 422);
        }

        try {
            DB::beginTransaction();

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            $address = new AddressModel();
            $address->city_id = $request->city_id;
            $address->street = $request->street;
            $address->zip_code = $request->zip_code;
            $user->address()->save($address);

            DB::commit();

            return response()->json($user, 201);
        } catch (\Throwable $e) {
            DB::rollBack();

            return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => 'Não foi possivel concluir a ação.'], 500);
        }
    }

    public function update(int $id, Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'street' => 'required|max:255',
                'zip_code' => 'required|max:100',
                'city_id' => 'required|integer'
            ], [], [
                'name' => 'Nome',
                'street' => 'Endereço',
                'zip_code' => 'CEP',
                'city_id' => 'Cidade'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e){
            return response()->json(['error' => $e->errors()], 422);
        }

        try {
            DB::beginTransaction();

            $user = User::find($id);
            
            $user->name = $request->name;
            $user->address->city_id = $request->city_id;
            $user->address->street = $request->street;
            $user->address->zip_code = $request->zip_code;
            
            $user->push();

            DB::commit();

            return response()->json($user, 201);
        } catch (\Throwable $e) {
            DB::rollBack();

            return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => 'Não foi possivel concluir a ação.'], 500);
        }
    }

    public function destroy(int $id) 
    {
        try {
            User::where('id', $id)->delete();

            return response()->json('', 204);
        } catch (\Throwable $e) {
            return response()->json(['message' => 'Não foi possivel concluir a ação.'], 500);
        }
    }
}
