<?php 
// $payment=[
//     $arr=['name'=>'karthi','payment Schedule'=>'First','Bill Number'=>'0001234','Amount Paid'=>'1000,00 DHS','Balance Amount'=> '499,00 DHS','Date'=> '05-Jan,2022'],
//     $arr=['name'=>'alex','payment Schedule'=>'Second','Bill Number'=>'000123','Amount Paid'=>'1001,00 DHS','Balance Amount'=> '499,01 DHS','Date'=> '06-Jan,2022'],
//     $arr=['name'=>'david','payment Schedule'=>'third','Bill Number'=>'00012','Amount Paid'=>'1002,00 DHS','Balance Amount'=> '499,02 DHS','Date'=> '07-Jan,2022'],
//     $arr=['name'=>'flower','payment Schedule'=>'First','Bill Number'=>'0001','Amount Paid'=>'1003,00 DHS','Balance Amount'=> '499,03 DHS','Date'=> '08-Jan,2022'],
// ]


include 'operation.php';
include 'header.php'; ?>


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
                    
                      $con=connexion();
       
                      $req =$con->query('SELECT * from payment_details');
                       while( $ligne=$req->fetch()) :  ?>
                      
                               <tr class= "border-5  border-light bg-white align-middle  ligne">
                                   <td class='py-3'> <?php  echo $ligne['name']; ?></td> 
                                   <td class='py-3'> <?php  echo $ligne['paymentSchdule']; ?></td> 
                                   <td class='py-3'> <?php  echo $ligne['billNumber'];?></td> 
                                   <td class='py-3'> <?php   echo 'DHS '.$ligne['amountPaid'];?></td> 
                                   <td class='py-3'> <?php  echo 'DHS '. $ligne['balanceAmount'];?></td> 
                                   <td class='py-3'> <?php  echo $ligne['date'];?></td> 
                                  
                                   <td> <a href="view.php?view=<?php echo $ligne['id_payment'] ?>">  <i class='far fa-eye pe-3 text-info' ></i></a> 
                          
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