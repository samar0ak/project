<!doctype html>
<html lang="en">
<?php include("header.php"); ?>

<body>





  <nav  class="navbar navbar-expand-lg m-1 navbar-dark bg-dark">
    <a class=" bg-success rounded text-white p-3 mb-2 navbar-brand" href="index.php">Tech</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log-Out</a>
        </li>
    
        
      </ul>
    <a href="add_user.php" ><button type="button" class=" mr-5  btn btn-m btn-primary" >Add User</button></a>

      <form action="view2.php" method="post" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="first_name" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <br>






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php
  include("script.php"); ?>
   <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>