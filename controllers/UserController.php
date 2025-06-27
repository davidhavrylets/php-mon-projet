<?php

class UserController
{
    public function list(): void
    {
        $template = 'users/list';
        require 'templates/layout.phtml';
    }

    public function show(): void
    {
        $template = 'users/show';
        require 'templates/layout.phtml';
    }

    public function create(): void
    {
        $template = 'users/create';
        require 'templates/layout.phtml';
    }

    public function checkCreate(): void
    {
          $email = $_POST['email'] ?? '';
    $firstName = $_POST['first_name'] ?? '';
    $lastName = $_POST['last_name'] ?? '';

   
    $user = new User(null, $email, $firstName, $lastName);

    
    $manager = new UserManager();
    $manager->insert($user);

    
    header('Location: index.php?route=show_user');
    
     
    }

    public function update(): void
    {
        $template = 'users/update';
        require 'templates/layout.phtml';
    }

    public function checkUpdate(): void
    {

    }

    public function delete(): void
    {
        
    }
}