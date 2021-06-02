<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoListas extends Model
{
    use HasFactory;

    protected $table = "tipo_listas";
    protected $fillable = ['nombre','tipo_lista'];

      public function tipoListas(){
    	return $this->hasMany(ElementosListas::class);
    }
}
