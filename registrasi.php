<?php

require 'function.php';

 if( isset($_POST["register"])) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
            alert ('user berhasil ditambahkan');
            </script>";
    }else{
        echo mysqli_error($conn);
    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    
    <form action="" method="POST" class="w-80  bg-slate-100 mx-auto mt-14 border-2 border-b-green-500 rounded-lg" data-aos="zoom-in-up">
        <h1 class="text-center text-gray-500 font-serif text-2xl">registrasi</h1>

    <ul>
        <li>
            <label for="username" class="ml-6 font-serif mb-1">username </label>
            <input type="text" name="username" id="username" class="w-[80%] border ml-6 rounded-xl active:border-solid active:border-green-500 focus:outline-none focus:border-green-500 outline-4 px-3 py-1" placeholder="@  username">
        </li>
        <li>
            <label for="password" class="ml-6 font-serif mb-1 mt-2">password</label>
            <input type="password" name="password" id="password" class="w-[80%] border ml-6 rounded-xl active:border-solid active:border-green-500 focus:outline-none focus:border-green-500 outline-4 px-3 py-1" placeholder="🔑  password">
        </li>
        <li>
            <label for="password2" class="ml-6 font-serif mb-1 mt-2">confirm your password</label>
            <input type="password" name="password2" id="password2" class="w-[80%] border ml-6 rounded-xl active:border-solid active:border-green-500 focus:outline-none focus:border-green-500 outline-4 px-3 py-1" placeholder="  password">
        </li>
        <li>
            <button type="submit" name="register" class="text-center bg-green-500 text-white px-20 py-2 mx-auto mb-7 ml-[45px] mt-5 rounded-xl active:scale-95 active:bg-green-600">Register</button>
        </li>
        
    </ul>
    </form>

    <script>
  AOS.init();
</script>
</body>
</html>