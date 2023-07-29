<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyModel extends Model
{
    use HasFactory;

    protected $table = 'currencies';

    protected $fillable = [
        'name',
        'symbol'
    ];

    //Relationships
    public function expenses(){
        return $this->hasMany(ExpenseModel::class, 'currency_id');
    }
}
