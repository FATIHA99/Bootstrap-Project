<?php 
 //----------------------     CONNEXION    ----------------------------------------
function connexion()
{
try {
    $mysqlConnection = new PDO( 'mysql:host=localhost;dbname=e_classe_db;charset=utf8','root','');  
    // echo "connexion avec succes ";
    } catch(Exception $e) {
        echo 'ERROR ' .$e->getMessage();
    }
    return $mysqlConnection;
}

  //----------------------      CREATE    ----------------------------------------
if(isset($_POST['save']))
{ 
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $encrolNumber=$_POST['number'];
     $date=$_POST['date'];
     $con=connexion();
     try {
           $req =$con->prepare('INSERT INTO students(name ,email ,phone ,encrolNumber,dateOfAdmission) VALUES (?,?,?,?,?);');   
           $req -> execute(array($name,$email,$phone,$encrolNumber,$date));
        
     } catch (Exeption $e) {
        echo 'ERROR ' .$e->getMessage();
     }

     header("Location: students.php");
}
//----------------------      DELETE    ----------------------------------------
$con=connexion();
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $req =$con->prepare("DELETE FROM students WHERE id_student=$id");
    $req -> execute(array($id));

    header("Location: students.php");
}
//----------------------       UPDATE     ----------------------------------------
if( isset ($_POST['update'])  )
{ 
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Number = $_POST['number'];
    $Date = $_POST['date'];

    try {     
            $req =$con->prepare('UPDATE students SET name= ?, email= ?, phone=? , encrolNumber=?, dateOfAdmission=? WHERE id_student=?');
            $req -> execute(array($Name,$Email,$Phone,$Number,$Date,$Id));
            header("Location: students.php");

    } catch (Exeption $e) {
            echo 'ERROR ' .$e->getMessage();
    }

}

if(isset($_GET['id'])){
$id =$_GET['id'] ;
$req= $con->prepare('SELECT * FROM students WHERE id_student= ? ');
$req -> execute(array($id));
while( $row=$req->fetch()){
  
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $number = $row['encrolNumber'];
    $date = $row['dateOfAdmission'];
}

}



// -------------------   view  ---------------------------

if(isset($_GET['view'])){
    $id =$_GET['view'] ;
    $req= $con->prepare('SELECT * FROM payment_details WHERE id_payment= ? ');
    $req -> execute(array($id));
    while( $row=$req->fetch()){
      
        $name = $row['name'];
        $pay = $row['paymentSchdule'];
        $bill = $row['billNumber'];
        $paid = $row['amountPaid'];
        $balance= $row['balanceAmount'];
        $date = $row['date'];
    }
    
 }


 










?>