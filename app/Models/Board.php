<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    public function column()
    {
        return $this->hasMany(Column::class);
    }
    public function author()
    {
        return $this->belongsToMany(User::class, 'author_id');
    }


}
