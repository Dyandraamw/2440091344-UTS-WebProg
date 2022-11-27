<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function publisher(){
        return $this->belongsTo(Publisher::class,"publisher_id","id");
    }

    public function book_category()
    {
        return $this->hasMany(Book_category::class,"book_id","id");
    }
}
