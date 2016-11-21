<?php

use System\Model;

class UserModel extends Model {
    public $name;
    public $email;
    public $password;
    public $role;

    public function __construct($name, $email, $password, $role){
        $this->name = $name;
        $this->email = $email;
        $this->password = $this->encrypt($password);
        $this->role = $role;
    }

    public function encrypt($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}

/*
Tabla usuarios

id | name | email | password | role
*/
