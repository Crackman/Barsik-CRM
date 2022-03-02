<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'counterparty_id',
        'series',
        'issued_by',
        'department_code',
        'date_birth',
        'date_issue',
        'place_birth',
        'inn',
    ];

    public function counterparty()
    {
        return $this->belongsTo('Counterparty::class', 'counterparty_id', 'id');
    }
}
