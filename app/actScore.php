<?php

namespace TanSAO;

use Illuminate\Database\Eloquent\Model;
use TanSAO\Student;

class ACTScore extends Model
{
    protected $table = 'ACTScores';

    protected $guarded = ['id'];

    protected $dates = ['testDate'];




    /**
     * An ACT test score belongs to one TanSAO student only.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(){
        return $this->belongsTo('TanSAO\student');
    }
}
