<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $table = 'investments';

    protected $fillable =[
        'amount','deposit'
    ];
}
