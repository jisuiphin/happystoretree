<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'author', 'publisher', 'year', 'description'];

    public function book()
    {
        return $this->belongsTo(Book::class, "book_id");
    }
}
