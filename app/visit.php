<?php

namespace TanSAO;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'visits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
