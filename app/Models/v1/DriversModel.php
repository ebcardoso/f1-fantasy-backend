<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriversModel extends Model
{
    protected $table = "drivers";

    public function participations()
    {
        return $this->hasMany(ParticipationsModel::class, 'drivers_id');
    }
}
