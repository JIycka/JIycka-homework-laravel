<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function subscriptionuser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subscriptioncard()
    {
        return $this->belongsTo(Card::class, 'card_id');
    }

    public function notification()
    {
        return $this->belongsToMany(Notification::class, 'subscription_notification');
    }

}
