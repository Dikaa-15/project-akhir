<?php
session_start();

require 'function.php';

// cek cookie
if( isset($_COOKIE['login'])) {
    if( $_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}

if( isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
 

if( isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;
            // header("Location: landing-page.php");
            // exit;

            // cek remember me
            if( isset($_POST['remember'])) {
                // buat cookie
                setcookie('login', 'true', time () + 120);
            }

            // $_SESSION["beli"] = true;
            // header("Location: detail copy2.php");
            // exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>login page</title>
</head>
<body class="bg-gray-200">
    <form action="" method="POST" class="w-80 mx-auto mt-5 bg-white border-2 border-t-green-500 rounded-lg" data-aos="zoom-in-up">
        <h1 class="text-center text-2xl text-gray-500 font-serif mt-3 mb-2">User Login</h1>
        <ul>
            <li>    
                <label for="username" class="block ml-8 mb-2 mt-3 font-serif">User name </label>
                <input type="text" name="username" id="username" class="bg-slate-100 px-7 py-1 ml-8 rounded-xl border active:border-solid active:border-green-500 focus:outline-none focus:border-green-500 outline-4" placeholder="@  username">
            </li>
            <li>
                <label for="password" class="block ml-8 mb-2 mt-2 font-serif">Password </label>
                <input type="password" name="password" id="password" class="bg-slate-100 px-7 py-1 ml-8 rounded-xl border active:border-solid active:border-green-500 focus:outline-none focus:border-green-500 outline-4" placeholder="🔑 password">
            </li>
            <?php if( isset($error)) : ?>
        <p style="color: red; font-style: italic; margin-left: 24px;">username or password salah!</p>
    <?php endif; ?>
            <li>
                <input type="checkbox" name="remember" id="remember" class="ml-9 mt-4">
                <label for="remember" class="font-serif">Remember me:</label>
            </li>
            <li>
                <button type="submit" name="login" class="bg-green-500 ml-14 px-20 py-2 rounded-xl text-white mt-6 font-serif font-bold active:bg-green-600 active:scale-95">Login</button>
            </li>
            <p class="ml-5 mt-5 mb-8">haven't account? <a href="registrasi.php" class="underline underline-offset-2">Create your account</a></p>
        </ul>
    </form>
    <script>
  AOS.init();
</script>
</body>
</html>