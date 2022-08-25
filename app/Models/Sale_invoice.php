<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_invoice extends Model
{
    use HasFactory;
    protected $table = 'sales_invoices';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id_employee',
        'id_customer',
        'id_product',
        'detail',
        'amount',
        'unit_value',
        'subtotal',
        'iva',
        'stronghold',
        'deductions',
        'total',
        'sales_invoices_support'

    ];

}
