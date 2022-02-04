<?php
 include 'operation.php';
    $con=connexion();
    $req= $con->prepare('SELECT  count(*) FROM students');
    $req->execute();



    $courses=$con->prepare('SELECT  count(*) FROM courses');
    $courses->execute();
    

    $sum_paid=$con->prepare('SELECT SUM(amountPaid) from payment_details');
    $sum_paid->execute();

?>
<div class="cards row gap-3 justify-content-center mt-5">

                    <div class="carditems carditems--blue col-md-3  col-sm-2  m-2  position-relative">
                        <div class="cardstudents d-flex flex-column gap-2 mt-3">
                            <i class="far fa-graduation-cap h3"></i>
                            <span>Students</span>
                        </div>
                        <div class="cardnbr-students">
                            <span class="h5 fw-bold nbr"><?php    print_r($req->fetchColumn()); ?> </span>
                        </div>
                    </div>


                    <div class=" carditems carditems--rose col-md-3  col-sm-2   m-2 position-relative">
                        <div class="cardCourse d-flex flex-column gap-2 mt-3">
                            <i class="fal fa-bookmark h3"></i>
                            <span>Course</span>
                        </div>
                        <div class="cardnbr-course">
                            <span class="h5 fw-bold nbr"><?php    print_r($courses->fetchColumn()); ?></span>
                        </div>
                    </div>


                    
                    <div class=" carditems carditems--yellow col-md-3  col-sm-2   m-2 position-relative">
                        <div class="cardpayments d-flex flex-column gap-2 mt-3">
                            <i class="fal fa-usd-square h3"></i>
                            <span>Payments</span>
                        </div>
                        <div class="cardpayments">
                            <span class="h5 fw-bold nbr">DHS <?php    print_r($sum_paid->fetchColumn()); ?></span>
                        </div>
                    </div>

                    <div class="carditems carditems--gradient col-md-3  col-m-2  m-2 position-relative">
                        <div class="card__users d-flex flex-column gap-2 mt-3">
                            <i class="fal fa-user h3"></i>
                            <span>Users</span>
                        </div>
                        <span class="h5 fw-bold nbr">3</span>
                    </div>
                </div>
