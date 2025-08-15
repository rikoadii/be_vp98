<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_projects',
        'location_projects',
        'description_projects',
        'category_projects',
        'image',
        'isMain',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_projects');
    }
}
