<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;
    protected $table = 'shopping';
    protected $primarykey ='id';
    protected $fillable = ['customer_id',
                           'date_time_shopping',
                          ];
}
