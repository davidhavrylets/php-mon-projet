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