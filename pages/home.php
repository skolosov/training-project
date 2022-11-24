<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../normalize.css" rel="stylesheet">
    <link href="pages/home_style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<pre>
><?php

    use App\classes\Database;

    $db = new Database();
    $db_rez = $db->query('select * from vals');
    var_dump($db_rez);

    ?>
</pre>

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
                <table width="100%" border="1" cellpadding="10">
                    <thead>
                    <tr align="center">
                        <th>Name</th>
                        <th>Val1</th>
                        <th>Val2</th>
                        <th>Val3</th>
                        <th>Val4</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($db_rez as $db_rec) {
                        echo "<tr>";
                        foreach ($db_rec as $key => $value) {
                            if ($key !== 'id') {
                                echo "<td>$key:$value</td>";
                            }
                        }
                        //echo "<td>$db_rec->name</td>";
                        //echo "<td>$db_rec->val1</td>";
                        //echo "<td>$db_rec->val2</td>";
                        //echo "<td>$db_rec->val3</td>";
                        //echo "<td>$db_rec->val4</td>";
                        echo "</tr>";
                    }

                    ?>
                    </tbody>


                </table>
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
</div>

</body>
</html>
