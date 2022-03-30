<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructorsModel extends Model
{
    protected $table = "constructors";

    public function participations()
    {
        return $this->hasMany(ParticipationsModel::class, 'constructors_id');
    }

    public function races()
    {
        return $this->belongsToMany(RacesModel::class, "participations", "constructors_id", "races_id");
    }
}
