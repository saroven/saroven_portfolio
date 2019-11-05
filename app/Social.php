<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'title', 'link', 'icon_class', 'alt'
    ];
}
