<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SupportText extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'country_title',
        'country_title_2',
        'description',
        'get_in_touch',
        'side_description',
    ];
}
