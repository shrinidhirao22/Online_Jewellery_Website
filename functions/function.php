<?php

include("conn/connect.php");

function display_cat()
{
 global $conn;
 $query = "select * from category";
 return $result = mysqli_query($conn,$query);  
}
function get_product($category_id="")
{
 global $conn;
 $query = "select * from products";
 if($category_id !="")
 {
    $query ="select * from products where category_id = $category_id";
 }
 return $result = mysqli_query($conn,$query);  
}

 



?>  


