<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'repair_price',
        'cost_price',
        'group_work_id',
        'warranty',
        'salary',
        'comment'
    ];

    public $timestamps = false;

    public static function filter($group_work_id)
    {
        return empty($group_work_id) ? static::all()
            : static::where('group_work_id', $group_work_id)->get();
    }

    public function group()
    {
        return $this->belongsTo('App\Models\GroupWork', 'group_work_id', 'id');
    }
}
