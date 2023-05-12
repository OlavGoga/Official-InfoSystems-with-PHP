<?php
$con = mysqli_connect("localhost","root","","phphackero");
if(!$con){
    die('Connection failed'.mysqli_connect_error($con));
}

if(isset($_POST['Insert'])){
    $Uname = mysqli_real_escape_string($con,$_POST['Uname']);
    $Email = mysqli_real_escape_string($con,$_POST['Email']);
    $Password = mysqli_real_escape_string($con,$_POST['Password']);
    $Phone = mysqli_real_escape_string($con,$_POST['Phone']);
    $sql = "INSERT INTO phphackero (Uname,Email,Password,Phone) VALUES('$Uname','$Email','$Password','$Phone')";
    $request = mysqli_query($con,$sql);
    if($request){
        header("Location:SaveGame.php");
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
                <input type="text" name="Uname" class="form-control">
</div>
<div>
                <label>Email</label>
                <input type="text" name="Email" class="form-control">
</div>
<div>
                <label>Password</label>
                <input type="text" name="Password" class="form-control">
</div>
<div>
                <label>Phone</label>
                <input type="text" name="Phone" class="form-control">
</div>
<div>
                
                <input type="submit" name="Insert" value="save">
</div>
</div>
<div>
    <p>&nbsp</p><a href="Secondary.php" style="position: relative; text: align-center;">BACK</a>
</div>   
</body>
</html>