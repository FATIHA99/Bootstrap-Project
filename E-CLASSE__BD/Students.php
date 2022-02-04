
<?php 
// $student= [
//     [ 'image'=>'ressources/p0.jpg', 'name'=>'fatiha' ,'email'=>'fatiha@gmail.com','phone'=>'06038737377','encrol number'=>'7373777','date of admission'=>'06-DEC,2022'],
//     [ 'image'=>'ressources/p1.jfif','name'=>'amina' ,'email'=>'amina@gmail.com','phone'=>'060387373736','encrol number'=>'7373766','date of admission'=>'06-AUT,2022'],
//     [ 'image'=>'ressources/p2.jfif' ,'name'=>'rida' ,'email'=>'rida@gmail.com','phone'=>'060387373735','encrol number'=>'7373755','date of admission'=>'06-JUI,2022'],
//     [ 'image'=>'ressources/p3.jfif' ,'name'=>'fouad' ,'email'=>'fouad@gmail.com','phone'=>'060387373734','encrol number'=>'7373744','date of admission'=>'06-MAR,2022'],
//     [ 'image'=>'ressources/p4.jpg' ,'name'=>'fouad' ,'email'=>'fouad@gmail.com','phone'=>'060387373734','encrol number'=>'7373744','date of admission'=>'06-MAR,2022'],
// ]
// require 'operation.php';

include 'operation.php';
?>
<?php include 'header.php'; ?>
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
                        <a href="add.php" class="btn btn-info  text-light">ADD NEW STUDENT</a>
                    </div>
                </div>
                <!-- TABLEAU -->

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
                                <th scope="col" class="d-none">exe-tool</th>
                            </tr>
                       </thead>
         <?php
               $con=connexion();
               $req =$con->query('SELECT * from students');
                while( $ligne=$req->fetch()) :  ?>
               
                        <tr class= "border-5  border-light bg-white align-middle  ligne">
                            <td class='py-3'> <?php  echo $ligne['name']; ?></td> 
                            <td class='py-3'> <?php  echo $ligne['email']; ?></td> 
                            <td class='py-3'> <?php  echo $ligne['phone'];?></td> 
                            <td class='py-3'> <?php  echo $ligne['encrolNumber'];?></td> 
                            <td class='py-3'> <?php  echo $ligne['dateOfAdmission'];?></td> 
                             <td>
                            <a href="update.php?id=<?php echo $ligne['id_student']; ?>" class="btn  btn-sm">
                            <i class="fal fa-pen pe-2 text-info"></i>
                            </a>
                         
                            <a href="operation.php?delete=<?php echo $ligne['id_student']; ?>" class="btn  btn-sm">
                           
                            <i class="fal fa-trash text-info"></i>
                            </a>
                            </td>
                        </tr>
              <?php endwhile; ?>
         
                </table>

            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>