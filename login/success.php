<?php
session_start();
$base_url ='http://localhost/EMS/Include';
if(isset($_SESSION["username"]))
{
    echo '<h3 style="text-align:center">Login Success,Welcome-'.$_SESSION["username"].'</h3>';?>
    <a href='<?php echo $base_url?>/Insert_into_Database.php'> HR Department</a><br><br>
    <a href='<?php echo $base_url?>/Insert_into_Database.php'> Finance Department</a><br><br>
    <a href='<?php echo $base_url?>/Insert_into_Database.php'> IT Department</a><br><br>


    <?php
    echo '<br/><br/><a href="logout.php"> Logout</a>';
}
else{
    header("location:login.php");
}
?>
<!DOCTYPE>
<html>
<head>
    <title>Success</title>
</head>
<body style="background-color: #fd7e14">

</body>
</html>
