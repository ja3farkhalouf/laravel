<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'leeters',
        'anser',
        'points',
        'stars',
        'image',
        'talmeh',	
        ] ;
        protected $table='question';
}
