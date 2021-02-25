<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'price', 'duration', 'date', 'featured'
    ];

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = (new Carbon($value))->format('d/m/y');
    }
}
