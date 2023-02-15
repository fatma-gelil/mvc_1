<?php

 echo"welcome back";
 
 use core\ROUTER;
 use core\request;
 require_once"vendor/autoload.php";
 require_once"core/bootstrap.php";
 ROUTER::load('app/routes.php')
 ->direct(request::uri(), request::method());
 echo "<pre>";
 //var_dump();
 
 
   








?>