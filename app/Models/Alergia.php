<?php

/**
 * Adaptación del proyecto T-Cuida a Laravel
 * Autora: Ruyi Xia Ye - 2ºDAW
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alergia extends Model
{

    use HasFactory;

    protected $table = "alergia";
    protected $primaryKey = "idAlergia";
    
    public $timestamps = false;

}
