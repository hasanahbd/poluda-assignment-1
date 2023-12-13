<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function getroutekeyname()
    {
        return 'slug';
    }

    protected $fillable = [
        'name',
        'slug',
        'description',
       
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_category', 'category_id', 'post_id');
    }

}
