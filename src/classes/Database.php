<?php


namespace App\classes;


use PDO;
use PDOException;

class Database
{
    private string $host = 'localhost';
    private string $db = 'postgres';
    private string $user = 'postgres';
    private string $password = ''; // change to your password
    public ?PDO $pdo;

    public function __construct()
    {
        $this->connect();
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    public function connect()
    {
        try {
            $dsn = "pgsql:host=$this->host;port=5432;dbname=$this->db;";
            $this->pdo = new PDO($dsn, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query(string $query, array $params = [])
    {
        $stmt = $this->pdo->prepare($query);
        if (count($params)) {
            $stmt->execute($params);
        } else {
            $stmt->execute();
        }
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        var_dump($data);
    }
}