<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
        }
        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family: none;
        }

        .container{
            width:100;
            padding:20px;
            border:2px solid black;
            border-radius:15px;
            background-color: lightgray;
        }
        input[type="text"]{
            padding:10px;
            border-radius: 15px;
            border: 1px solid gray;
            width:50;
            margin-bottom:5px;

        } 
        input[type="submit"]{
            padding:10px 20px;
            border-radius: 15px;
            border:1px solid black;
            width:auto;
            cursor: pointer;
           display:block;
           margin:auto;
        }


   </style>

    <div class="container">
    <form action="day4.php" method="post">
    <label>quantity</label><br>
    <input type="text" name="quantity"><br>
    <input type="submit" value="submit">
    </form>
    </div>

</body>
</html>

<?php

$price = 100;
$item = "burger";
$quantity = $_POST["quantity"];
$total = null;


$total = $price * $quantity;

echo "You ordered {$quantity}  x {$item} <br>";
echo "Total price is {$total}";



?>
