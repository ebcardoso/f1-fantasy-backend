<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeasonsModel extends Model
{
    protected $table = "seasons";

    public function races()
    {
        return $this->hasMany(RacesModel::class, 'seasons_id');
    }
}
