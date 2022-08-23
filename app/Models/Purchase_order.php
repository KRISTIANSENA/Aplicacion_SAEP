<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_order extends Model
{
    use HasFactory;
    
    protected $table = 'purchase_orders';
    protected $primarykey ='id';
    protected $fillable = [ 'id_employee',
                            'id_provider',
                            'id_product',
                            'detail',
                            'amount',
                            'unit_value',
                            'subtotal',
                            'iva',
                            'stronghold',
                            'deductions',
                            'total',
                            'purchase_invoice_support',
    ];
public function employees()
{
    return $this->belongsTo('App\Models\Employee','id_employee');
}
public function providers()
{
    return $this->belongsTo('App\Models\Provider','id_provider');
}
public function products()
{
    return $this->belongsTo('App\Models\Product','id_product');
}


}