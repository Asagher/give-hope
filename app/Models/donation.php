<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation extends Model
{


    use HasFactory;
    protected $fillable = [
        'amount', 'user_id', 'campaign_id'
    ];
    
    public function campaign() 
    {
        return $this->belongsTo(Campaign::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
