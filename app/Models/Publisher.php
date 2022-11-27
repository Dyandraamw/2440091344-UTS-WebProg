<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'publishers';
    public function books(){
        return $this->hasMany(Publisher::class, "publisher_id","id");
    }
}
