<?php include 'header.php';
$home="active";
$course="";
$students="";
$payment="";
$reports="";
$settings="";
  
 ?>


<body>
<!-- position-sticky top-0 start-0    class="container-fluid  -->
    <main class="container-fluid">
        <div class="row flex-nowrap">
            <?php include 'sidebar.php' ;?>
            <div class="col px-3">
                <?php include 'navbar.php'; ?>
                <?php include 'cards.php'; ?>
            </div>
        </div>


       
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html> 
    <?php 
          if($_SESSION["id"]==null)
          { 
            // header("location:login.php"); 
            echo "<script> window.location.href='login.php'; </script>"; 
          }
       
        //   if(!isset($_COOKIE['timeout']))
        //   {   header("location:login.php");
        //      // echo "<script> window.location.href='login.php'; </script>"; 
        //   }




        ?>