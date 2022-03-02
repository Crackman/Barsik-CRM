<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'device_category_id'
    ];

    public $timestamps = false;

    public function devices()
    {
        $this->hasMany('App\Models\Orders\Device', 'brand_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\DeviceCategory', 'device_category_id', 'id');
    }

    public function models()
    {
       return $this->hasMany('App\Models\DeviceModel', 'brand_id', 'id');
    }
}
