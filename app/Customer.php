<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=
    [
       'fname',
       'lname',
       'phone',
       'email',
       'address1',
       'address2',
       'city',
       'password',
       'country',
       'state',
       'postal_code'

    ];
}
