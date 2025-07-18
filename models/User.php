<?php
class User {
    private ?int $id; 
    private string $email;
    private string $firstName;
    private string $lastName;

    public function __construct(
        ?int $id = null, 
        string $email,
        string $firstName,
        string $lastName
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    
    public function getId(): ?int {
        return $this->id;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

   
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }
}