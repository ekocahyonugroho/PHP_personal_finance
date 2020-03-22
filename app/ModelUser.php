<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $table = 'users';
}

class ModelFamily extends  Model{
    protected $table = 'users_family';
}
