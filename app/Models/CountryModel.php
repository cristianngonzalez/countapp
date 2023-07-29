<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    use HasFactory;

    protected $table = 'countries';

    protected $fillable = [
        'name'
    ];

    //Relationships
    public function payment_methods(){
        return $this->hasMany(PaymentMethodModel::class, 'country_id');
    }
}
