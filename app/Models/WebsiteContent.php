<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteContent extends Model
{
    protected $table = 'web_contents';

    protected $fillable = [
        'tenant_id',
        'key',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
    ];
}
