<?php   

 include 'header.php';
  include 'operation.php';
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $name  ?></b></h3>
        </div>
        <div class="card-body">
           <!-- <a class="btn btn-secondary" href="update.php?id=<hp echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<hp echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>  -->
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Name:</th>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <th>payment Schdule:</th>
                <td><?php echo $pay ?></td>
            </tr>
            <tr>
                <th>bill Number:</th>
                <td><?php echo $bill ?></td>
            </tr>
            <tr>
                <th>amount Paid:</th>
                <td><?php echo $paid?></td>
            </tr>
            <tr>
                <th>balance Amount:</th>
                <td><?php echo $balance ?></td>
            </tr>

            <tr>
                <th>date:</th>
                <td><?php echo $date ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>