<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;


class Equipo extends Model
{
    protected $table = "equipo";
    protected $fillable=["id_equipo","descripcion","foto","departamento_id","estado"];
    use HasFactory;


 
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento','id_depto','departamento_id');
    }
}
