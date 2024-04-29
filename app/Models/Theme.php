<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Material;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Theme extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function material(){
        return $this->hasMany(Material::class);
    }
}
