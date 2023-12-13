<!DOCTYPE html>
<html lang="en">


<?php include "index_header.php"; ?>



<body>

  <!DOCTYPE html>
  <html lang="en">



  <body>

    <?php if (isset($_SESSION["email"])) {
    } else {
        header("Location: login.php");
    } ?>

    <?php include "navbar.php"; ?>

    <?php
    include "connection.php";

    if (!isset($_GET["page"])) {
        $page = 1;
    } else {
        $page = $_GET["page"];
    }

    $results_per_page = 10;

    $query = "SELECT * FROM crud1";
    $result = $conn->query($query);
    $number_of_result = mysqli_num_rows($result);
    $number_of_page = ceil($number_of_result / $results_per_page);
    $page_first_result = ($page - 1) * $results_per_page;

    $queryy =
        "SELECT * FROM crud1 LIMIT " .
        $page_first_result .
        "," .
        $results_per_page;

    echo '



    <table class="table table-dark" border="0" cellspacing="2" cellpadding="2">
    <thead>  <tr>

    
          <th> <font face="Arial">FirstName</font> </th>
          <th> <font face="Arial">LastName</font> </th>
          <th> <font face="Arial">Email</font> </th>
          <th> <font face="Arial">Contact</font> </th>
          <th> <font face="Arial">Education</font> </th>
          <th> <font face="Arial">Update</font> </th>
          <th> <font face="Arial">Delete</font> </th>
          <th> <font face="Arial">View</font> </th>



      </tr> </thead>
      ';

    if ($result = $conn->query($queryy)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["fname"];
            $field2name = $row["lname"];
            $field3name = $row["email"];
            $field4name = $row["contact"];
            $field5name = $row["education"];
            $field6name = $row["id"];

            echo '<tr>

                  <td>
                      <div contentEditable="true" id="fname_' .$field6name . '" class="edit" >  ' .  $field1name . '</div>
                 </td>


                  <td>
                      <div contentEditable="true" id="lname_' .$field6name .'" class="edit" >' .$field2name .' </div>
                 </td>



                  <td>
                      <div contentEditable="true" id="email_' .$field6name .'" class="edit" >' .$field3name .'</div>
                  </td>


                <td>
                   <div contentEditable="true" id="contact_' .$field6name .'" class="edit" >' .$field4name .'</div>
                 </td>


               <td>
                     <div contentEditable="true" id="education_' .$field6name .'" class="edit" >' .$field5name .'</div>
               </td>



                  <td>
                  <a href="update.php?myid=' .$field6name .'" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                </td>


                  <td>
                       <a id="' .$field6name .'" data-id="' .$field6name .'"class="btn delete btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                       </td>


                      <td>
                   <button  id="' .$field6name .'" onclick="viewdata(this.id)"  type="button" class="btn viewdata btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">View</button>
                   </td>

              </tr>';
        }
        echo '
            <tr>
                  <td colspan="8" > <a href="add_user.php" ><button type="button" class=" mr-5  btn btn-m btn-warning" >Add User</button></a>
                </td>

              </tr>
        </table>

        <nav style="margin-left: 100px; " aria-label="...">
  <ul class="pagination">
  <li class="page-item disabled">
</li>
';

        for ($page = 1; $page <= $number_of_page; $page++) {
            echo '    <li style="padding: 10px;" class="page-item"> <a  class="page-link" href = "index.php?page=' .
                $page .
                '">' .
                $page .
                "   </a> </li> ";
        }

        echo '
  <li class="page-item">
    </li>
    </li>
  </ul>
</nav>
        ';

        $result->free();
    }

    include "footer.php";
    ?>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                class="fa-solid fa-circle-xmark"></i></button>
          </div>
          <div id="content" class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src='script.js' type='text/javascript'></script>

    <script>

      function viewdata(id) {
        $.ajax({
          url: 'viewdata.php',
          type: 'POST',
          data: { id: id },
          success: function (response) {
            document.getElementById("content").innerHTML = response;

          }
        });


      }
    </script>
  </body>

  </html>

  <!-- href="delete.php?myid=' . $field6name . '" -->