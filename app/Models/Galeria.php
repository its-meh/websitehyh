<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{	
	protected $table = "galeria";
	protected $fillable=["galeria_id","foto","descripcion","estado","departamento_id","url"];
    use HasFactory;

    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento','departamento_id','id_depto');
    }
}

