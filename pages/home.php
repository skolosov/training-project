<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../normalize.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<style>
    html, body{
        width: 100%;
        height: 100%;
    }
    #app {
        background-color: grey;
        width: 100%;
        height: 100%;
    }
    .header {
        background-color: pink;
        width: 100%;
        height: 10%;
    }
    .content {
        background-color: green;
        width: 100%;
        height: 80%;
    }
    .footer {
        background-color: violet;
        width: 100%;
        height: 10%;
    }
    .columns {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    #col1 {
        background-color: yellow;
        width: 200px;
    }
    #col2 {
        background-color: red;
        flex-grow: 1;
    }
    #col3 {
        background-color: blue;
        width: 100px;
    }
    
</style>
 
<div id="app">
    <div class="header">

    </div>
    <div class="content">
         <div class="columns">
            <div id="col1">col1</div>
            <div id="col2">col2</div>
            <div id="col3">col3</div>
         </div>
    </div>
    <div class="footer">

    </div>
</div>

</body>
</html>



