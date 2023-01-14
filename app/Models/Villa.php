<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;
    protected $fillable = ['type_id','house_location_id','name','beds','rooms','bathrooms'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function house_location()
    {
        return $this->belongsTo(Location::class);
    }
}
