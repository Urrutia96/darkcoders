<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function suscrito(){
        if($this->subscribed('mountly') || $this->subscribed('threeMonths') || $this->subscribed('midYear')){
            return true;
        }
        return false;
    }
    public function tipoSuscripcion(){
        if($this->subscribed('mountly'))
            return 'mountly';
        if($this->subscribed('threeMonths'))
            return 'threeMonths';
        if($this->subscribed('midYear'))
            return 'midYear';

        return false
;
    }
}
