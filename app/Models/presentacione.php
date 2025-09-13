<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presentacione extends Model
{
    use HasFactory;

    public function producto(){
        return $this->belongsToMany(producto::class);
    }

    public function caractetisticas(){
        return $this->belongsTo(caracteristica::class);
        }
}
    

