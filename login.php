<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo 'css/login.css'; ?>"">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("connection.php"); ?>


    <title>Document</title>
</head>



<body>
    <br>
    <br>
    <br>


    <form action="" method="post">
        <div class="imgcontainer user">
            <img src="https://cdn-icons-png.flaticon.com/512/1053/1053244.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="email"><b>E-mail</b></label>
            <input class="circle" type="email" placeholder="Enter your email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input class="circle" type="password" placeholder="Enter Password" name="password" required>
            <input type="submit" value="Login" name="submit" class="registerbtn">
            <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
            <a class="cancelbtn" style="  color:white" href="register.php">Register</a>

        </div>
    </form>





    <?php

    if (isset($_POST["submit"])) {


        // Taking all 5 values from the form data(input)
        $email = $_REQUEST['email'];

        $password = $_REQUEST['password'];


        // We are going to insert the data into our sampleDB table


        $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password';";

        $data = mysqli_query($conn, $sql);
        // Check if the query is successful
        if ($data) {

            $totalrow = mysqli_num_rows($data);

            if ($totalrow == 1) {
                $_SESSION['email'] = $email;
                header("Location: index.php");
                mysqli_close($conn);
            } else {
                echo '<div style="position: absolute; top: -10px; left: 70px; width: 50vw; " class=" ptop alert mt-5 alert-danger alert-dismissible fade show" role="alert">
            <strong>SORRY!!!</strong> E-mail or password is wrong .
            <button type="button" class="close ml-5" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            }


        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);


    }

    ?>


    <?php
    include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>


</body>

</html>