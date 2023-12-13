
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
                    $sql = "SELECT * FROM crud1 WHERE id='$id'";
                    $result = $conn->query($sql);


                    $row = $result->fetch_assoc();


                    $field1name = $row["fname"];
                    $field2name = $row["lname"];
                    $field3name = $row["email"];
                    $field4name = $row["contact"];
                    $field5name = $row["education"];
                    $field6name = $row["id"];


                    $conn->close();
                    echo
                    $row["fname"]."</br>   ".
                    $row["lname"]."</br>".
                    $row["email"]."</br>".
                    $row["contact"]."</br>".
                    $row["education"];


                     ;

                }
else{
    echo 'didnt get data';
}

        }
        ?>



<?php
