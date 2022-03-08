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

    public function postings()
    {
        return $this->hasMany(Posting::class, 'store_id', 'id');
    }

    public function postingsToMany()
    {
        return $this->belongsToMany(Posting::class, 'posting_store', 'store_id', 'posting_id');
    }
}
