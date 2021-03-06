<?php

class User{
    public $id;
    public $email;
    public $name;
    public $password;
    public $birthdate;
    public $city;
    public $work;
    public $cover;
    public $avatar;
    public $token;
}

interface userDAO{
    public function findByToken($token);
    public function findByEmail($email);
    public function update(User $u);
    public function insert(User $u);
}