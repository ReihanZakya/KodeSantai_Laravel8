<?php

namespace App\Models;

use App\Models\Link;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    public function theme(){
        return $this->belongsTo(Theme::class);
    }

    public function link(){
        return $this->hasMany(Link::class);
    }
}
