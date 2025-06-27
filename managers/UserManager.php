<?php

require_once 'models/User.php';
require_once 'managers/AbstractManager.php';

class UserManager extends AbstractManager
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function insert(User $user): void
    {
        $stmt = $this->db->prepare('INSERT INTO users (email, first_name, last_name) VALUES (:email, :first_name, :last_name)');
        $stmt->execute([
            'email' => $user->getEmail(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName()
        ]);
    }
}