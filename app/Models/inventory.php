<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $primarykey ='id';
    protected $fillable = [ 'id_income_products',
                            'state',
                            'design_color',
                            'Current_Quantity',
                            'factory_date',
                            'warranty',
                            'worth'
    ];
    public function income_products()
{
    return $this->belongsTo('App\Models\Income_product','id_income_products');
}
}
