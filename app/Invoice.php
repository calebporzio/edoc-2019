<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public static function all($columns = [])
    {
        // sleep(2);

        return parent::all();
    }
}
