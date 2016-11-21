<?php

namespace System;

class Model {
    public function create() {
        $attributes = []

        foreach ($this as $key => $value) {
            $attributes[":{$key}"] = $value;
        }

        $conn = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'root');
        $sth = $conn->prepare("INSERT INSERTTO administradores (name, email, password) VALUES (:name, :email, :password)")
        $sth->execute($attributes);
    }
}
