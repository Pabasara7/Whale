<?php
session_start();
include('db.php'); 

$pagename="Login Process";                                                                          //Create and populate a variable called $pagename
echo "<title>".$pagename."</title>";                                                                        //display name of the page as window title
echo "<body>";
echo "<h4>".$pagename."</h4>";                                                                             //display name of the page on the web page
                     

$logemail = $_POST['userEmail'];
$logpword = $_POST['userPassword'];

if(!(empty($logemail) or empty($logpword))){


    $sqlEm="select * from users where userEmail='".$logemail."'";
    $sqlVal = mysqli_query($conn,$sqlEm) or die (mysqli_error());

  $valE = 0;
  $valP = 0;

    while($arrayU = mysqli_fetch_array($sqlVal)){

      
        if(!($arrayU['userEmail'] == $logemail) ){

            echo"Email not recognised, <a href=login.php>login again</a>";


        }else{

         $valE+=1;

            if(!($arrayU['userPassword']==$logpword)){

                echo"Password not recognised,  <a href=login.php>login again</a>";

            }

            else{


                // $valp+=1;

                echo"Succefully Logged In <br><br>";

                $_SESSION['userid']=$arrayU['userId'];
                // $_SESSION['usertype']=$arrayU['userType'];
                $_SESSION['fname']=$arrayU['userFName'];
                $_SESSION['sname']=$arrayU['userSName'];
   
                echo"Welcome ".$_SESSION['fname']." ". $_SESSION['sname']."";

               }           
        }

    }

    if($valE==0){
        echo"Email is Invalid,  <a href=Login_Page.html>login again</a>";
    }


}

else{

    echo"Please enter both fields";
    echo"Go back to <a href=Login_Page.html>Login</a>";
}
                                                                                   //include head layout
echo "</body>";
?>