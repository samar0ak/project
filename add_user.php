<!DOCTYPE html>
<?php
session_start();

?>
<?php
 if (isset($_SESSION['email'])) {


    } else {
        header("Location: login.php");

    }
?>


<?php
include("connection.php"); ?>

<?php
if (isset($_POST["submit"])) {



    // Taking all 5 values from the form data(input)
    $fname = $_REQUEST['first_name'];
    $lname = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $education = $_REQUEST['education'];


    // We are going to insert the data into our sampleDB table
    $sql = "INSERT INTO crud1 VALUES ('','$fname',
    '$lname','$email','$contact','$education')";

    // Check if the query is successful
    if (mysqli_query($conn, $sql)) {


    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    header("Location: index.php");

}
?>

<body>
<?php include("navbar.php");
 ?>

    <center>
        <p class="h1">Add new user data</p>
        <form autocomplete="off" action="" method="post">
            <div class=" form-group">
                <label for="firstName">First Name:</label>
                <input class="form-control w-50" type="text" name="first_name" id="firstName">
            </div>
            <div class=" form-group">
                <label for="lastName">Last Name:</label>
                <input class="form-control w-50" type="text" name="last_name" id="lastName">
            </div>
            <div class=" form-group">
                <label for="Email">E-mail:</label>
                <input class="form-control w-50" type="email" name="email" id="Email">
            </div>
            <div class=" form-group">
                <label for="Contact">Contact:</label>
                <input class="form-control w-50" type="text" name="contact" id="Contact">
            </div>
            <div class=" form-group">
                <label for="Education">Education:</label>
                <input class="form-control w-50" type="text" name="education" id="Education">
            </div>
            <input class=" btn  btn-danger" name="submit" type="submit" value="Submit">
        </form>
    </center>

    <?php
    include("footer.php"); ?>
    <?php
    include("script.php"); ?>
</body>
</html>