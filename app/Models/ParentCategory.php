<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ParentCategory extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name', 'slug', 'ordering'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function children(){
        return $this->hasMany(Category::class,'parent','id');
    }
}
