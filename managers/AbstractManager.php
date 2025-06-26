<?php

require_once 'models/User.php';
require_once 'managers/AbstractManager.php';

class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll(): array
    {
        $query = $this->db->query('SELECT * FROM users');
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        $users = [];

        foreach ($results as $result) {
            $users[] = new User(
                $result['id'],
                $result['email'],
                $result['first_name'],
                $result['last_name']
            );
        }

        return $users;
    }

    public function findOne(int $id): ?User
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return new User(
                $result['id'],
                $result['email'],
                $result['first_name'],
                $result['last_name']
            );
        }

        return null;
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

    public function update(User $user): void
    {
        $stmt = $this->db->prepare('UPDATE users SET email = :email, first_name = :first_name, last_name = :last_name WHERE id = :id');
        $stmt->execute([
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName()
        ]);
    }

    public function delete(int $id): void
    {
        $stmt = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }
}