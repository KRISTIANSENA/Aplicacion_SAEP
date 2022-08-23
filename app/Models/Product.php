<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primarykey ='id';
    protected $fillable = ['product_name',
                            'brand',
                            'model',
                            'state',
                            'design_color',
                            'Current_Quantity',
                            'factory_date',
                            'warranty',
                            'worth'

    ];
}