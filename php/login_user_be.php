<?php

session_start();

include 'connection_be.php';


$email = $_POST['email'];
$passwordNotEncrypted = $_POST['password'];
$password = hash('sha512', $passwordNotEncrypted);

$login_validation  = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' AND password='$password'");


if(mysqli_num_rows($login_validation) > 0){
    $_SESSION['user'] =  $email;
    header("location: ../welcome.php");
}else {
    echo '
        <script>
            alert("user or password are incorrect, try again")
            window.location = "../index.php";
        </script>
    ';
}

?>