<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table        = "modulos";
    protected $fillable     = ['Nombre'];
    protected $guarded      = ['IdModulo'];
    //protected $timestamps   = false;
}
