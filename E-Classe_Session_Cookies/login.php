<?php    
include_once 'operation.php';
// $_SESSION["id"]     =  null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="icon" href="ressources/Image1.png">
  <meta name="description"
    content=" E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
  <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    /* @import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Montserrat:wght@100&family=Oleo+Script&display=swap'); */
    body {
      background: linear-gradient(69.66deg, #00C1FE 19.39%, #FAFFC1 96.69%);
      width: 100%;
      height: 100vh;
    }

    .sign-in {
      height: 70vh;
      border-radius: 20px;
    }


    .formulaire {
      display: grid;

    }

    input[type="password"]::placeholder,
    input[type="email"]::placeholder {
      color: #CDCDCD;
    }

    @media screen and (max-width: 576px) { 
          body {
          background: white;
               }
    }
    @media screen and (max-width: 1200px) { 
      .sign-in {
      height: 70vh;
      border-radius: 20px;
    }
    }
  </style>
</head>
<body >
  <div class="d-flex justify-content-center align-items-center vh-100 ">
   <!--  method post  -->
                  <form class="formulaire  p-3 sign-in bg-white col-12 col-sm-8  col-md-6 col-lg-5  col-xl-4  col-xxl-3" action="operation.php"  method="POST"   >
                    <div class="">
                        <h1 class="border-start border-info border-5 fw-bold ms-5"> E-classe</h1>
                    </div>

                    <div class="text-center">
                      <p class="fw-bold"> SIGN IN</p>

                      <P class="text-center fs-6 fw-light">Enter your credentials to access your account</P>


                    </div>
   <!-- validation de remplissage  -->

                     <?php  if(isset($_GET['Empty'])) { ?>

                              <div class="alert alert-danger  text-center pb-0 m-0  ">  <?php echo $_GET['Empty'] ; ?>   </div>
                              
                     <?php } ?>


                     <?php if(isset($_GET['Incorrect'])){?>

                               <div class="alert alert-danger  text-center"> <?php echo $_GET['Incorrect'] ; ?> </div>

                    <?php } ?>
                      
    <!-- Email -->
                    <div class="mb-1">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" name="Email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1"
                      require
                      value=
                      <?php 
                       if(isset($_COOKIE['email'])) 
                       echo $_COOKIE['email'];
                       ?>
                        
                      >
                    </div>
    <!-- password -->
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="Password" class="form-control  " placeholder="Enter your password" id="exampleInputPassword1"
                      value=
                      <?php 
                       if(isset($_COOKIE['password'])) 
                       echo $_COOKIE['password'];
                       ?>
                       
                      >
                    </div>

                    <div class="d-grid gap-2">


     <!-- remember me   -->
                     <div  class="form-check form-switch">  
                      <input  class="form-check-input" type="checkbox" name="check" id="check" ></input> 
                      <label for="check"> remember me </label>

                      </div>

     <!--    login    -->
                      <button onclick="window.location.href = '';" type="submit" name= "Login" class="btn btn-info  text-light" > 
                        SIGN IN 
                      </button>
   
                    </div>
                    <p class="text-muted text-center">
                      Forgot your password? <a href="#" class="text-decoration-none">Reset Password</a>.
                    </p>

                  </form>


  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>