<?php

class User {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Initialize the Database object
    }

    // Get user by email
    public function getUserByEmail($email) {
        $this->db->query("SELECT * FROM users WHERE email = :email LIMIT 1");
        $this->db->bind(':email', $email);
        return $this->db->single(); // Return single user object
    }

    // Register new user
    public function register($name, $email, $password, $role = 'user') {
        $this->db->query("INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)");
        $this->db->bind(':name', $name);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', $role);

        return $this->db->execute(); // Return true if user registered successfully
    }
}
