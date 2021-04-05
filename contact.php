<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       $email_from='yukti.singh2019@vitbhopal.ac.in';
       $email_subject="New Form Submission";
       $email_body="User Name: $UserName.\n'.'User Email:$Email.\n'.'User Message:$Msg.\n";

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "admin@onlineittuts.com";
           $headers="From:$email_from\r\n";
           $headers .="Reply-To:$Email\r\n";

           if(mail($to,$email_subject,$email_body,$headers))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("Location:index.php");
    }
?>
