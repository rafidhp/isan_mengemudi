<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = [
        'car_rental_id',
        'cart_id',
        'title',
        'description',
        'payment_method',
        'status',
    ];

    public function carRental() {
        return $this->belongsTo(CarRental::class, 'car_rental_id');
    }

    public function cart() {
        return $this->belongsTo(Cart::class);
    }
}
