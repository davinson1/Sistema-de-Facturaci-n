<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table = 'departamento';
    protected $primaryKey = 'Id_Depar';
    protected $fillable = ['Nombre'];    
}