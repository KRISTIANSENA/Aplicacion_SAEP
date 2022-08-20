<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primarykey ='id';
    protected $fillable = ['provider_id',
                           'product_id',
                           'date_time_order',
                           'date_time_received',
                           'state',
                           'amount',
                          ];

}
