<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeccionArriendo extends Model
{
    protected $table="seccion_arriendo";
    protected $fillable=["id","titulo","descripcion","estado"];
    use HasFactory;
}
