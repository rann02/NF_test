<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'detail', 'phone_number', 'pos_code', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}