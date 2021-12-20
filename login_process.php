<?php
session_start();
include('db.php'); 

$logemail = $_POST['userEmail'];
$logpword = $_POST['userPassword'];
$errorpassword = "Password incorrect";
$erroremail = "Email is incorrect";

if(!(empty($logemail) or empty($logpword))){


    $sqlEm="select * from users where userEmail='".$logemail."'";
    $sqlVal = mysqli_query($conn,$sqlEm) or die (mysqli_error());

  $valE = 0;
  $valP = 0;

    while($arrayU = mysqli_fetch_array($sqlVal)){

      
        if(!($arrayU['userEmail'] == $logemail) ){

            $_SESSION["error"] = $erroremail;
            header("location: Login_Page.php"); //send user back to the login page.


        }else{

         $valE+=1;

            if(!($arrayU['userPassword']==$logpword)){

                $_SESSION["error"] = $errorpassword;
                header("location: Login_Page.php"); //send user back to the login page.

            }

            else{
                header("location: Home_Page.php");
              
                $_SESSION['userId']=$arrayU['userId'];
                $_SESSION['username']=$arrayU['username'];
               
               }           
        }

    }

    if($valE==0){
        $_SESSION["error"] = $erroremail;
            header("location: Login_Page.php"); //send user back to the login page.
    }


}

else{

}
?>