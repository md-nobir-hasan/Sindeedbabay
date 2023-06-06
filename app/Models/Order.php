<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','address','phone','note','qty','p_price','shipping_price'];

    public function ShippingStatus(){
        return $this->belongsTo(ShippingStatus::class);
    }
}
