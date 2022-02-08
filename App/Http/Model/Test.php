<?php

namespace App\Http\Model;

use AndreiCroitoru\FrameworkPhp\Model;

class Test extends Model
{
    protected string $tableName = 'users';
    protected string $primaryKey = 'id';

    public $id;
    public $username;
    public $email;
    public $password;
    public $activated;
}
