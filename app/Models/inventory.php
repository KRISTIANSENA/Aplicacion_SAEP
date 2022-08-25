<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';
    protected $primaryKey = 'id';
    protected $fillable = ['id_product',
        'state',
        'design_color',
        'current_quantity',
        'factory_data',
        'warrenty',
        'worth',

    ];
    public function products()
    {
        return $this->belongsTo('App\Models\Product','id_product');
    }
}
