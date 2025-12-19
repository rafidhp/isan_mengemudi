<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColorSeries extends Model
{
    protected $table = 'color_series';
    protected $fillable = [
        'color_id',
        'series_id',
        'stock',
    ];

    public function color() {
        return $this->belongsTo(Color::class);
    }

    public function series() {
        return $this->belongsTo(Series::class);
    }

    public function years() {
        return $this->belongsToMany(Year::class, 'series_years')
                    ->withPivot('id', 'stock')
                    ->withTimestamps();
    }

    public function seriesYear() {
        return $this->hasMany(SeriesYear::class);
    }
}
