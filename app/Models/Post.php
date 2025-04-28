<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'title', 'content'];

    /**
     * A Post belongs to an Author.
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    /**
     * A Post can have many Comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
