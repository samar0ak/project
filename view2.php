



<!DOCTYPE html>
    <html lang="en">

    <?php session_start(); ?>
    <?php
 if (isset($_SESSION['email'])) {


    } else {
        header("Location: login.php");

    }
?>

    <?php include("header.php"); ?>
    <body>
    <?php include("navbar.php"); ?>

        <?php

       $fname = $_REQUEST['first_name'];
        include("connection.php");

        $query = "SELECT * FROM crud1 WHERE fname='$fname'";
        $result = $conn->query($query);
        $totalrow=mysqli_num_rows($result);

        if (  $totalrow==0) {

            echo' <h2 class=" mt-5 ml-5"> No
            <span style="color: grey;">
            Data found named   <span style="color: red;">
            '.$fname.'
            </span>
            </span>

        </h2>';

        }

        else{
            echo '


            <table class="table table-dark" border="0" cellspacing="2" cellpadding="2">

           <thead>  <tr>
           <th> <font face="Arial">FirstName</font> </th>
           <th> <font face="Arial">LastName</font> </th>
           <th> <font face="Arial">Email</font> </th>

           <th> <font face="Arial">Contact</font> </th>
           <th> <font face="Arial">Education</font> </th>




        </tr> </thead>';
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["fname"];
                $field2name = $row["lname"];
                $field3name = $row["email"];
                $field4name = $row["contact"];
                $field5name = $row["education"];
                $field6name = $row["id"];


                echo '<tr class="h-100">
                  <td>' . $field1name . '</td>
                  <td>' . $field2name . '</td>
                  <td>' . $field3name . '</td>
                  <td>' . $field4name . '</td>
                  <td>' . $field5name . '</td>


              </tr>';
            }
            echo ' </table > ';
            $result->free();
            echo' <h2 class=" mt-5 ml-5"> Data of
            <span style="color: orange;">
            '.$field1name.'
            </span>
            <span style="color: orange;">
                 '.$field2name.'
            </span>
        </h2>';


        }

        ?>



        <?php
    include("footer.php"); ?>

<?php
    include("script.php"); ?>
    </body>

    </html>
