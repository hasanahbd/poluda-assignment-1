<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'content',
        'excerpt',
        'image',
        'is_featured',
        'status',
        'slug',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function scopeFeatured()
    {
        return Post::where('is_featured', 1)
            ->where('status', 'published')
            ->first();
    }
    public function scopeNotFeatured()
    {
        return Post::where('is_featured', 0)
            ->where('status', 'published');
    }

    public function author()
    {
        return $this->belongsTo(User::class,'author_id', 'id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }
}
