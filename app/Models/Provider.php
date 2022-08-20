<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'providers';
    protected $primarykey ='id';
    protected $fillable = [ 'provider_name',
                            'nit',
                            'business_type',
                            'telephone',
                            'address',
                            'place',
                            'metod_conveyance'

    ];
}
