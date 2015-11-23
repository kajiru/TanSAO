<?php

namespace TanSAO;

use Illuminate\Database\Eloquent\Model;

class TestDate extends Model
{
    protected $table ='testDates';

    protected $guarded = ['id'];


    /**
     * A test date can be added by one user only.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){

        return $this->belongsTo('TanSAO\User');
    }


}
