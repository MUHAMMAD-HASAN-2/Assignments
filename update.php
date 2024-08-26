<?php
require_once("connection.php");
// echo "<pre>";
// print_r($_POST);

$Product_name=$_POST["name"];
$Category=$_POST["email"];
$Price=$_POST["age"];
$Quantity=$_POST["city"];
$Added_date=$_POST["cityy"];


$query="UPDATE products SET name='$Product_name',email='$Category',age=$Price,city='$Quantity',cityy='$Added_date' WHERE id=$id ;";


$result = mysqli_query($connect,$sql);

if(mysqli_query($connect,$query)){
    header("Location: index.php");
}else{
    echo "Error To Update Data";
}
// echo $query;

