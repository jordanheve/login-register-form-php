<?php
  session_start();

  if(isset($_SESSION['user'])){
    header("location: welcome.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Register</title>
  </head>
  <body class="bg-slate-200 grid min-h-screen place-items-center">
    <main class=" p-1 bg-blue-500 ">
        <div class=" p-1">
            <form class="p-6 bg-white flex flex-col gap-4 w-96 mx-auto" id="login-form" action="php/login_user_be.php" method="POST">
              <h2 class="text-center text-blue-600 uppercase text-xl font-bold mb-2">Login</h2>
           
          
            <div class="flex flex-col">
              <label class="text-gray-700" for="login-email">Email:</label>
              <input type="email" name="email" id="login-email" placeholder="Email" class="border-b  border-b-2 border-gray-300 px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
          
           
          
            <div class="flex flex-col">
              <label class="text-gray-700" for="login-password">Password:</label>
              <input type="password" name="password" id="login-password" placeholder="Password" class="border-b  border-b-2 border-gray-300 px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
          
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-6 hover:bg-blue-600 transition-colors focus:outline-none">Login</button>

            </form>
            <p class=" text-center text-white text-xs" id="change-to-register">
              If you don't have an account, 
              <button class="underline" id="toggle-register-btn">
                register here
              </button>
            </p>
            <!--Login register form-->
            <form id="register-form" class=" p-6 bg-white flex flex-col gap-4 w-96 mx-auto hidden" action="./php/user_register_be.php" method="POST">
            <h2 class="text-center text-blue-600 uppercase text-xl font-bold mb-2">Register</h2>
            <div class="flex flex-col">
              <label class="text-gray-700" for="name">Name:</label>
              <input type="text" id="name" name="name" placeholder="Name" class="border-b  border-b-2 border-gray-300  px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
          
            <div class="flex flex-col">
              <label class="text-gray-700" for="email">Email:</label>
              <input type="email" name="email" id="email" placeholder="Email" class="border-b  border-b-2 border-gray-300 px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
          
            <div class="flex flex-col">
              <label class="text-gray-700" for="username">Username:</label>
              <input type="text" id="username" name="username" placeholder="Username" class="border-b  border-b-2 border-gray-300 px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
          
            <div class="flex flex-col">
              <label class="text-gray-700" for="password">Password:</label>
              <input type="password" name="password" id="password" placeholder="Password" class="border-b  border-b-2 border-gray-300 px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
          
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-6 hover:bg-blue-600 transition-colors focus:outline-none">Submit</button>
          </form>
          <p class=" text-center text-white text-xs hidden" id="change-to-login">
            If you already have an account, 
            <button class="underline" id="toggle-login-btn">
              login here
            </button>
          </p>
      </div>
    </main>
    <script src="./js/main.js"></script>
  </body>
  <script src="https://cdn.tailwindcss.com"></script>
</html>
