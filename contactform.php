<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $phoneNumber = $_POST['tel'];
  $message = $_POST['message'];

   $mailTO = "kareem.dare319@gmail.com";
   $headers = "From: ".$mailFrom;
   $txt = " You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTO, $txt, $headers);
  header("Location: index.html?mailsend");
}

?>