<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = [
        'image',
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
    ];
}
