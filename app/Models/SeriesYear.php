<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeriesYear extends Model
{
    protected $table = 'series_years';
    protected $fillable = [
        'color_series_id',
        'year_id',
        'stock',
    ];

    public function colorSeries() {
        return $this->belongsTo(ColorSeries::class);
    }

    public function year() {
        return $this->belongsTo(Year::class);
    }

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
