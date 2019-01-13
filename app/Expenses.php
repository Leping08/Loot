<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expenses extends Model
{
    use SoftDeletes;

    protected $fillable = ['date', 'name', 'type_id', 'amount'];

    public function type()
    {
        return $this->belongsTo(ExpenseType::class);
    }
}
