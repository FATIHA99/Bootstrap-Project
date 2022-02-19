<?php
//  include 'operation.php';
    $nbr_student = $con->query('SELECT  count(*) FROM students');
    $courses=$con->query('SELECT  count(*) FROM courses');
    $sum_paid=$con->query('SELECT SUM(amountPaid) from payment_details');
?>
<div class="cards d-flex gap-3 justify-content-center mt-2">

                    <div class="carditems carditems--blue col-md-3  col-sm-2  m-2  position-relative">
                        <div class="cardstudents d-flex flex-column gap-2 mt-3 mx-3">
                            <i class="far fa-graduation-cap h3"></i>
                            <span>Students</span>
                        </div>
                        <div class="cardnbr-students">
                            <span class="h5 fw-bolder fs-2  nbr"><?php   echo  $nbr_student ->fetchColumn() ;?> </span>
                        </div>
                    </div>


                    <div class=" carditems carditems--rose col-md-3  col-sm-2   m-2 position-relative">
                        <div class="cardCourse d-flex flex-column gap-2 mt-3  mx-3">
                            <i class="fal fa-bookmark h3"></i>
                            <span>Course</span>
                        </div>
                        <div class="cardnbr-course">
                            <span class="h5 fw-bolder fs-2 nbr"><?php     echo $courses->fetchColumn(); ?></span>
                        </div>
                    </div>


                    
                    <div class=" carditems carditems--yellow col-md-3  col-sm-2   m-2 position-relative " >
                        <div class="cardpayments d-flex flex-column gap-2 mt-3 mx-3">
                            <i class="fal fa-usd-square h3"></i>
                            <span>Payments</span>
                        </div>
                        <div class="cardpayments">
                            <span class="h5 fw-bolder fs-2  nbr">DHS <?php    echo $sum_paid->fetchColumn(); ?></span>
                        </div>
                    </div>

                    <div class="carditems carditems--gradient col-md-3  col-m-2  m-2 position-relative">
                        <div class="card__users d-flex flex-column gap-2 mt-3 mx-3">
                            <i class="fal fa-user h3"></i>
                            <span>Users</span>
                        </div>
                        <span class="h5 fw-bolder fs-2  nbr">3</span>
                    </div>
                </div>
