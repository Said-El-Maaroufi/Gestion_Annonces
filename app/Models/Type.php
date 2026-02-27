<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function annonces(){
        return $this->belongsToMany(Annonce::class);
    }
}
