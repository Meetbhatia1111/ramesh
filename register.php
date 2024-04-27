<?php
    include('connection.php');

    if(isset($_POST['submit']))
    {
         $username=$_POST['username'];
         $date=$_POST['date'];
         $aadharno=$_POST['aadharno'];
         $email=$_POST['email'];
         $contactno=$_POST['contactno'];

         $insert_query="insert into register(username,date,aadharno,email,contactno) values('$username','$date','$aadharno','$email','$contactno')";

         if(mysqli_query($conn, $insert_query))
         {
            //echo "Record Inserted Sucessfully";
            $_SESSION['status'] = "Registerd Successfully";
            $_SESSION['status_Code'] = "sucess";
            header('Location:book.php?file=Sahityik Yogdan_Updated
            ');
         }
         else
         {
            echo "Error while Inserting data";
         }
    }
?>