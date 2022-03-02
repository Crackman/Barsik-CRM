<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function devices()
    {
        $this->hasMany('App\Models\Orders\Device', 'device_category_id', 'id');
    }

    public function brands()
    {
        return $this->hasMany('App\Models\Brand', 'device_category_id', 'id');
    }
}
