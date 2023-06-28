<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'email', 'phone_number', 'birth'];

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}