<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table ="departamento";
    protected $fillable = ["id_depto","descripcion","departamento_id","estado"];
    use HasFactory;

    public function equipo()
    {
        return $this->hasMany("App\Models\Equipo","departamento_id","id_depto");
    }
    public function galeria()
    {
        return $this->hasMany("App\Models\Galeria","departamento_id","id_depto");
    }
}
