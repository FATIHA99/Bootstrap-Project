<div class="container">
 <div class="card">
 <div class="card-header">
     <h1> update Student </h1>
 </div>
 <div class=" card-body">

 </div>

    <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input name="username" value="<?php echo $user['email'] ?>"
                           class="form-control <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['username'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="email" value="<?php echo $user['phone'] ?>"
                           class="form-control  <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>encrol number</label>
                    <input name="phone" value="<?php echo $user['encrol number'] ?>"
                           class="form-control  <?php echo $errors['encrol number'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['phone'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>date of admission</label>
                    <input name="website" value="<?php echo $user['date of admission'] ?>"
                           class="form-control  <?php echo $errors['date of admission'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['website'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input name="picture" type="file" class="form-control-file">
                </div>

                <button class="btn btn-success">Submit</button>
            </form>

            </div>
 </div>