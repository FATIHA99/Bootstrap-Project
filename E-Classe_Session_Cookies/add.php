 <?php include 'header.php'; 
//  include 'operation.php';
 ?>
<div class="container w-50 mt-5 ">
    <div class="card">
        <div class="card-header bg-info">
            <h3> Create new User</h3>
        </div>
        <div class="card-body bg-light">

            <form method="POST" action="operation.php">

                    <!-- name -->
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" class="form-control" require>
                            </div>
                    <!-- email -->
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" required class="form-control " require>
                            
                            </div>

                    <!-- phone  -->
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" class="form-control" require>
                            </div>

                    <!-- enrol number  -->
                            <div class="form-group">
                                <label>Encrol Number </label>
                                <input name="number" class="form-control" require>
                            </div>

                    <!-- date of admission -->
                            <div class="form-group">
                                <label>Date of admission </label>
                                <input type="date" name="date" class="form-control" require>
                            </div>
                    <!-- save  -->
                            <button class="btn btn-success mt-5 " name="save">Submit</button>
                            <a href = 'dashbord.php' class="btn btn-danger mt-5  text-light" >  Cancel </a>
            </form>
        </div>
    </div>
</div>

