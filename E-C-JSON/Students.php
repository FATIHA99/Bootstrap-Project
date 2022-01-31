
<?php
require 'functions.php';

$student = getUsers();
?>

<?php 
// $student= [
//     [ 'image'=>'ressources/p0.jpg', 'name'=>'fatiha' ,'email'=>'fatiha@gmail.com','phone'=>'06038737377','encrol number'=>'7373777','date of admission'=>'06-DEC,2022'],
//     [ 'image'=>'ressources/p1.jfif','name'=>'amina' ,'email'=>'amina@gmail.com','phone'=>'060387373736','encrol number'=>'7373766','date of admission'=>'06-AUT,2022'],
//     [ 'image'=>'ressources/p2.jfif' ,'name'=>'rida' ,'email'=>'rida@gmail.com','phone'=>'060387373735','encrol number'=>'7373755','date of admission'=>'06-JUI,2022'],
//     [ 'image'=>'ressources/p3.jfif' ,'name'=>'fouad' ,'email'=>'fouad@gmail.com','phone'=>'060387373734','encrol number'=>'7373744','date of admission'=>'06-MAR,2022'],
//     [ 'image'=>'ressources/p4.jpg' ,'name'=>'fouad' ,'email'=>'fouad@gmail.com','phone'=>'060387373734','encrol number'=>'7373744','date of admission'=>'06-MAR,2022'],
// ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <meta name="description" content=" E-classe Le site officiel des classes de l'école YouCode  / Si vous etes actuellement  un étudiant  YouCode creer votre compte   "> 
    <meta name="keywords" content="E-classe, etudient , payment, admin ,youcode">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/DashStyle.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
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
                    
                     <a class="btn btn-info text-light " href="create.php">ADD NEW STUDENT</a>
                  
                        <!-- <button type="button" class="btn btn-info     text-light">ADD NEW STUDENT </button> -->

                    </div>
                </div>
                <!--  -------------TABLEAU --- -->

                <div class=" mx-3 table-responsive">
                  <table class="table">
                     <thead class="bg-light  table-head ">
                            <tr class="border-top ">
                                <th scope="col" ></th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">phone</th>
                                <th scope="col">Enrol Number</th>
                                <th scope="col">Date of admission </th>
                                <th scope="col"></th>
                            </tr>
                       </thead>

                       <!--  <button type='button' class='btn  btn-sm'>
                    <i class='fal fa-pen pe-2 text-info'></i>
                    </button>
                    <button type='button' class='btn  btn-sm'>
                    <i class='fal fa-trash text-info'></i>
                    </button> -->
               <?php foreach ($student as $array): ?>
               
 
                <tr class="border-5  border-light bg-white align-middle  ligne">
                   <td class="py-3">
                      <img  style="width: 60px; height:30 px;"src="<?php  echo $array['image'] ?>" >
                    </td>
                    <td class="py-3">  <?php  echo  $array['name']              ?>  </td>
                    <td class="py-3">  <?php  echo  $array['email']              ?> </td>
                    <td class="py-3">  <?php  echo  $array['phone']               ?></td>
                    <td class="py-3">  <?php  echo  $array['encrol number']       ?></td>
                    <td class="py-3">  <?php  echo  $array['date of admission']  ?></td>
                    <td> <a href="view.php?id=<?php echo $array['id'] ?>" class="btn btn-sm btn-outline-info">View</a> 
                    <a href="update.php?id=<?php echo $array['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                      
                      <form method="POST" action="delete.php" width:auto; >
                          <input type="hidden" name="id" value="<?php echo $array['id'] ?>">
                          <button class="btn btn-sm btn-outline-danger">Delete</button>
                      </form>
                    </td>
               </tr>

               <?php endforeach; ?>
                
                
        

         
                </table>

            </div>
        </div>
    </main>
</body>
</html>