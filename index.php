<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./normalize.css" rel="stylesheet">
    <link href="./styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="app">
    <div id="header" class="container">header</div>
    <div id="wrap" class="container">
        <form method="Get" action="http://training"> 
            <input type="text" name="name" placeholder="input name"/>
            <input type="text" name="phone" placeholder="input phone"/>
            <input type="text" name="addr"placeholder="input addr"/>
            <button type="submit">Submit</button>
        </form>
        <pre>
        <?php
            print_r($_GET);
        ?>
        </pre>
    </div>
    <div id="footer" class="container">footer</div>
</div>
<!-- <h1>asd</h1>
<h2>asd</h2>
<h3>asd</h3>
<h4>asd</h4>
<h5>asd</h5>
<h6>asd</h6>

<div>

</div>

<table>
    <thead>
        <tr>
            <th>asdasd</td>
            <th>asdasd</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>asdasd</td>
            <td>asdasd</td>
        </tr>
    </tbody>
</table>

<form>
    <input type="text"/>
    <input type="radio"/>
    <input type="checkbox"/>
    <input type="range"/>
    <button>jshgdfjhsdgf</button>
</form> -->

<!-- GET, POST -->
<!-- <form method="Get" action="http://training"> 
    <input type="text" name="name"/>
    <input type="text" name="phone"/>
    <input type="text" name="addr"/>
    <button type="submit">Submit</button>
</form> -->
<?php
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// print_r($_POST);
// echo "<pre>";
// print_r($_SERVER);


// echo '
// <form method="post" action="http://training"> <!-- GET, POST -->
//     <input type="text" name="name"/>
//     <input type="text" name="phone"/>
//     <input type="text" name="addr"/>
//     <button type="submit">Submit</button>
// </form>
// ';

?>
</body>
</html>
