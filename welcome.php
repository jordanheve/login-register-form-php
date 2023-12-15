<?php
    session_start();

    if(!isset($_SESSION['user'])){
        echo '
        <script>
        alert("Please login to get access")
        window.location = "index.php"
         </script>
        ';
        session_destroy();
        die();
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="min-h-screen flex flex-col justify-center items-center gap-4 bg-slate-200 ">
    <h1 class="text-slate-700 text-4xl ">Welcome, you successfully logged in!</h1>
    <a href="php/logout.php" class="hover:bg-blue-600 bg-blue-500 text-white p-2 font-semibold">
        Log out
    </a>
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>