<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table = "test";

    public $fillable = [
        'first_name', 'last_name'
    ];
}
