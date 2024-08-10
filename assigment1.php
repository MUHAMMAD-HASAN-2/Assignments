<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <style>
        h1{
            
            text-align: center;
            color: red;
            font-family: algerian;
        
        }
        h2{
            
            text-align: center;
            color: purple;
            font-family: algerian;
            
        }
        .a1{
        
            text-align: center;
            color: brown;
            font-family: algerian;

        }
        .a2{
        
        text-align: center;
        color: brown;
        font-family: algerian;

    }
    </style>
</head>
<body>
    <h2>PHP ASSIGNMENT 1</h2>
    <h3 class="a1">The Discount that customer get</h3>
   
</body>
</html>
<?php

//    Assignment 1
// task 1

$customer = 'regular';
$purchase = 500 ;
$day = 'Monday' ;
//$customer_regular = 'regular' ;
//$customer_premium = 'premium' ;
//$guest = 'guest' ;
if($customer === 'regular'){
    echo '<h1> Customer Type : &nbsp ' .$customer. ' &nbsp, Apply 10% discount on over $100 shopping</h1>' ;
}
elseif ($customer === 'premium'){
    echo '<h1>Customer Type : &nbsp ' .$customer. ' &nbsp, Apply 20% discount on regardless of any purchase</h1>' ;
}
elseif ($customer === 'guest'){
    echo '<h1>Customer Type : &nbsp ' .$customer. ' &nbsp, No discount on shopping</h1>' ;
}
else{
    echo 'Nothing' ;
}
echo ' <h3 class="a2">The Purchase tier in which the customer at </h3>' ;
if($purchase < 500 ){
    echo '<h1>Total purchase ' . '$'.$purchase .', So Your customer tier is Bronze</h1>' ;
}
elseif($purchase === 500 || $purchase === 1000){
    echo '<h1>Total purchase ' . '$'.$purchase .', So Your customer tier is Silver</h1>' ;
}
elseif($purchase > 1000){
   echo '<h1>Total purchase ' . '$'.$purchase .', So Your customer tier is Gold</h1>' ;
}
else{
    echo 'Nothing' ;
}
echo ' <h3 class="a2"> Personalized greeting based on the day of the week </h3>' ;

switch ($day) {
    case 'Monday':
       echo '<h1>Happy Monday! Start your week with a great deal!</h1>' ;
        break;
    case 'Tuesday':
        echo '<h1>Happy Tuesday! Start your week with a great deal!</h1> ' ;
        break; 
    case 'Wednesday':
        echo '<h1>Happy Wednesday! Start your week with a great deal!</h1> ' ;
        break;    
    case 'Thursday':
        echo '<h1>Happy Thursday! Start your week with a great deal!</h1> ' ;
        break;  
    case 'Friday':
        echo '<h1>Thank God It is Friday! Enjoy your weekend shopping!</h1>' ;     
        break;
    case 'Saturday':
        echo '<h1>Happy Saturday! Enjoy your weekend shopping!</h1>' ;
        break;
            
    default:
        echo '<h1>Today is Sunday Enjoy</h1>' ;
        break;
}
?>