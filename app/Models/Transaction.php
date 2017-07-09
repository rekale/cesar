<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'total',
        'proof',
        'confirmed',
        'expired_at',
    ];

    public function destinations()
    {
        return $this->belongsToMany(Destination::class)->withPivot('tickets', 'total');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
