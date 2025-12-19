<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = [
        'name',
        'description',
        'additional_price',
    ];

    public function series() {
        return $this->belongsToMany(Series::class, 'color_series')
                    ->withPivot('id', 'stock')
                    ->withTimestamps();
    }

    public function colorSeries() {
        return $this->hasMany(ColorSeries::class);
    }
}
