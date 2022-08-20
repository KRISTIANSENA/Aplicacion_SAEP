<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primarykey ='customer_id';
    protected $fillable = [
        'user_id',
        'name',
        'last_name',
        'email',
        'identification_type',
        'identification_number',
        'business_name',
        'telephone',
        'address'


    ];
}
