<?php
    include('connection.php');

    if(isset($_POST['submit']))
    {
         $name=$_POST['name'];
         $phone_no=$_POST['phone_no'];
         $email=$_POST['email'];
         $city=$_POST['city'];
         $feedback=$_POST['feedback'];

         $insert_query="insert into contact(name,phone_no,email,city,feedback) values('$name','$phone_no','$email','$city','$feedback')";

         if(mysqli_query($conn, $insert_query))
         {
            echo "Record Inserted Sucessfully";
         }
         else
         {
            echo "Error while Inserting data";
         }
    }
?>