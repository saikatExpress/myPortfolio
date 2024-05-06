<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status',
        'flag',
    ];

    protected $casts = [
        'id'         => 'integer',
        'name'       => 'string',
        'email'      => 'string',
        'subject'    => 'string',
        'message'    => 'string',
        'status'     => 'string',
        'flag'       => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
