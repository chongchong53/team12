<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable =[
        'vendor',
        'country',
        'founded_time',
    ];
    public function cars()
    {
        return $this->hasMany('App\Models\Car','vid');
    }
    public function scopecountry($query, $country)
    {
        $query->where('country', '=', $country);
    }
}
