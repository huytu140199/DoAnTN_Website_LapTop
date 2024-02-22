<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Products extends Authenticatable
{

    public $timestamps = false;

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'products';
    protected $fillable = [
         'id_brand',
        'id_category',
        'name',
        'price',
        'ram',
        'image',
        'cpu',
        'capacity',
        'description'


    ];


}
