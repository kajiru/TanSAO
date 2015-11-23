<?php

namespace TanSAO;

use Illuminate\Database\Eloquent\Model;

class TestAccount extends Model
{
    protected  $table = 'testAccounts';

    protected $guarded = ['id'];


    public function student(){

        return $this->belongsTo('TanSAO\student');
    }
}
