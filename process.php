<?php ob_start(); //ovaj dodatak omogučava redirectanje na stranicu dolje u header

if(isset($_POST['submit']))
{
    
   // echo "IT WORKS" ; ovime se prikazuje poruka na ekranu i služi za testiranje dugmeta submit
    
    
    
   $to = "tin.priti@gmail.com";   
   $subject = $_POST['subject'];
   $email = $_POST['email'];
   $txt = $_POST['message'];
   $headers = "From: " .$email . "\r\n" .
    "CC: somebodyelse@example.com" ;
    
   mail($to, $subject, $txt, $headers);
   header("Location: contact.html"); //header funkcija nakon slanja vraća korisnika na željenu stranicu
    
    
}




?>