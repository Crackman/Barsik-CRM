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
        'warranty',
        'dirty',
        'parent_id'
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

    public function parents()
    {
        return$this->hasMany(Product::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return$this->belongsTo(Product::class, 'parent_id', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }

    public function postings()
    {
        return $this->belongsToMany(Posting::class, 'posting_product', 'product_id', 'posting_id')
            ->withPivot('coming_count', 'real_count');
    }
}
