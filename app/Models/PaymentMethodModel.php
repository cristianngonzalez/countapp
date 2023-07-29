<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethodModel extends Model
{
    use HasFactory;

    protected $table = 'payment_methods';

    protected $fillable = [
        'name',
        'icon'
    ];

    //Relationships
    public function expenses(){
        return $this->hasMany(ExpenseModel::class, 'payment_method_id');
    }

    public function country(){
        return $this->belongsTo(CountryModel::class, 'country_id');
    }
}
