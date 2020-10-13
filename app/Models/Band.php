<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $table = 'bands';

    protected $fillable = ['nazov', 'pocet_clenov', 'zaner'];
}
