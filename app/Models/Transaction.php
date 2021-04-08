<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    
    protected $fillable = [
        'product_info','total','customer_name','customer_email'
    ];
     // Insert Transaction
     public static function transaction_add($productQuantity,$name,$total,$email){
        self::insert(array(
            'product_info' => $productQuantity,
            'total' => $total,
            'customer_name' => $name,
            'customer_email' => $email,
        ));
        return true;
    }
}
