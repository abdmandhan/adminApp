<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    public $guarded = [];

    public function kpi_type()
    {
        return $this->hasOne(KpiType::class, 'id', 'kpi_type_id');
    }
}
