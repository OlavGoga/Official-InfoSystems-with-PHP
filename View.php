<?php
$con = mysqli_connect("localhost","root","","phphackero");
if(!$con){
    die('Connection failed'.mysqli_connect_error($con));
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>PHPHackero</title>
</head>
<style>
    body{
        background-image: url('PHPHackero3.png');
        background-size: cover;
        background-repeat: no-repeat;
        
    }
    table{
        margin: 500px;
        padding: 10px;
        font-size: 40px;
        font-family: "Impact";
        color: "#deff81";
        text: "align-center";
        
    }
    a{
        margin: 500px;
        padding: 10px;
        font-size: 40px;
        font-family: "Impact";
        color: "#deff81";
        text: "align-center";
        
    }
    </style>
<body>
    <p>&nbsp</p>
    <p>&nbsp</p>
    <p>&nbsp</p>
    <p>&nbsp</p>
    <p>&nbsp</p>
    <table border="4px">
        <tr>
            <td>Uname</td>
            <td>Email</td>
            <td>Password</td>
            <td>Phone</td>
</tr>
<?php
$con = mysqli_connect("localhost","root","","phphackero");
$id = $_GET['id'];
$sql = "SELECT * FROM phphackero WHERE id = '$id'";
$request = mysqli_query($con,$sql);
$row = mysqli_fetch_array($request);
?>
        <tr>
            <td><?php echo $row['Uname'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Password'];?></td>
            <td><?php echo $row['Phone'];?></td>
            <td><a href="Edit.php?id=<?php echo $row['id'];?>">EDIT</a></td>
            <td><a href="Delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
            
    </tr>

</table>
<div>
    <p>&nbsp</p><a href="Secondary.php" style="position: relative; text: align-center;">BACK</a>
</div>   
</body>
</html>