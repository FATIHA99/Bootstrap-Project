<?php 
  $home="";
  $course="";
  $students="";
  $payment="active";
  $reports="";
  $settings="";
include 'header.php'; 
?>
<body class="bg-light">
 <!-- connexion -->

    <main class="container-fluid position-sticky ">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php' ; ?>
            <div class="col p-0 ">
                <?php include 'navbar.php'; ?>
                <!-- title a;nd icon  -->
                <div class=" d-flex   container bg-light  justify-content-sm-between  py-3">
                    <div>
                        <p class="fw-bold  ps-3"> Payment Details </p>
                    </div>

                    <div class="ps-5">
                        <i class="far fa-sort text-info"></i>

                    </div>
                </div>

                <div class="d-flex table-responsive ">
                    <table class="table tableau table-borderless  mx-5 ">
                     <thead  class="bg-light  table-head">
                            <tr class="border-top">
                                <th scope="col">Name</th>
                                <th scope="col">payment Schdule</th>
                                <th scope="col">bill number</th>
                                <th scope="col">amount paid</th>
                                <th scope="col">balance amount</th>
                                <th scope="col">date</th>
                            </tr>
                       </thead>

                      <?php
                    
                      $con=connection();
       
                      $req =$con->query('SELECT * from payment_details');
                       while( $ligne=$req->fetch()) :  ?>
                      
                          
                               <tr class= "border-5  border-light bg-white align-middle  ligne">
                                   <td class='py-3'> <?php  echo $ligne['name']; ?></td> 
                                   <td class='py-3'> <?php  echo $ligne['paymentSchdule']; ?></td> 
                                   <td class='py-3'> <?php  echo $ligne['billNumber'];?></td> 
                                   <td class='py-3'> <?php   echo 'DHS '.$ligne['amountPaid'];?></td> 
                                   <td class='py-3'> <?php  echo 'DHS '. $ligne['balanceAmount'];?></td> 
                                   <td class='py-3'> <?php  echo $ligne['date'];?></td> 
                                  
                                   <td> <a href="view.php?view=<?php echo $ligne['id_payment'] ?>">  <i class='far fa-eye pe-3 text-info' ></i>  </a>  </td>
                         
         
                               </tr>

                               
                     <?php endwhile; ?>



                    </table>

                              
               </div>

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


