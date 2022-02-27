<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipationsModel extends Model
{
    protected $table = "participations";

    public function drivers()
    {
        return $this->belongsTo(DriversModel::class);
    }
    
    public function constructors()
    {
        return $this->belongsTo(ConstructorsModel::class);
    }
    
    public function races()
    {
        return $this->belongsTo(RacesModel::class);
    }
}
