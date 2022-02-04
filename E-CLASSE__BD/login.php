<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
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

    @media screen and (max-width: 576px) { 
      body {
      background: white;
           }
    }
    .sign-in {
      height: 60vh;
      border-radius: 20px;
    }

    .formulaire {
      display: grid;
      gap: 6%;
    }

    input[type="password"]::placeholder,
    input[type="email"]::placeholder {
      color: #CDCDCD;
    }
  </style>
</head>
<body >
  <div class="d-flex justify-content-center align-items-center vh-100 ">
  <div class="sign-in    p-3 bg-white col-12 col-sm-8  col-md-5 col-lg-4  col-xl-3  ">
    <form class="formulaire ps-3 pe-3">
      <div class="">
        <h1 class="border-start border-info border-5 fw-bold ms-5">
          E-classe
        </h1>
      </div>
      <div class="text-center">
        <p class="fw-bold"> SIGN IN</p>
        <P class="text-center fs-6 fw-light">Enter your credentials to access your account</P>
      </div>
      <div class="mb-1">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control  " placeholder="Enter your password" id="exampleInputPassword1">
      </div>
      <div class="d-grid gap-2">
        <button onclick="window.location.href = 'dashbord.php';" class="btn btn-info  text-light" type="button"> 
          SIGN IN 
        </button>
      </div>
      <p class="text-muted text-center">
        Forgot your password? <a href="#" class="text-decoration-none">Reset Password</a>.
      </p>

    </form>

  </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>