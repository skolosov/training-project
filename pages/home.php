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
        background-color: red;
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
        width: 30%;
    }
    #col2 {
        background-color: violet;
        flex-grow: 1;
    }
    
    
    
</style>
 
<div id="app">
    <div class="header">

    </div>
    <div class="content">
         <div class="columns">
            <div id="col1">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>    
                </ul>
            </div>
            <div id="col2">
                <table width="100%" border="1" cellpadding="3">
                    <tr align="center" >
                        <th colspan="2">Первый</th>
                        <th colspan="2">Второй</th>
                    </tr>
                    <tr align="right" >
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr align="right" >
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                    </tr>
                </table>
            </div>
         </div>
    </div>
    <div class="footer">

    </div>
</div>

</body>
</html>



