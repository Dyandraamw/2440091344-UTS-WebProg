<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_category extends Model
{
    use HasFactory;
    protected $table = 'book_category';

    public function books()
    {
        return $this->belongsTo(Books::class,"book_id","id");
    }

    public function categories(){
        return $this->belongsTo(Categories::class,"category_id","id");
    }


}
