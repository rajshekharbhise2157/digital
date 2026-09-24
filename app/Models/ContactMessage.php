<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'contact_messages';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'services',
        'message',
        'status',
        'contacted_at',
    ];

    protected $casts = [
        'services' => 'array',
        'contacted_at' => 'datetime',
    ];
}