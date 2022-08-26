<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income_product extends Model
{
    use HasFactory;

    protected $table = 'income_products';
    protected $primarykey ='id';
    protected $fillable = [
        'id_purchase_order',
        'id_product',
        'amount',
        'batch',
        'date_of_admission',
    ];
    public function providers()
{
    return $this->belongsTo('App\Models\Purchase_order;','id_purchase_order');
}
public function products()
{
    return $this->belongsTo('App\Models\Product','id_product');
}
}
