<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $table = 'routes';
    protected $primarykey ='id';
    protected $fillable = ['id_output_product',
                           'employee_id',
                           'assigned_zone',
                           'quantity_deliveries',
                           'service_time',
                           'vehicle_license_plate',
                           'vehicle',
                          ];
public function output_products()
{
    return $this->belongsTo('App\Models\Output_product','id_output_product');
}

public function employees()
{
    return $this->belongsTo('App\Models\Employee','employee_id');
}
}