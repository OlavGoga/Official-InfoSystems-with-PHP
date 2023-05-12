<?php
$con = mysqli_connect("localhost","root","","phphackero");
$id = $_GET['id'];
$sql = "DELETE FROM phphackero WHERE id = '$id'";
$request = mysqli_query($con,$sql);
if($request){
    header("location:SaveGame.php");
}
else{
    echo "Not Deleted";
}

?>

