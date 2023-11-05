<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function shipping_address()
    {
        return $this->hasOne(Shipping::class);
    }
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
