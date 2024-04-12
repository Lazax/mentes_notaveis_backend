<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";

    protected $fillable = ['name', 'email'];
    protected $hidden = ['created_at', 'updated_at', 'remember_token'];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
