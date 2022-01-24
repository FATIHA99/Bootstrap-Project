<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <meta name="description"
        content=" E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étiduant  YouCode creer votre compte   ">
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/DashStyle.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <main class="container-fluid position-sticky top-0 start-0 ">
        <div class="row flex-nowrap">
           <?php include 'sidebar.php' ; ?>
            <div class="col py-3 ">
               <?php include 'navbar.php'; ?>
                <?php include 'cards.php';?>
            </div>
        </div>
    </main>
</body>

</html>