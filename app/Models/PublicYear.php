<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicYear extends Model
{
    use HasFactory;

    protected $table = 'publication_years';

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
