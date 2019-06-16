<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    protected $fillable = ['name', 'description', 'video', 'draw_date', 'closing_date', 'name_lottery'];
}
