<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'list_books';

    // list column fillable
    protected $fillable = [
        'author_id',
        'category_id',
        'publisher_id',
        'publication_year_id',
        'cover',
        'title',
        'slug',
        'description'
    ];


    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function publication_year()
    {
        return $this->belongsTo(PublicYear::class);
    }
}
