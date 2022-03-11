<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_store_id',
        'to_store_id',
        'summa',
        'comment',
    ];

    public function fromStore()
    {
        return $this->belongsTo(Store::class, 'from_store_id', 'id');
    }

    public function toStore()
    {
        return $this->belongsTo(Store::class, 'to_store_id', 'id');
    }
}
