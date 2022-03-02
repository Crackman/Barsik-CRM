<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'group_product_id',
        'unit_id',
        'purchase_price',
        'retail_price',
        'repair_price',
        'min_balance',
        'warranty'
    ];

    public static function filter($group_product_id)
    {
        return empty($group_product_id) ? static::all()
            : static::where('group_product_id', $group_product_id)->get();
    }

    public function group()
    {
        return $this->belongsTo('App\Models\GroupProduct', 'group_product_id', 'id');
    }

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit', 'unit_id', 'id');
    }

    public function postings()
    {
        return $this->belongsToMany(Posting::class);
    }
}
