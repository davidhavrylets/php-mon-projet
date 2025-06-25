<?php

require_once 'controllers/UserController.php';

class Router
{
    public function handleRequest(array $get): void
    {
        $controller = new UserController();

        if (isset($get['route']) && $get['route'] === 'show_user') {
            $controller->show();
        } elseif (isset($get['route']) && $get['route'] === 'create_user') {
            $controller->create();
        } elseif (isset($get['route']) && $get['route'] === 'check_create_user') {
            $controller->checkCreate();
        } elseif (isset($get['route']) && $get['route'] === 'update_user') {
            $controller->update();
        } elseif (isset($get['route']) && $get['route'] === 'check_update_user') {
            $controller->checkUpdate();
        } elseif (isset($get['route']) && $get['route'] === 'delete_user') {
            $controller->delete();
        } else {
            $controller->list();
        }
    }
}