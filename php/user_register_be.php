<?php

include 'connection_be.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users(name,email,user,password) VALUES('$name', '$email', '$username', '$password') ";

$execute = mysqli_query($connection, $query);


if($execute) {
    echo "
        <script>
            alert('register complete!');
            window.location = '../index.html'
        </script>
    ";
}else {
    echo "
        <script>
            alert('Something went wrong, try again');
            window.location = '../index.html'
        </script>
    ";   
}

mysqli_close($connection);

?>