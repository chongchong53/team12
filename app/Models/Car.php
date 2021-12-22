<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable =[
        'car',
        'vid',
        'selling_price',
        'displacement',
        'energy_consumption'
    ];
    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor','vid','id');
    }
    public function scopeSenior($query)
    {
        $query->where('selling_price', '>', 500)
            ->orderBy('selling_price');
    }
}
