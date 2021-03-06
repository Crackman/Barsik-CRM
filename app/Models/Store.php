<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static function getProductCount($store_id, $product_id)
    {
       return Store::find($store_id)->products->find($product_id)->pivot->count;
    }

    public function postings()
    {
        return $this->hasMany(Posting::class, 'store_id', 'id');
    }

    public function postingsToMany()
    {
        return $this->belongsToMany(Posting::class, 'posting_store', 'store_id', 'posting_id');
    }

    public function fromMoves()
    {
        return $this->hasMany(Move::class, 'from_store_id', 'id');
    }

    public function toMoves()
    {
        return $this->hasMany(Move::class, 'to_store_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_store', 'store_id', 'product_id')
            ->withPivot('count');
    }
}
