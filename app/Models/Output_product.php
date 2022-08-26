<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output_product extends Model
{
    use HasFactory;
    protected $table = 'output_products';
    protected $primarykey ='id';
    protected $fillable = [
        'id_sales_invoices',
        'amount',
        'batch',
        'departure_date',
    ];
    public function sales_invoices()
{
    return $this->belongsTo('App\Models\Sale_invoice;','id_sales_invoices');
}
}
