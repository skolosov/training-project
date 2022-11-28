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
    $db->load_json();
    ?>
</pre>

<style>
    .table {
        width: 100%;
        border: 1px solid black;
    }

    .table-spread tr {
        background-color: white;
    }

    .table-spread tr:nth-child(even) {
        background-color: grey;
    }
</style>
<div id="app">
    <div class="header">

    </div>
    <div class="content">
        <div class="columns">
            <!--            <div id="col1">-->
            <!--                <ul>-->
            <!--                    <li>Пункт 1-->
            <!--                        <ul class="second">-->
            <!--                            <li>Подпункт</li>-->
            <!--                            <li>Подпункт</li>-->
            <!--                            <li>Подпункт</li>-->
            <!--                        </ul>-->
            <!--                    </li>-->
            <!--                    <li>Пункт 2-->
            <!--                        <ul class="second">-->
            <!--                            <li>Подпункт</li>-->
            <!--                            <li>Подпункт</li>-->
            <!--                            <li>Подпункт</li>-->
            <!--                        </ul>-->
            <!--                    </li>-->
            <!--                    <li>Пункт 3-->
            <!--                        <ul class="second">-->
            <!--                            <li>Подпункт</li>-->
            <!--                            <li>Подпункт</li>-->
            <!--                            <li>Подпункт</li>-->
            <!--                        </ul>-->
            <!--                    </li>-->
            <!--                    <li>Пункт 4-->
            <!--                        <ul class="second">-->
            <!--                            <li>Подпункт</li>-->
            <!--                            <li>Подпункт</li>-->
            <!--                            <li>Подпункт-->
            <!--                                <ul class="third">-->
            <!--                                    <li>хрень какая то</li>-->
            <!--                                    <li>которая не встает сбоку</li>-->
            <!--                                </ul>-->
            <!--                            </li>-->
            <!--                        </ul>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <div id="col2">
                <?php
                $header = [
                    'ID',
                    'name',
                    'val1',
                    'val2',
                    'val3',
                    'val4',
                ];
                $db_rez = $db->query('select * from vals');
                $classes = ['table', 'table-spread'];
                $tableGenerator = new TableGenerate($header, $db_rez, $classes);
                $tableGenerator->getTable();
                ?>
                <!--                <table width="100%" border="1" cellpadding="10">-->
                <!--                    <thead>-->
                <!--                    <tr align="center">-->
                <!--                        <th>Name</th>-->
                <!--                        <th>Val1</th>-->
                <!--                        <th>Val2</th>-->
                <!--                        <th>Val3</th>-->
                <!--                        <th>Val4</th>-->
                <!--                    </tr>-->
                <!--                    </thead>-->
                <!--                    <tbody>-->
                <!--                    </tbody>-->
                <!---->
                <!---->
                <!--                </table>-->
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
</div>

</body>
</html>

