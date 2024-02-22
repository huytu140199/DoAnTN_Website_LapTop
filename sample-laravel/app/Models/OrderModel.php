<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'bill';
    protected $fillable = [
         'total_price',
        'name_receive',
        'province_address_receive',
        'district_address_receive',
        'ward_address_receive',
        'detail_address_receive',
        'phone_receive',
        'email_receive',
        'money_transfer_form',
        'quantity',
        'total_price',
        'created_at'


    ];
}
