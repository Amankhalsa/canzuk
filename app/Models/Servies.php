<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servies extends Model
{
    use HasFactory;

    protected $fillable = [    
        'name',
        'heading',
        'icon',
        'title',
        'description', 
 
];



}
