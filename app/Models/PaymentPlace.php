<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPlace extends Model
{
    use HasFactory;
    protected $table='payments_places';
    protected $guarded = [];

}
