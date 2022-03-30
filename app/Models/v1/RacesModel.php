<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RacesModel extends Model
{
    protected $table = "races";

    public function seasons()
    {
        return $this->belongsTo(SeasonsModel::class); //, 'foreign_key', 'id');
    }

    public function participations()
    {
        return $this->hasMany(ParticipationsModel::class, 'races_id');
    }

    public function constructors()
    {
        return $this->belongsToMany(ConstructorsModel::class, "participations", "races_id", "constructors_id")->distinct()->orderBy('name');
    }
}
