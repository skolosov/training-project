<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../normalize.css" rel="stylesheet">
    <link href="pages/home_sample_style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<pre>
><?php

    use App\classes\Database;
    use App\classes\TableGenerate;


    $db = new Database();

    ?>
</pre>

<pre>
    <?php
    $starships = file_get_contents('src/data/starships.json');
    $arr_starships = json_decode($starships);
    //$dbconn = pg_connect('dbname=postgres');
    //$result = pg_insert($dbconn, "tstarships", $arr_starships);
    //var_dump($arr_starships);
    //var_dump($starships);
    $vsel0 = "insert into tstarships(name) values (";
    foreach ($arr_starships as $k => $record) {
        // Вставляем в БД каждый $object
        //$vsel .= .$value.")";
        //echo $arr_starships[$k] => $v.\n";
        foreach ($record as $kr=>$value ) {
            var_dump($value);
            //echo "$kr";
        }

        /*$vsel="insert into tstarships(name,model,manufacturer,cost_in_credits,length,max_atmosphering_speed,crew,passengers,cargo_capacity,consumables,hyperdrive_rating,MGLT,starship_class,pilots,films,created,edited,url)
            values ("$starship["name"]","$starship["model"]",
                    "$starship["manufacturer"]",
                    "$starship["cost_in_credits"]",
                    "$starship["length"]",
                    "$starship["passengers"]",
                    "$starship["crew"]",
                    "$starship["cargo_capacity"]",
                    "$starship["consumables"]",
                    "$starship["max_atmosphering_speed"]",
                    "$starship["hyperdrive_rating"]",
                    "$starship["MGLT"]",
                    "$starship["pilots"]",
                    "$starship["films"]",
                    "$starship["created"]",
                    "$starship["edited"]",
                    "$starship["url"]"
                    )";*/
        //var_dump($vsel);
        //  $db->query($vsel);
    }
    ?>
</pre>


</body>
</html>

