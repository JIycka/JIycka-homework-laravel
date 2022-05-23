<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public function authorcard()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function executor()
    {
        return $this->belongsTo(User::class, 'executor_id');
    }

    public function column()
    {
        return $this->belongsTo(Column::class, 'column_id');
    }
}
