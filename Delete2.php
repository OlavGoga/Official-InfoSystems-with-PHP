<?php
$con = mysqli_connect("localhost","root","","phphackero");
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id = '$id'";
$request = mysqli_query($con,$sql);
if($request){
    header("location:user.php");
}
else{
    echo "Not Deleted";
}

?>

