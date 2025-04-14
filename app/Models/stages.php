<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stages extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_stars',
        'num_question',
        'lock',	
        ] ;
        protected $table='stages';
}
