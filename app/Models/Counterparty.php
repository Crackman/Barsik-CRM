<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counterparty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'counterparty_type_id',
        'respect_id',
        'group_counterparty_id',
        'phone',
        'email',
        'address',
        'remark',
    ];

    public function postings()
    {
        return $this->hasMany(Posting::class, 'counterparty_id', 'id');
    }

    public function passport()
    {
        return $this->hasOne(Passport::class, 'counterparty_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(CounterpartyType::class, 'counterparty_type_id', 'id');
    }

    public function respect()
    {
        return $this->belongsTo(Respect::class, 'respect_id', 'id');
    }

    public function group()
    {
        return $this->belongsTo(GroupCounterparty::class, 'group_counterparty_id', 'id');
    }
}
