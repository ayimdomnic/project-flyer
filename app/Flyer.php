<?php

namespace App;
use App\Photo;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
