<?php

$connection=mysqli_connect("localhost","root","","miniproject");

if(isset($_POST['submit_btn']))
{
    $id=$_POST['id'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
   
    
        $query = "INSERT INTO contact_us (`name`, `email`, `phone`, `subject`, `message`)VALUES ('$username','$email','$phone','$subject','$message')";
        $query_run = mysqli_query($connection,$query);
        

        
    if($query_run)
    {
        $_SESSION['success'] = "<script>alert('Message Sent');</script>";
        header('Location: index.html');
    }
    else
    {
        $_SESSION['status'] = "<script>alert('Message Not Sent');</script>";
        header('Location: index.html');
    }
    
    
       
    
}
?>