 <?php include 'header.php';
  include 'operation.php';


 ?>
<div class="container w-50 mt-5 ">
    <div class="card">
    <div class="card-header bg-info">
            <h3> update student   </h3>
        </div>
        <div class="card-body bg-dark">
                   <!-- form update  student  -->
            <form method="POST" action="operation.php?id=<?php echo $_GET['update_id']; ?> ">

                  <!-- hidden id  -->
                   <input type="hidden" name="id"              value=<?php  echo  $id ?> >

                   <!-- name  -->
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control"     value=  <?php  echo $name ?>>
                </div>
                    <!-- email -->
                
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control  "   value=  <?php  echo $email ?>>
                   
                </div>

                    <!-- phone -->
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" class="form-control"     value=  <?php  echo $phone ?>>
                </div>

                    <!-- number -->
                <div class="form-group">
                    <label>Encrol Number </label>
                    <input  name="number" class="form-control"  value=<?php  echo $number ?>>
                </div>
                    <!-- date  -->
                <div class="form-group">
                    <label>Date of admission </label>
                    <input type="date" name="date" class="form-control" value=  <?php  echo $date ?>>
                </div>
                     <!-- update -->

                <button type="submit"  class="btn btn-success mt-5" name="update" >Submit</button>

                <a href = 'dashbord.php' type="submit"  class="btn btn-danger mt-5  text-light" >  Cancel </a>
            </form>
        </div>
    </div>
</div>


