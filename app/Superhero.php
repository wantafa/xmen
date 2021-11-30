<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $table = 'superhero';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
    ];
    
}
