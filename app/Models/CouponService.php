<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponService extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='coupoons_services';

}
