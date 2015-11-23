<?php

namespace TanSAO;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    /**
     * IMPORTANT NOTES ON STUDENT REGISTRATION STATUS!
     *  ==>Database Column = [registrationStatus]
     *
     *  A student must can have a status starting from 0 onwards.
     *   0 : Any registered student, who's UNVERIFIED.
     *   1 : A verified student BUT not in Contract with TanSAO.
     *   2 : A contract student.
     *
     *
     *-----------------------------------------------------------|
     */

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that cannot be mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Format the Date of birth before it's saved.
     * @param $date
     */
    public function setDateOfBirthAttribute($date){
      $this->attributes['dateOfBirth'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    /**
     * Scope a query to include students who've completed registration only.
     *
     * @param $query
     * @return mixed
     */
    public function scopeRegComplete($query){

        return $query->where('registrationStatus', '=','1');

    }

    /**
     * Scope a query to include students from one country only.
     * @param $query
     * @param $c -->Country
     * @return mixed
     */
    public function scopeCountry($query, $c){
        return $query->where('countryOfResidence','=',$c);
    }



    /**
     * A TanSAO students can only have one user account.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(){

        return $this->belongsTo('TanSAO\user');
    }

    /**
     * A student can have many Test Accounts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function testAccounts(){

        return $this->hasMany('TanSAO\testAccount');
    }

    /**
     * A student can have many ACT scores
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actScores(){

        return $this->hasMany('TanSAO\actScore');

    }
}
