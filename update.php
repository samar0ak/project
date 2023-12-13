<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
    <?php
 if (isset($_SESSION['email'])) {


    } else {
        header("Location: login.php");

    }
?>
<?php include("header.php");
//  include("navbar.php");
include("connection.php");
?>


<?php
$id = $_GET['myid'];
if (isset($_POST["submit"])) {

  $fname = $_REQUEST['first_name'];
  $lname = $_REQUEST['last_name'];
  $email = $_REQUEST['email'];
  $contact = $_REQUEST['contact'];
  $education = $_REQUEST['education'];


  $sql = "UPDATE crud1 set  fname='$fname', lname='$lname' ,email='$email' ,contact='$contact' ,education='$education' where id='$id'";



  $result = $conn->query($sql);

  $conn->close();
  
  header("Location: index.php");


} else {

  $id = $_GET['myid'];
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


}

?>

<body>

  <?php
  include("navbar.php");
  ?>
  <h2 class=" mt-5 ml-5">Update User Data</h2>

  <form autocomplete="off" class="p-5" method="post">

    <div class=" form-group">
      <input type="text" class="form-control w-50" name="first_name" value="<?php echo $field1name; ?>">
    </div>
    <div class="form-group">
      <input type="text" class="form-control w-50" name="last_name" value="<?php echo $field2name; ?>">
    </div>
    <div class="form-group">
      <input type="email" class="form-control w-50" name="email" value="<?php echo $field3name; ?>">
    </div>
    <div class="form-group">
      <input type="number" class="form-control w-50" name="contact" placeholder="<?php echo $field4name; ?>">
    </div>
    <div class="form-group">
      <input type="text" class="form-control w-50" name="education" value="<?php echo $field5name; ?>">
    </div>

    <button type="submit" name="submit" value="submit" class="btn btn-warning">Update</button>
  </form>


  <?php
  include("script.php"); ?>


<?php
    include("footer.php"); ?>
</body>



</html>