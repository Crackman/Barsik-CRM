<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'counterparty_id',
        'incoming_number',
        'acceptance_date',
        'comment',
        'summa'
    ];

    public function counterparty()
    {
        return $this->belongsTo(Counterparty::class, 'counterparty_id', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'posting_product', 'posting_id','product_id')
            ->withPivot('count');
    }
}
