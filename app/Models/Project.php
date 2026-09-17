<?php

namespace App\Models;

use Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'location', 'project_type', 'description', 'year', 'cover_image', 'is_featured',
    ];

    protected function casts(): array
    {
        return ['is_featured' => 'boolean', 'year' => 'integer'];
    }
}
