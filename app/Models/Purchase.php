<?php

namespace App\Models;

use App\Models\Destination;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'destination_id',
        'user_id',
        'tickets',
        'total',
        'proof',
        'confirmed',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
