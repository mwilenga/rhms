<?php
 include('../dBConnection/connect.php');
  $id = $_GET['id'];
  $search = mysql_query("delete from hms_houses where id = '$id'");
  if($search){
  	header('location:houses.php');
  }
?>