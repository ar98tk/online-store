<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = [];
    public function type(){
        return $this->type() == 1 ? 'مصروفات' : 'ايرادات';
    }
}
