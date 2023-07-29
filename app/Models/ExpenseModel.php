<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseModel extends Model
{
    use HasFactory;

    protected $table = 'expense';

    protected $fillable = [
        'expense_name',
        'expense_amount',
        'expense_date',
        'expense_category',
        'expense_description',
        'expense_status',
        'expense_created_by',
        'expense_updated_by',
    ];

    //Relationships
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }

    public function currency(){
        return $this->belongsTo(CurrencyModel::class, 'currency_id');
    }

    public function payment_method(){
        return $this->belongsTo(PaymentMethodModel::class, 'payment_method_id');
    }



}
