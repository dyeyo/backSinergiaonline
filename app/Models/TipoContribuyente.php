<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContribuyente extends Model
{
    use HasFactory;

    protected $table = "tipo_contribuyentes";
    protected $fillable = ['nombre'];

    public function terceros(){
    	return $this->hasMany(Terceros::class);
    }
}
