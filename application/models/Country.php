<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Country extends Eloquent {

    protected $primaryKey = 'country_id';
    protected $table = 'country';

    public $timestamps = false;

}