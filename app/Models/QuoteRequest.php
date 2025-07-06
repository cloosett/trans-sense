<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    protected $table = 'quote_requests';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'request_date',
        'distance_min',
        'distance_max',
        'cargo_type',
        'loading_type',
        'status'
    ];
    
    protected $attributes = [
        'status' => 'new'
    ];
    
    protected $casts = [
        'request_date' => 'date'
    ];
}
