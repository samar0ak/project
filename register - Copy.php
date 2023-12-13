<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo'css/register.css'; ?>">
<?php include("connection.php"); ?>

    <title>Document</title>
</head>
<body>





<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>   <nav> Name</nav></b></label>
    <input class="circle" type="text" placeholder="Enter name" name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input class="circle" type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input class="circle" type="password" placeholder="Enter Password" name="password" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input class="circle" type="password" placeholder="Confirm Password" name="cpassword" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" value="Register" name="submit" class="registerbtn" >
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>



<?php

if (isset($_POST["submit"])) {


    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];




if($password==$cpassword){

    $sql = "SELECT * FROM register WHERE email = '$email' ;";

    $data = mysqli_query($conn, $sql);
    // Check if the query is successful
    if ($data) {

       $totalrow=mysqli_num_rows($data);

       if($totalrow==0){




    // We are going to insert the data into our sampleDB table
    $sql = "INSERT INTO register VALUES ('$name','$email','$password','$cpassword')";

    // Check if the query is successful
    $data=mysqli_query($conn, $sql);
    if ($data) {


        header("Location: login.php");
    mysqli_close($conn);



    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);




       }
       else{
        echo'<div style="position: absolute; top: 74px; left: 200px; width: 70vw;" class="  alert mt-5 alert-danger alert-dismissible fade show" role="alert">
        <strong>SORRY!!!</strong> E-mail is already registered.
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
else{
    echo'<div  style="position: absolute; left: 200px; top: 74px; width: 70vw;" class="alert mt-5 alert-danger alert-dismissible fade show" role="alert">
    <strong>Ohh!!!</strong> please enter same  Paassword .
    <button type="button" class="close ml-5" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';;
}
}









?>




<?php
    include("footer.php"); ?>






</body>
</html>