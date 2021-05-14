<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=utilisateurs","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>