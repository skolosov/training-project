<?php


namespace App\classes;


use PDO;
use PDOException;

class Database
{
    private string $host = 'localhost';
    private string $db = 'training';
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

    public function load_json()
    {
        $json = file_get_contents('src/data/starships.json');
        $data = json_decode($json);
        $columns = [
            "name" => 'text',
            "model" => 'text',
            "starship_class" => 'text',
            "manufacturer" => 'text',
            "length" => 'float',
            "cargo_capacity" => 'bigint',
            "max_atmosphering_speed" => 'text',
        ];
        $exist_table = $this->query("drop table if exists starships;", [], true);

        //$exist_table = $this->query("select * from information_schema.tables where table_name like ?;", ["starships"]);

        //var_dump(count($exist_table));
        //if (!count($exist_table)) {
        $query_columns = [];
        foreach ($columns as $column => $type) {
            //array_push($query_columns,"$column $type");
            $query_columns[] = "$column $type";
        }
        $implode_columns = implode(", ", $query_columns);
        $t_cr_t = "create table starships (
                        id serial
		                constraint starships_pk
                        primary key,
			        $implode_columns)";

        $this->query($t_cr_t, [], true);
        //}

        $implode_columns = implode(", ", array_keys($columns));
        $format_string_value = str_repeat("? ", count($columns));
        $columns_params = explode(" ", $format_string_value);
        unset($columns_params[count($columns_params) - 1]);
        $columns_params = implode(", ", $columns_params);

        $t_cr_t = "insert into starships ($implode_columns) values ($columns_params)";

        foreach ($data as $row) {
            $values_string = [];
            foreach ($columns as $key => $value) {
                $values_string[] = preg_replace('/(\d+),(\d+)/', '${1}.${2}', $row->$key);
            }
            $this->query($t_cr_t, $values_string, true);
        }
    }



}