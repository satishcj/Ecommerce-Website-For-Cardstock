
<?php


$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$product_id = mysqli_real_escape_string($link, $_REQUEST['product_id']);
$product_name = mysqli_real_escape_string($link, $_REQUEST['product_name']);
$product_price = mysqli_real_escape_string($link, $_REQUEST['product_price']);
$product_quantity = mysqli_real_escape_string($link, $_REQUEST['product_quantity']);
$product_description = mysqli_real_escape_string($link, $_REQUEST['product_description']);

$sql = "INSERT INTO items(product_id,product_name,product_price,product_quantity,product_description) VALUES ('$product_id','$product_name','$product_price','$product_quantity','$product_description')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);

?>

