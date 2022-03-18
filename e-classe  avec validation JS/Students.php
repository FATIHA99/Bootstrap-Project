
<?php include 'header.php';

  $home="";
  $course="";
  $students="active";
  $payment="";
  $reports="";
  $settings="";?>
<body class="bg-light">
    <main class="container-fluid  ">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php' ; ?>
            <div class="col p-0">
                <!-- header -->
                <?php include 'navbar.php'; ?>
                <!-- Title and button  -->
                <div
                    class=" d-flex main-container     flex-sm-row    flex-column  container bg-light  justify-content-between py-3">
                    <div>
                        <p class="fw-bold "> Student List </p>
                    </div>
                    <div>
                        <i class="far fa-sort text-info me-3 h5 "></i>

    <!--   add student  -->
                        <a href="" class="btn btn-info  text-light"   data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW STUDENT</a>
                        <!-- modal for add button  -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                              
                                        <div class="card">
                                            <div class="card-header bg-info">
                                                <h3> Create new User</h3>
                                            </div>
                                            <div class="card-body bg-light">

                                                <form method="POST" action="operation.php">
                                                        <!-- name -->
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input name="name" class="form-control" require>
                                                                </div>
                                                        <!-- email -->
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input name="email" type="email" required class="form-control " require>
                                                                
                                                                </div>

                                                        <!-- phone  -->
                                                                <div class="form-group">
                                                                    <label>Phone</label>
                                                                    <input name="phone" class="form-control" require>
                                                                </div>

                                                        <!-- enrol number  -->
                                                                <div class="form-group">
                                                                    <label>Encrol Number </label>
                                                                    <input name="number" class="form-control" require>
                                                                </div>

                                                        <!-- date of admission -->
                                                                <div class="form-group">
                                                                    <label>Date of admission </label>
                                                                    <input type="date" name="date" class="form-control" require>
                                                                </div>
                                                        <!-- save  -->
                                                                <button class="btn btn-success mt-5 " name="save">Submit</button>
                                                                
                                                </form>
                                            </div>
                                       
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                
                                </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                <!-- TABLEAU -->

                <div class="mx-3 table-responsive">
                  <table class="table">
                     <thead class="bg-light  table-head ">
                            <tr class="border-top ">
                            <th scope="col">image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">phone</th>
                                <th scope="col">Enrol Number</th>
                                <th scope="col">Date of admission </th>
                                <th scope="col" class="d-none">exe-tool</th>
                            </tr>
                       </thead>
         <?php
            // affichage   
                       $req = $con -> query('SELECT * from students');
                        while( $ligne = $req -> fetch()) :  ?>  <!-- fetch return array asssociative   -->
                         <!-- foreach($ligne as $value ) -->
                        <tr class= "border-5  border-light bg-white align-middle  ligne">
                        <td class='py-3'> <img style="width: 60px; height:30 px;" src ="ressources/Ima.png"></td> 
                            <td class='py-3'> <?php  echo $ligne['name']; ?></td> 
                            <td class='py-3'> <?php  echo $ligne['email']; ?></td> 
                            <td class='py-3'> <?php  echo $ligne['phone'];?></td> 
                            <td class='py-3'> <?php  echo $ligne['encrolNumber'];?></td> 
                            <td class='py-3'> <?php  echo $ligne['dateOfAdmission'];?></td> 
                             <td>
                 <!--  id  to modify -->
                            <a  href="update.php?id=<?php echo $ligne['id_student']; ?>" class ="btn  btn-sm">
                            <i class="fal fa-pen pe-2 text-info"></i>
                            </a>
                 <!-- delete   -->
                            <a href="operation.php?delete=<?php echo $ligne['id_student']; ?>" class="btn  btn-sm">
                           
                            <i class="fal fa-trash text-info"></i>
                            </a>
                            </td>

 
                        </tr>
                    
                       <?php  endwhile; ?>   
         
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

<?php 
          if(!$_SESSION["login"])
          { 
            // header("location:login.php"); 
            echo "<script> window.location.href='login.php'; </script>"; 
          }

          $now=time();
          if($now>$_SESSION['end'])
          {
              session_unset();
              session_destroy();
              header("location:login.php");
          }
 ?>




  