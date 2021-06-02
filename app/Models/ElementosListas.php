<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementosListas extends Model
{
    use HasFactory;

    protected $table = "elementos_listas";
    protected $fillable = ['nombre','tipo_lista_id'];

    public function tipoListas(){
    	return $this->belongsTo(TipoListas::class);
    }
}
