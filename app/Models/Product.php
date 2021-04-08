<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = [
        'id','name','type','quantity','description','amount','discount','gst'
    ];

    // Insert Query for Product
    public static function product_add($request){
        self::insert(array(
            'name' => $request['name'],
            'type' => $request['type'],
            'quantity' => $request['quantity'],
            'description' => $request['description'],
            'amount' => $request['amount'],
            'discount' => $request['discount'],
            'gst' => $request['gst']
        ));
        return true;
    }
    // Update Query for Product
    public static function product_update($request){
        self::where('id', $request['product_id'])->update(array(
            'name' => $request['name'],
            'type' => $request['type'],
            'quantity' => $request['quantity'],
            'description' => $request['description'],
            'amount' => $request['amount'],
            'discount' => $request['discount'],
            'gst' => $request['gst']
        ));
        return true;
    }
    public static function update_product($product,$quantity){
        for($i=0;$i<count($product);$i++){
            $availabeQuantity = self::where('name',$product[$i])->pluck('quantity');
            self::where('name', $product[$i])->update(array(
                'quantity' => $availabeQuantity[0] - $quantity[$i],
            ));    
        }
        return true;
    }
}
