<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_category_id',
        'brand_id',
        'device_status_id',
        'order_type_id',
        'device_model_id',
        'number_mobile',
        'defect',
        'complete_before'
    ];

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\DeviceCategory', 'device_category_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\DeviceStatus', 'device_status_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\OrderType', 'order_type_id', 'id');
    }

    public function model()
    {
        return $this->belongsTo('App\Models\DeviceModel', 'device_model_id', 'id');
    }
}
