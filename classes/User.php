<?php
class User {
    protected $username;
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $role = 'User';
    
    public function __construct($obj) {
        $this->username = $obj["username"];
        $this->first_name = $obj["first_name"];
        $this->last_name = $obj["last_name"];
        $this->age = $obj["age"];
    }

    // Getters
    public function getUsername() {
        return $this->username;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getRole() {
        return $this->role;
    }
}

class Admin extends User {
    protected $role = 'Admin';
}