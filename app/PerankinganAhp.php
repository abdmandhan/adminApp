<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerankinganAhp extends Model
{
    public $guarded = [];

    public function dosen()
    {
        return $this->hasOne(Dosen::class, 'id', 'dosen_id');
    }

    public function predikat()
    {
        return $this->hasOne(Predikat::class, 'id', 'predikat_id');
    }
}
