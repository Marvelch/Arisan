<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    public $table = "winner";

    public $fillable = [
        'id',
        'members_id'
    ];
}
