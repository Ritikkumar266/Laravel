<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
//Why to use the MongoDB\Laravel\Eloquent\Model instead of Illuminate\Database\Eloquent\Model?

//Because we are using MongoDB as our Database, we need to use the MongoDB\Laravel\Eloquent\Model which is specifically designed to work with MongoDB. It provides the necessary functionality to interact with MongoDB collections and documents, whereas the Illuminate\Database\Eloquent\Model is designed to work with SQL databases like MySQL, PostgreSQL, etc. Using the correct model ensures that we can perform database operations correctly and efficiently with MongoDB in our Laravel application.
class Item extends Model
{
    //
    protected $connection = 'mongodb';
    protected $table = 'items';
    //specify the table name if it differs from the model name
    protected $fillable = ['name', 'quantity','price'];
    //fillable property is used to specify which fields can be mass assigned, it is used to protect against mass assignment vulnerability
}




