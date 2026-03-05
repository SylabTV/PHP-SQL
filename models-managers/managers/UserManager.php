<?php

require_once __DIR__ . '/AbstractManager.php';
require_once __DIR__ . '/../models/User.php';

class UserManager extends AbstractManager {

    public function __construct() {
        parent::__construct();
    }

    public function create(Users $user): Users {

        $query = $this->db->prepare(
            "INSERT INTO users (firstName, lastName, email, password, created_at)
             VALUES (:firstName, :lastName, :email, :password, NOW())"
        );

        $query->execute([
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ]);

        return $user;
    }

    public function update(Users $user): Users {

        $query = $this->db->prepare(
            "UPDATE users
             SET firstName = :firstName,
                 lastName = :lastName,
                 email = :email,
                 password = :password
             WHERE id = :id"
        );

        $query->execute([
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'id' => $user->getId()
        ]);

        return $user;
    }

    public function delete(Users $user): void {

        $query = $this->db->prepare(
            "DELETE FROM users WHERE id = :id"
        );

        $query->execute([
            'id' => $user->getId()
        ]);
    }

    public function findOne(int $id): ?Users {

        $query = $this->db->prepare(
            "SELECT * FROM users WHERE id = :id"
        );

        $query->execute([
            'id' => $id
        ]);

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return null;
        }

        return new Users(
            (int)$result['id'],
            $result['firstName'],
            $result['lastName'],
            $result['email'],
            $result['password'],
            new DateTime($result['created_at'])
        );
    }

    public function findAll(): array {

        $query = $this->db->prepare(
            "SELECT * FROM users"
        );

        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        $users = [];

        foreach ($results as $result) {
            $users[] = new Users(
                (int)$result['id'],
                $result['firstName'],
                $result['lastName'],
                $result['email'],
                $result['password'],
                new DateTime($result['created_at'])
            );
        }

        return $users;
    }
}