<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values
 $id = $_POST['id'];
 $name = $_POST['name'];
 $desg = $_POST['desg'];
 $sal = $_POST['salary'];
 //importing database connection script
 require_once('dbConnect.php');
//Creating sql query
$sql = "UPDATE employee SET name = '$name', designation = '$desg', salary = '$sal' WHERE id =
$id;";
//Updating database table
if(mysqli_query($con,$sql)){
echo 'USUARIO MODIFICADO CORRECTAMENTE';
}else{
echo 'ERROR';
}
//closing connection
mysqli_close($con);
}

?>