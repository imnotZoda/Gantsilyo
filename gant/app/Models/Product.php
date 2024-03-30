<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'prodname',
        'prod_desc',
        'type',
        'price',
        'img'
    ];

 
    public function carts()
    {
        return $this->belongsTo(Cart::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function orderList()
    {
        return $this->belongsToMany(OrderList::class);
    }

    public function suppliers()
    {

        return $this->hasMany(ProductSupplier::class,'product_suppliers', 'product_id', 'supplier_id');
    }
    // public function orderItems()
    // {
    //     return $this->hasMany(OrderItem::class);
    // }
}
