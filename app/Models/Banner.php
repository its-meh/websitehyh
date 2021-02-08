<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
	protected $table = "banner";
	protected $fillable=["foto","estado","accion","titulo","descripcion"];
    use HasFactory;

}
