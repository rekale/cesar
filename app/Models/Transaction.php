<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'total',
        'proof',
        'confirmed',
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
