<?php
session_start();
$host="localhost";
$username="root";
$password="";
$database="record";
$message=" ";
try {
    $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST["login"])) {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $query = "SELECT * FROM admin WHERE username=:username AND password=:password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username' => $_POST["username"],
                    'password' => $_POST["password"]
                )
            );
            $count = $statement->rowCount();
            if ($count > 0) {
                $_SESSION["username"] = $_POST["username"];
                header("location:success.php");
            } else {
                $message = '<label>Wrong Data</label>';
            }
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</head>
    <body style="background-color:#90ee90;">
    <br>
    <div class="container" style="width:500px;">
        <?php
         if(isset($message)){
             echo '<label class="text-danger">'.$message.'</label>';
}
         ?>
<h2>Employee Management System</h2>
    <form method="post">
     <fieldset style="color: green;">
        Username
        <input type="text" name="username" class="form-control" />
        <br/>
        Password
        <input type="password" name="password" class="form-control" />
        <br/>
        <input type="submit" name="login" class="btn btn-info" value="Login" />
      </fieldset>

    </form>
    </div>
    <br/>
</body>
</html>
