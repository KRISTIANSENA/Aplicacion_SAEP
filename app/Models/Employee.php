<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primarykey ='id';
    protected $fillable = [
        'user_id',
        'employee_name',
        'employee_last_name',
        'identification_type',
        'identification_number',
        'email',
        'address',
        'charge',
        'date_of_birth',
        'phone_number'


    ];
}
