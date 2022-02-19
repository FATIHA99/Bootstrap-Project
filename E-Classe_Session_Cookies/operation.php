<?php 
 //----------------------     CONNEXION    ----------------------------------------



function connection()
{
            try {
                return new PDO('mysql:host=localhost;dbname=e_classe_db;charset=utf8','root','');  
                } catch(Exception $e) 
                {
                return 'ERROR ' .$e->getMessage();
                } 
}  
$con = connection();




   
  //----------------------      CREATE    ----------------------------------------





if(isset($_POST['save']))
{    try {
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $phone=$_POST['phone'];
                            $encrolNumber=$_POST['number'];
                            $date=$_POST['date'];

                            $req =$con->prepare('INSERT INTO students(name ,email ,phone ,encrolNumber,dateOfAdmission) VALUES (?,?,?,?,?);');   
                            $req -> execute(array($name,$email,$phone,$encrolNumber,$date));
     } catch (Exeption $e) {
                            echo 'ERROR ' .$e->getMessage();
     }
     header("Location: students.php");
}


//----------------------      DELETE    ----------------------------------------



if (isset($_GET['delete'])) {
   try {
                $id = $_GET['delete'];
                $req =$con->prepare("DELETE FROM students WHERE id_student=?");
                $req -> execute(array($id));
                header("Location: students.php");

     } catch (Exeption $e)
     {
        echo 'ERROR ' .$e->getMessage();
     }
}


//----------------------       UPDATE     ----------------------------------------





if( isset ($_POST['update'])  )
{  try {  
                                $Id      =  $_POST['id'];
                                $Name    =  $_POST['name'];
                                $Email   =  $_POST['email'];
                                $Phone   =  $_POST['phone'];
                                $Number  =  $_POST['number'];
                                $Date    =  $_POST['date'];
       
                                $req =$con->prepare('UPDATE students SET name= ?, email= ?, phone=? , encrolNumber=?, dateOfAdmission=? WHERE id_student=?');
                                $req -> execute(array($Name,$Email,$Phone,$Number,$Date,$Id));
                                header("Location: students.php");
    } catch (Exeption $e) {
                                echo 'ERROR ' .$e->getMessage();
    }

}



//  ------------------- pour recuperer les donner d'une ligne selectionné -------




if(isset($_GET['id'])){
    $id =$_GET['id'];
    $req= $con->prepare('SELECT * FROM students WHERE id_student= ?');
    $req -> execute(array($id));
    $row = $req->fetch();
                                $name   =  $row['name'];
                                $email  =  $row['email'];
                                $phone  =  $row['phone'];
                                $number =  $row['encrolNumber'];
                                $date   =  $row['dateOfAdmission'];
}



// -------------------   view  ---------------------------



if(isset($_GET['view'])){
    $id =$_GET['view'] ;
    $req= $con->prepare('SELECT * FROM payment_details WHERE id_payment= ? ');
    $req -> execute(array($id));
    $row = $req->fetch();
                                $name    = $row['name'];
                                $pay     = $row['paymentSchdule'];
                                $bill    = $row['billNumber'];
                                $paid    = $row['amountPaid'];
                                $balance = $row['balanceAmount'];
                                $date    = $row['date'];    
                    
}



// -------------------  login  ---------------------------



    session_start(); 

    if(isset($_POST['Login']))
    {      
       if(empty($_POST['Email']) || empty($_POST['Password']))
       {    
            header("location:login.php?Empty=Please Fill in the Blanks");
       }
       else
       {  
           
           $user=$con->prepare('SELECT * FROM user  WHERE Email=? AND  Pass= ?');
           $user->execute(array($_POST['Email'],$_POST['Password']));
           $nbrligne=$user->rowCount();
        
                    if($nbrligne>0)
                    {   
                              $row   =  $user -> fetch();

                              $id    =  $row['id_user'];
                              $name  =  $row['name'];
                              $email =  $row['Email'];
                              $pass  =  $row['Pass'];
                              
                              //  pour afficher le nom dans dashboard 
                              $_SESSION["name"]   = $name;  
                              //  pour remember me 
                              $_SESSION["email"]  = $email;
                              $_SESSION["pass"]   = $pass;
                              // security
                              $_SESSION["id"]     =  $id;

                              header("location:dashbord.php");    
                    }
                    else
                    {
                        header("location:login.php?Incorrect= incorrect informations ");

                    }
      }
  }

 //  remember me(cookies ) 
        
            if(isset($_POST['check'])){

                setcookie('email',$email,time()+24*3600);
                setcookie('password',$pass,time()+24*3600);
            }

// -------------------  logout  ---------------------------

    if(isset($_GET['logout']))
    {  
      session_destroy();
      header("location:login.php");

    }


?>