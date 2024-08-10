<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            color: blueviolet;
            font-family: algerian;
        }
        .a1{
            text-align: center;
            color: red;
            font-family: algerian;
        }
    </style>
    
</head>
<body>
    <u>
    <h2 class="a1">The Article status </h2></u>

</body>
</html>
<?php

// Assignment 2
// task 2

$Article_status = 'Published';
$message = ($Article_status === 'Published') ? "<h1>The Article status is ".' " '.$Article_status.' " '."So the Article is Live</h1>" : 
(($Article_status === 'Draft') ? "<h1>The Article status is ".' " '.$Article_status.' " '." So the Article is draft</h1>" : "");
echo $message;
echo '<h2 class="a1">The Article Views </h2></u>';

$Article_views = 5000 ;
$message = ($Article_views > 1200) ? "<h1>The Article has ".'"'.$Article_views.'"' ." So the Article is popular</h1>" : "<h1>This article is live</h1>";
echo $message;

?>