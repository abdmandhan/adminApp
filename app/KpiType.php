<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KpiType extends Model
{
    public $guarded = [];

    public function kpi()
    {
        return $this->hasMany(Kpi::class, 'kpi_type_id');
    }
}
