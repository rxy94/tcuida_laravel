<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diagnostico extends Model
{
    
    use HasFactory;

    protected $table = "diagnostico";
    protected $primaryKey = "idDiag";

    public $timestamps = false;


}
