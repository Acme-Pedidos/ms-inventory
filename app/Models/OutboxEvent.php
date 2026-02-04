<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutboxEvent extends Model
{
    use HasFactory;

    protected $table = 'outbox_events';

    protected $keyType = 'string';
    public $incrementing = false;

    protected $casts = [
        'payload' => 'array',
        'published_at' => 'datetime',
    ];
}
