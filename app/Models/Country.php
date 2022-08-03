<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //La tabla a conectar:
    protected $table = "countries";
    //La clave primaria de esa tabla:
    protected $primaryKey = "country_id";
    //Omitir campos de auditoria:
    public $timestamps =false;
    use HasFactory;

    //Relacion entre continente y region jajajaja

    public function region(){
        return $this->belongsTo(Continent::class, 'region_id');
     }

      //Relacion m a m con paises
    public function languages(){
        return $this->belongsToMany(Language::class, 'country_languages' , 'country_id' , 'language_id' , );
    }
}
