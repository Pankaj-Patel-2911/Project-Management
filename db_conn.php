<?php
  $con=new mysqli("localhost","root","","project"); 
  if($con->connect_error){
    die("Failed to connect:".$con->connect_error);
  }?>