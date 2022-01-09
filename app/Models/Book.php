<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Contracts\Writer;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'writter_id', 'genre_id', 'isbn', 'note', 'pages'];
    protected $with = ['writter', 'genre'];

    public function writter()
    {
        return $this->belongsTo(Writer::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
