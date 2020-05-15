<?php
 //Getting Id
 $id = $_GET['id'];
 //Importing database
 require_once('dbConnect.php');
 //Creating sql query
 $sql = "DELETE FROM employee WHERE id=$id;";
 //Deleting record in database
 if(mysqli_query($con,$sql)){
 echo 'ELIMINADO CORRECTAMENTE';
 }else{
 echo 'ERROR AL ELIMINAR';
 }
 //closing connection
 mysqli_close($con);

 ?>