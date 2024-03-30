<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function orderList()
    {
        return $this->belongsTo(OrderList::class);
    }
    
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
