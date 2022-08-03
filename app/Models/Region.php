<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
     //La tabla a conectar:
     protected $table = "regions";
     //La clave primaria de esa tabla:
     protected $primaryKey = "region_id";
     //Omitir campos de auditoria:
     public $timestamps =false;
     use HasFactory;

     //Relacion entre region y pais
     public function paises(){
        return $this->hasMany(Country::class, 'region_id');
     }

     //Relacion entre region y continente
     public function continente(){
        return $this->BelongsTo(Continent::class, 'continent_id');
     }
}
