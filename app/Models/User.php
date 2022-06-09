<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];
    /**
     * @var string[]
     */
    protected $appends=['wallet'];

    public function getWalletAttribute()
    {
        $wallet = Wallet::where('user_id',$this->id);
        if ($wallet->count())
            return $wallet->first()->value;
        else return 0;

    }//end fun



    #####################== driver ==###########################

    public function ScopeActive($query){
        return $query->where('is_confirmed',1);
    }


    public function ScopeSelection($query){
        return $query->select('id','user_type','logo','full_name','driver_name','phone','password','name','commission' ,'worker_name','is_confirmed');
    }

    public  function getLpgoAttribute($val){
        return($val !==null)?asset($val) :"";
    }




    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class,'user_id');
    }

    public function driver_orders()
    {
        return $this->hasMany(Order::class,'driver_id');
    }

    public function marketer_orders()
    {
        return $this->hasMany(Order::class,'marketer_id');
    }

}
