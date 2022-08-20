<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    
    protected $table = 'deliveries';
    protected $primarykey ='id';
    protected $fillable = ['id_route',
                           'estate',
                           'date_time_delivery',
                           'observation'
                          ];

public function routes()
{
    return $this->belongsTo('App\Models\Route','id_route');
}
}