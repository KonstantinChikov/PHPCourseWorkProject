<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseLocation extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','landmarks'];

    public function villa(){
        return $this->hasMany(Villa::class);
    }
}
