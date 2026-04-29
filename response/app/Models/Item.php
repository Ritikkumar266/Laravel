<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
class Item extends Model
{
    //
    protected $connection = 'mongodb';
    protected $table = 'items';
    //specify the table name if it differs from the model name
    protected $fillable = ['id', 'name', 'quantity','price'];
    //fillable property is used to specify which fields can be mass assigned, it is used to protect against mass assignment vulnerability
}
