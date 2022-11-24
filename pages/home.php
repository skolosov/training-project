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
        flex-direction: column;
        flex-wrap: wrap;
    }
    #col1 {
        background-color:  #c2c2c2;
        width: 100%;
        height: 20%;
    }
    #col1 ul{
    	list-style: none;
    }
    #col1 > ul > li{
	    float: left;
	    width: 180px;
	    /*position: relative;*/
        display: block;
        background: violet;
        border: 1px solid black;
        color: black;
        padding: 8px;
        text-align: center;
        text-decoration: none;
    }
    #col1 li .second{
        display: none;
        position: relative;
        top: 100%;
        /*left: 100%;
	    top: 0;*/
    }
    #col1 li:hover .second{
	    display: block;
        background: violet;
    }
    #col1 li li{
	    width: 180px;
    }
    #col1 li li .third{
	    display: none;
	    position: relative;
	    left 100%;
        top: 0;
    }
    #col1 li li:hover .third{
	    display: block;
        background: violet;
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
                    <li>Пункт 1
                        <ul class = "second">
                            <li>Подпункт</li>
                            <li>Подпункт</li>
                            <li>Подпункт</li>
                        </ul>
                    </li>
                    <li>Пункт 2
                        <ul class = "second">
                            <li>Подпункт</li>
                            <li>Подпункт</li>
                            <li>Подпункт</li>
                        </ul>
                    </li>
                    <li>Пункт 3
                        <ul class = "second">
                            <li>Подпункт</li>
                            <li>Подпункт</li>
                            <li>Подпункт</li>
                        </ul>
                    </li>
                    <li>Пункт 4
                        <ul class = "second">
                            <li>Подпункт</li>
                            <li>Подпункт</li>
                            <li>Подпункт
                                <ul class = "third">
						            <li>Подпункт подпункта</li>
						            <li>Подпункт подпункта</li>
						        </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
		    </div>
            <div id="col2">
                <table width="100%" border="1" cellpadding="10">
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
<?php
use App\classes\Database;

$db = new Database();
$db->query('select * from edu_forms');