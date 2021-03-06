<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class State extends Model
{

    protected $fillable = [
        'feel',
        'state',
        'message',
    ];

    public function getCreatedAtAttribute($value)
    {
        $date = Carbon::parse($value);
        $date->addHours(9);
        return $date->format('Y-m-d H:i:s');
    }

    public function getUpdatedAtAttribute($value)
    {
        $date = Carbon::parse($value);
        $date->addHours(9);
        return $date->format('Y-m-d H:i:s');
    }
}
