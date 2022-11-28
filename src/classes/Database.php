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

    public function query(string $query, array $params = [], bool $fetchflag = false)
    {
        $stmt = $this->pdo->prepare($query);
        if (count($params)) {
            $stmt->execute($params);
        } else {
            $stmt->execute();
        }
        if (!$fetchflag) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }

    public function db_mount_insert($table,$array) {

        $str = "insert into $table (";
        while(list($name,$value) = each($array)) {
            $str .= "$name,";
        }
        $str[strlen($str)-1] = ')';
        $str .= " values (";
        reset($array);
        while(list($name,$value) = each($array)) {
            if(is_string($value))
                $str .= "'$value',";
            else
                $str .= "$value,";
        }
        $str[strlen($str)-1] = ')';
        $str .= ";"    ;

        return $str;
    }


    function db_build_insert($table, $array)
    {
        if (count($array) === 0) {
            return false;
        }
        $columns = array_keys($array);
        $values = array_values($array);
        unset($array);

        for ($i = 0, $c = count($values); $i$c{{;
        }
        }
            ++$i) {
            if (is_bool($values[$i])) {
                $values[$i] = $values[$i] ? 'true' : 'false';
            } elseif (is_null($values[$i])) {
                $values[$i] = 'NULL';
            } elseif (is_string($values[$i])) {
                $values[$i] = "'" . addslashes($values[$i]) . "'";
            } elseif (!is_numeric($values[$i])) {
                return false;
            }
        }

        return "INSERT INTO $table ($column_quote" . implode(', ', $columns) .
        ") VALUES (" . implode(', ', $values) . ")";
    }

}