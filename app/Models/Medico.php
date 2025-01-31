<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medico extends Model
{

    use HasFactory;

    protected $table = "medico";
    protected $primarykey = "idMed";

    public $timestamps = false;

    
}
