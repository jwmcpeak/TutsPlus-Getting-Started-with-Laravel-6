<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    protected $fillable = ['title', 'make', 'year', 'description'];
}
