<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public function notificationcard()
    {
        return $this->belongsTo(Card::class, 'card_id');
    }

    public function subscription()
    {
        return $this->belongsToMany(Subscription::class, 'subscription_notification');
    }
}
