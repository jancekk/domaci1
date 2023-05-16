<?php
class User
{
    private $host;
    private $username;
    private $password;
    private $db;
    private $mysqli;
    public function __construct()
    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->db = 'accounts';
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->db) or die($this->mysqli->error);
    }
    
}