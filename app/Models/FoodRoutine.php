<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodRoutine extends Model
{
    protected $table = 'foodRoutines';
    protected $primaryKey = 'id';
    protected $fillable = ['date', 'type', 'name', 'desc', 'photo'];
}
