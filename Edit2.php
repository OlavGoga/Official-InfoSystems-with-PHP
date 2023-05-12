<?php
$con = mysqli_connect("localhost","root","","phphackero");
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id = '$id'";
$request = mysqli_query($con,$sql);
$row = mysqli_fetch_array($request);

if(isset($_POST['Update'])){
    $Uname = mysqli_real_escape_string($con,$_POST['Uname']);
    $Email = mysqli_real_escape_string($con,$_POST['Email']);
    $Password = mysqli_real_escape_string($con,$_POST['Password']);
    $Phone = mysqli_real_escape_string($con,$_POST['Phone']);
    $sql = "UPDATE user SET Uname = '$Uname', Email = '$Email',Password = '$Password',Phone = '$Phone' WHERE id = '$id'";
    $request = mysqli_query($con,$sql);
    if($request){
        header("Location:user.php");
    }
    else{
        echo "MISSION FAILED TRY AGAIN!!!!";
    }
    
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
    label{
        margin: 500px;
        padding: 10px;
        font-size: 40px;
        font-family: "Impact";
        color: "#deff81";
        text: "align-center";
        
    }
    input{
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
    <div>
        <form action="" method="POST">
            <div>
                <label>Uname</label>
                <input type="text" value="<?php echo $row['Uname'];?>" name="Uname" class="form-control">
</div>
<div>
                <label>Email</label>
                <input type="text" value="<?php echo $row['Email'];?>" name="Email" class="form-control">
</div>
<div>
                <label>Password</label>
                <input type="text" value="<?php echo $row['Password'];?>" name="Password" class="form-control">
</div>
<div>
                <label>Phone</label>
                <input type="text" value="<?php echo $row['Phone'];?>" name="Phone" class="form-control">
</div>
<div>
                
                <input type="submit" name="Update" value="save">
</div>
</div>
<div>
    <p>&nbsp</p><a href="user.php" style="position: relative; text: align-center;">BACK</a>
</div>   
</body>
</html>