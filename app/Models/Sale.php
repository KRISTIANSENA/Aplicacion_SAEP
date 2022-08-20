<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primarykey ='id';
    protected $fillable = [ 'data_time_sale',
                            'data_time_packing',
                            'data_time_dispatch',


    ];
}
