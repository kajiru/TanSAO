<?php

namespace TanSAO;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * A user can only have many TanSAO-student Accounts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function students(){

        return $this->hasMany('TanSAO\Student');
    }

    /**
     * A user can add many Test Dates.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function testDates(){

        return $this->hasMany('TanSAO\TestDate');
    }

    /**
     * A user(Administrator) can register many Payments
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments(){

        return $this->hasMany('TanSAO\Payment');
    }
}
