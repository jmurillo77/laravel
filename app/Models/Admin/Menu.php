<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";
    protected $fillable     = ['Nombre'];
    protected $guarded      = ['IdMenu'];
    protected $timestamps   = '';
}
