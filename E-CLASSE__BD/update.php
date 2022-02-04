 <?php include 'header.php';
  include 'operation.php';
 ?>
 <div class="container">
    <div class="card">
        <div class="card-header">
            <h3> update student   </h3>
        </div>
        <div class="card-body">

            <form method="POST" action="operation.php?id=<?php echo $_GET['id']; ?> ">

           
            <input type="hidden" name="id" value=<?php  echo  $id ?> >
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" value=  <?php  echo $name ?>>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control  " value=  <?php  echo $email ?>>
                   
                </div>


                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" class="form-control" value=  <?php  echo $phone ?>>
                </div>


                <div class="form-group">
                    <label>Encrol Number </label>
                    <input name="number" class="form-control" value=  <?php  echo $number ?>>
                </div>


                <div class="form-group">
                    <label>Date of admission </label>
                    <input type="date" name="date" class="form-control" value=  <?php  echo $date ?>>
                </div>
                <button type="submit"  class="btn btn-success mt-5" name="update" >Submit</button>
            </form>
        </div>
    </div>
</div>


