<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaning extends Model
{
    protected $table = 'loanings';
    protected $fillable = [
        'car_id',
        'user_id',
        'tenant_ktp',
        'loan_date',
        'loan_time',
        'return_date_plan',
        'return_time_plan',
        'status',
        'car_condition',
    ];

    public function car() {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function returning() {
        return $this->hasOne(Returning::class);
    }
}
