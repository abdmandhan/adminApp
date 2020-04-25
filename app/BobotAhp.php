<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BobotAhp extends Model
{
    public $guarded = [];

    public function dosen()
    {
        return $this->hasOne(Dosen::class, 'id', 'dosen_id');
    }
}
