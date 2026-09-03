<?php

class Database {
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $password;
    private $connection;

    public function __construct(){
        $env = parse_ini_file (__DIR__ . "/../.env");

        $this->host =$env['DB_HOST'];
        $thhis->port =$env['DB_PORT'];
        $this->db_name =$env['DB_DBNAME'];
        $this->user =$env['DB_USER'];
        $this->password =$env['DB_PASS'];
    }

    public function connet(){
        $dsn = "mysql:host=($this->host);port=($this->port);dbname=($this->dbname)";

        $this->connection = new PDO (dsn,$this->username,$this->password);

        return $this->connection;

    }
}