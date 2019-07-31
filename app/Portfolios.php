<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolios extends Model
{
    protected $table = 'portfolios';

   protected $fillable = [
        'name', 'description', 'image', 'link'
    ];
}
