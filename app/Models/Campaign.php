<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable=[
        'id','title','slug','goalAmount','description','imgurl','startdate','enddate','donation','status',
    ];
    public function donation() {
        return $this->hasMany(Donation::class);
    }
    public function payment() {
        return $this->hasMany(Payment::class);
    }
    public function export() {
        return $this->hasMany(Exoprt::class);
    }
}
