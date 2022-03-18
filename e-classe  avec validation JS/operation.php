<?php 
 //----------------------     CONNEXION    ----------------------------------------
// COMMENT RECUPERER LES DONNER A PARTIR MODAL 
//  TOASTER  NOTYFY
//  VALIDATION   ==> COMMENT NE PAS ACTUALISER LA PAGE 

function connection()
{
           try {

                return new PDO('mysql:host=localhost;dbname=e_classe_db;charset=utf8','root','');  
                } catch(Exception $e) 
                {
                return 'ERROR '.$e->getMessage();
                } 
}  
$con = connection();


  //----------------------      CREATE   STUDENT  ----------------------------------------



if(isset($_POST['save']))
{   
     try {     
                            
                            $name        = $_POST['name'];
                            $email       = $_POST['email'];
                            $phone       = $_POST['phone'];
                            $encrolNumber= $_POST['number'];
                            $date        = $_POST['date'];

                            $req = $con -> prepare('INSERT INTO students(name ,email ,phone ,encrolNumber,dateOfAdmission) VALUES (?,?,?,?,?);');   
                            $req -> execute(array($name,$email,$phone,$encrolNumber,$date));
                          
                             header("Location:students.php");
     } catch (Exeption $e) {
                            echo 'ERROR ' .$e -> getMessage();
     }
    
}
//----------------------      DELETE  BUTTON STUDENT  ----------------------------------------



if (isset( $_GET['delete'] )) {

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


//----------------------       UPDATE  STUDENT    ----------------------------------------
if( isset ($_POST['update']))
{
      try {  
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
//  ------------------- pour recuperer les donner d'une ligne selectionné -------------------

    if(isset($_GET['id'])){
    $id =$_GET['id'];
    $req = $con -> prepare('SELECT * FROM students WHERE id_student= ?');
    $req -> execute(array($id));
    $row = $req -> fetch();

                                $name   =  $row['name'];
                                $email  =  $row['email'];
                                $phone  =  $row['phone'];
                                $number =  $row['encrolNumber'];
                                $date   =  $row['dateOfAdmission'];
}
// -------------------   view  -------------------------------------------------------------
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
// -------------------  login  ------------------------------------------------------------
    session_start(); 

    if(isset($_POST['Login']))
    {      
       if(empty($_POST['Email']) || empty($_POST['Password']))
       {    
            header("location:login.php?Empty=Please Fill in the Blanks");
       }
       else
       {  
           
           $user = $con -> prepare('SELECT * FROM user  WHERE Email=? AND  Pass= ?');
           $user-> execute(array($_POST['Email'],$_POST['Password']));
           $nbrligne=$user->rowCount();
        
                    if($nbrligne>0)
                    {   
                              $row   =  $user -> fetch();
                              $_SESSION["login"]   = true;
                            //   the value of cookies 
                              $_SESSION["email"] =  $row['Email'];                           
                              $_SESSION["pass"]  =  $row['Pass'];

                            //   pour aficher le nom
                              $_SESSION["name"]   =  $row['name'];
                            //   to logout in 24 hours 
                              $_SESSION['start']  = time();
                              $_SESSION['end']   = $_SESSION['start']+24*3600;
                              header("location:dashbord.php?time over");          
                    }
                    else
                    {
                        header("location:login.php?Incorrect= incorrect informations ");

                    }
      }
  }

 //  -----------------  remember me(cookies ) ---------------------------------------
        
            if(isset($_POST['check'])){

                setcookie('email', $_SESSION["email"],time()+24*3600);
                setcookie('password',$_SESSION["pass"],time()+24*3600);
            }

// -------------------  logout  -----------------------------------------------------

        if(isset($_GET['logout']))
        { 
          session_unset();
          session_destroy();
          header("location:login.php");

        }

// ----------------- sign up --------------------------------------------------------

if(isset($_POST['SignUp'])){

  header('location:SignUp.php');
}
//  ---------------------------  register  ------------------------------------------

if (isset($_POST['register']) && !empty($_POST['Name']) && !empty($_POST['Email']) &&  !empty($_POST ['Password'])  &&  !empty($_POST ['PasswordAgain'] ) )
{  
 
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Pass = $_POST ['Password'];
        $req = $con -> prepare('INSERT into user (Email, Pass,name) VALUES (?,?,?);');
        $req -> execute(array($Email,$Pass,$Name));
        header('location:login.php?register=register succesfully ');
}

?>