<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    protected $table = "ciudades";
    protected $fillable = ['nombre'];

    public function terceros(){
    	return $this->hasMany(Terceros::class);
    }

}
