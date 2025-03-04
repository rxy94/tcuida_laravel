<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends Model
{
    use HasFactory;
    
    protected $table = "paciente";
    protected $primaryKey = "idPac";

    public $timestamps = false;

}
