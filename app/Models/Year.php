<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'years';
    protected $fillable = [
        'year',
        'description',
        'additional_price',
    ];

    public function colorSeries() {
        return $this->belongsToMany(ColorSeries::class, 'series_year')
                    ->withPivot('id', 'stock')
                    ->withTimestamps();
    }

    public function seriesYear() {
        return $this->hasMany(SeriesYear::class);
    }
}
