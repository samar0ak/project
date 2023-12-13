<?php
// include("connection.php");

// $id = $_GET['myid'];

// $query = "DELETE FROM crud1 WHERE id='$id'";
// $result = $conn->query($query);
// header("Location: index.php");
?>


<?php

session_start();
        if (isset($_SESSION['email'])) {
            include "connection.php";

            // $id = 0;
            // if(isset($_POST['id'])){
            //    $id = mysqli_real_escape_string($conn,$_POST['id']);
            // }
            $id = mysqli_real_escape_string($conn,$_POST['id']);
                // Check record exists
                // $checkRecord = mysqli_query($conn,"SELECT * FROM posts WHERE id=".$id);
                // $totalrows = mysqli_num_rows($checkRecord);

                if($id > 0){
                    // Delete record
                    $query = "DELETE FROM crud1 WHERE id=".$id;
                    mysqli_query($conn,$query);
                    echo 1;
                    exit;
                }else{
                    echo 0;
                    exit;
                }


        } else {
            header("Location: login.php");

        }
        ?>



<?php
