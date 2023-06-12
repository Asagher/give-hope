<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
    public function department() 
    {
        return $this->hasMany(Department::class);
    }
    public function export() 
    {
        return $this->hasMany(Export::class);
    }
}
