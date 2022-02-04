 <?php include 'header.php'; 
 include 'operation.php';
 ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3> Create new User</h3>
        </div>
        <div class="card-body">

            <form method="POST" action="operation.php">

         
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control ">
                   
                </div>


                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" class="form-control ">
                </div>


                <div class="form-group">
                    <label>Encrol Number </label>
                    <input name="number" class="form-control  ">
                </div>


                <div class="form-group">
                    <label>Date of admission </label>
                    <input type="date" name="date" class="form-control  ">
                </div>
            
                <button class="btn btn-success mt-5 " name="save">Submit</button>
            </form>
        </div>
    </div>
</div>

