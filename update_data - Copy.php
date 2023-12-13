<?php 

include "connection.php";

if(isset($_POST['field']) && isset($_POST['value']) && isset($_POST['id'])){
    $field = mysqli_real_escape_string($conn,$_POST['field']); 
    $value = mysqli_real_escape_string($conn,$_POST['value']); 
    $editid = mysqli_real_escape_string($conn,$_POST['id']);
    
    $query = "UPDATE crud1 SET ".$field."='".$value."' WHERE id=".$editid;
    mysqli_query($conn,$query);
    
    echo 1;
}
else{
    echo 0;
}
exit;