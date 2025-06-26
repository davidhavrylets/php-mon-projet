<?php
abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = 'db.3wa.io';
        $dbname = 'davydhavrylets_crud_mvc'; 
        $username = 'davydhavrylets';
        $password = '26f472ba361f190453abd9784e08474d';
        

        $dsn = "mysql:host=$host;dbname=$dbname";

        $this->db = new PDO($dsn, $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}