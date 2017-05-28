<?php 
    include_once("config.php");
  $phpfile="work_body_$page.php";
  if(file_exists($phpfile)){
     include($phpfile);
  }else{
 $htmlfile = "gs://$appid/$page.html";
 if(file_exists($htmlfile)){
 readfile($htmlfile);
 }
 }include("work_feedback.php");
   
	  ?>