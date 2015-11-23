<?php

namespace TanSAO;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{

    protected $table = 'payments';

    protected $guarded = ['id'];


    /**
     * A payment can be made by one user only.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('TanSAO\User');
    }
}
