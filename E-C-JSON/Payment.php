<?php 
// $payment=[
//     $arr=['name'=>'karthi','payment Schedule'=>'First','Bill Number'=>'0001234','Amount Paid'=>'1000,00 DHS','Balance Amount'=> '499,00 DHS','Date'=> '05-Jan,2022'],
//     $arr=['name'=>'alex','payment Schedule'=>'Second','Bill Number'=>'000123','Amount Paid'=>'1001,00 DHS','Balance Amount'=> '499,01 DHS','Date'=> '06-Jan,2022'],
//     $arr=['name'=>'david','payment Schedule'=>'third','Bill Number'=>'00012','Amount Paid'=>'1002,00 DHS','Balance Amount'=> '499,02 DHS','Date'=> '07-Jan,2022'],
//     $arr=['name'=>'flower','payment Schedule'=>'First','Bill Number'=>'0001','Amount Paid'=>'1003,00 DHS','Balance Amount'=> '499,03 DHS','Date'=> '08-Jan,2022'],
// ]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <meta name="description"
        content=" E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/DashStyle.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-light">
    <main class="container-fluid position-sticky ">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php' ; ?>
            <div class="col p-0 ">
                <?php include 'navbar.php'; ?>
                <!-- title and button   -- -->
                
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
                     <?php

                     $payment = file_get_contents('payment.json');
                     $payment = json_decode($payment,true);

                    //   foreach($arr as $key=> $value)
                    //    {
                    //        echo  "<th>         $key          </th>";
                    //    }
                      ?>
                      </thead>

                      <?php
                     foreach($payment as $value)
                     {
                         echo "<tr class='py-3'>
                         <td>  {$value['name']}                                  </td>
                         <td>  {$value['payment Schedule']}                      </td>
                         <td>  {$value['Bill Number']}                           </td>
                         <td>  {$value['Amount Paid']}                           </td>
                         <td>  {$value['Balance Amount']}                        </td>
                         <td>  {$value['Date']}                                  </td>
                         <td>  <i class='far fa-eye pe-3 text-info' ></i>        </td>
                         </tr>";
                     }
                     ?>

                    </table>
               </div>

            </div>
        </div>
    </main>
</body>

</html>