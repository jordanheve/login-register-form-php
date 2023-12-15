<?php

session_start();

include 'connection_be.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$passwordNotEncripted = $_POST['password'];
$password = hash('sha512', $passwordNotEncripted);

$query = "INSERT INTO users(name,email,username,password) VALUES('$name', '$email', '$username', '$password') ";


//dont repeat email  & username &verification 

$email_verification = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'");
$username_verification = mysqli_query($connection, "SELECT * FROM users WHERE username='$username'");

if(mysqli_num_rows($email_verification) > 0 && mysqli_num_rows($username_verification) > 0){
    echo '
        <script>
            alert("Email and username are already taken try using others");
            window.location = "../index.php";
        </script>
        
    ';
    exit();
}elseif(mysqli_num_rows($email_verification) > 0){
    echo '
        <script>
            alert("Email is already taken try using other");
            window.location = "../index.php";
        </script>

    ';
    exit();
}elseif(mysqli_num_rows($username_verification) > 0){
    echo '
        <script>
            alert("Username is already taken try using other");
            window.location = "../index.php";
        </script>

    ';
    exit();
}

$execute = mysqli_query($connection, $query);


if($execute) {
    echo "
        <script>
            alert('register complete!');
            window.location = '../index.php'
        </script>
    ";
}else {
    echo "
        <script>
            alert('Something went wrong, try again');
            window.location = '../index.php'
        </script>
    ";   
}

mysqli_close($connection);

?>