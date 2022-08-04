<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OriginalTemplate extends Model
{
    use HasFactory;

    protected $table = 'original_templates';

    protected $fillable = [
        'name',
        'content_html',
        'content_css',
        'preview_image',
        'author',
    ];
}
