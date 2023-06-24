<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'department_id',
        'user_id',
        'role',
        'salary',
    ];
    public function department() 
    {
        return $this->belongsTo(Department::class);
    }
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
