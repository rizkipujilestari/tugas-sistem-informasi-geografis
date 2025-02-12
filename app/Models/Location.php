<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_name', 'latitude', 'longitude', 'religion_id', 'district_id', 'address', 'description', 
        '_token', '_method', 
    ];

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
