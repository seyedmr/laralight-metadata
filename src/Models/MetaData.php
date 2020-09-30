<?php

namespace SeyedMR\LaraliteMetadata\Models;

use Illuminate\Database\Eloquent\Model;

class MetaData extends Model
{
    function Owner(){
        return $this->belongsTo($this->model,'owner_id');
    }
}
