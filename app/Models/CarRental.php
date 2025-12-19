<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;

class CarRental extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'car_rentals';
    protected $fillable = [
        'user_id',
        'province_id',
        'city_id',
        'district_id',
        'village_id',
        'car_rental_name',
        'description',
        'full_address',
        'image',
        'phone_number',
        'npwp',
        'npwp_image',
        'latitude',
        'longitude',
        'open_days',
        'open_time',
        'average_rating'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function province() {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function district() {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function village() {
        return $this->belongsTo(Village::class, 'village_id');
    }

    public function cars() {
        return $this->hasMany(Car::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
