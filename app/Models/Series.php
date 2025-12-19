<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';
    protected $fillable = [
        'series_name',
        'description',
        'additional_price',
    ];

    public function colors() {
        return $this->belongsToMany(Color::class, 'color_series')
                    ->withPivot('id', 'stock')
                    ->withTimestamps();
    }

    public function colorSeries() {
        return $this->hasMany(ColorSeries::class);
    }
}
