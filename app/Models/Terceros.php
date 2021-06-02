<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{
    use HasFactory;

    protected $table = "terceros";

    protected $fillable = [
        'tipo_identificacion',
        'numero_identificacion',
        'nombre',
        'nombre2',
        'apellido1',
        'apellido2',
        'departamento_id',
        'municipio_id',
        'tipo_contribuyente_id',
    ];

    public function departamentos(){
    	return $this->belongsTo(Departamentos::class, 'id');
    }

    public function municipios(){
    	return $this->belongsTo(Ciudades::class,'id');
    }

    public function tipo_contribuyente(){
    	return $this->belongsTo(TipoContribuyente::class);
    }
}
