<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallRequest extends Model
{
    protected $table = 'call_requests';
    
    protected $fillable = [
        'name',
        'phone',
        'cargo_type',
        'loading_type',
        'message',
        'status'
    ];
    
    protected $attributes = [
        'status' => 'new'
    ];
}
