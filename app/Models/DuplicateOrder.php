<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuplicateOrder extends Model
{
    use HasFactory;
    protected $fillable = ['name','address','phone','note','qty','p_price','shipping_price'];

    public function ShippingStatus(){
        return $this->belongsTo(ShippingStatus::class);
    }
}
