<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'proj_image',
        'description',
        'start_date',
        'completion_date',
        'no_days_taken',
    ];
}
