<?php
session_start(); 
if(!isset($_SESSION['id'])){
  header('location: ../index.php'); 
  exit;
   }else{
       require_once('../dBConnection/connect.php');
       if(isset($_POST['save'])){
       $name = strtoupper(mysql_real_escape_string($_POST['house']));
       $location = ucfirst(mysql_real_escape_string($_POST['location']));
       if($name == ''){
         $sms = "<div class='alert alert-danger flush'>Sorry fill the empty fields</div>";
       }else{

        $in = mysql_query("insert into hms_houses values('','$name','$location')");
         if($in){
         $sms = "<div class='alert alert-success flush'>Successfully house added!</div>";
         }else{
         $sms = "<div class='alert alert-danger flush'>An error occured when adding house....!</div>";
         }
       }
       }
      
     }
 ?>