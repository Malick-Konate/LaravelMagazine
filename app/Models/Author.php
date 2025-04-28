<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Allow mass assignment
    protected $fillable = ['name', 'email'];

    /**
     * An Author can have many Posts.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
