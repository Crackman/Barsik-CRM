<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupCounterparty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function counterparties()
    {
        return $this->hasMany('Counterparty::class', 'group_counterparty_id', 'id');
    }
}
