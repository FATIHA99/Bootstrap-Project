<?php
include 'header.php';
require 'functions.php';

if (!isset($_GET['id'])) {
    include "not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "not_found.php";
    exit;
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
           <a class="btn btn-secondary" href="update.php?id=<hp echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<hp echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form> 
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Phone :</th>
                <td><?php echo $user['phone'] ?></td>
            </tr>
            <tr>
                <th>encrol number:</th>
                <td><?php echo $user['encrol number'] ?></td>
            </tr>
            <tr>
                <th>Website:</th>
                <td><?php echo $user['date of admission'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


