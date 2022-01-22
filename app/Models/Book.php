<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'writter_id', 'genre_id', 'isbn', 'note', 'pages'];
    protected $with = ['writter', 'genre'];

    public function writter()
    {
        return $this->belongsTo(Writter::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
