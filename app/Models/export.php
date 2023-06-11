<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class export extends Model
{
    use HasFactory;
    protected $fillable = ['id','total_salary','transferred_amout','campaign_id'];

    public function campaign() 
    {
        return $this->belongsTo(Campaign::class);
    }
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
