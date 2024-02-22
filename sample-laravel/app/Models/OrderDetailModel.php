<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    use HasFactory;
    protected $table = 'bil_detail';
    protected $fillable = [
         'id_bill',
         'id_product',
         'quantity'



    ];
}
