<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- <link rel="logo" type="icon" href="..//picture/logo.jpg"> -->
    <!-- alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="..//src/app.js"></script>
    <link rel="" href="style.css">
    <style>
        #countdown{
            display: flex;
            background-color: rgb(68, 200, 68);
            color: white;
            margin-right: 25px;
            padding: 5px 20px;
            border-radius: 10px;
            text-align: center;
            line-height: 37px;
            gap: 1px;
            justify-content: space-evenly;

        }
        *{
    margin: 0;
    padding: 0;
}
body{
    font-family: sans-serif;
    background-color: white;
    overflow-x: hidden;
}
.logo img{
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin-top: -3px;
    left: 0;
    background-color: gray;
}
nav{
    background-color: white;
    display: flex;
    justify-content: space-around;
    /* padding: 20px 0; */
    height: 80px;
    align-items: center;
}

nav ul{
    display: flex;
    justify-content: space-evenly;
    list-style: none;
    width: 20%;
    margin-top: 10px;
    /* background-color: red; */
}
#button{
    display: flex;
    justify-content: end;
    justify-content: space-evenly;
    margin-right: -100px;
}
nav ul li a{
    color: black;
    text-decoration: none;
}

nav ul li a:hover{
    background-color: gray;
    padding: 5px 8px;
    border-radius: 5px;
    
}

/* hamburger menu */
.menu-toogle{
    display: none;
    flex-direction: column;
    height: 20px;
    background-color: black;
    justify-content: space-between;
    position: relative;
}

.menu-toogle input{
    position: absolute;
    width: 40px;
    height: 28px;
    left: -6px;
    top: -2px;
    opacity: 0;
    cursor: pointer;
}

.menu-toogle span{
    display: block;
    width: 28px;
    height: 3px;
    background-color: white;
    border-radius: 3px;
}
/* Hamburger menu animation */
/* Responsive Breakpoint */
/* ukuran tablet */

@media screen and (max-width: 768px){
    nav ul{
        width: 30%;
        margin-right: 20px;
        margin-left: -25px;
        
    }
    .logo img{
        width: 95px;
        margin-left: -25px;
    }
}
@media screen and (max-width: 1024px){
    nav ul button{
        margin-right: 30px;
    }
}
@media screen and (max-width: 768px){
    nav ul button{
        margin-left: -40px;
    }
}
@media screen and (max-width: 768px){
    #button{
        justify-content: space-evenly;
        margin-left: -55px;
    }
}
@media screen and (max-width: 1280px){
    nav {
        width: 100%;
    }
}
@media screen and (max-width: 1536px){
    nav {
        width: 100%;
    }
}
/* ukuran mobile */

@media screen and (max-width: 640px){
    .menu-toogle{
        display: flex;
        margin-left: auto;
        margin-right: 40px;
        
    }
    form #label{
        margin-top: -100px;
        color: red;
      
    }
    nav ul{
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        margin-top: 35px;
        margin-bottom: 10px;
        height: 40vh;
        justify-content: space-evenly;
        flex-direction: column;
        align-self: center;
        background-color: white;
        z-index: -1;
        transform: translateX(100%);
        transition: all 0.5s;
        opacity: 0;
        
        
    }

    nav ul.slide{
        opacity: 1;
        transition: all 0.5s;
        transform: translateX(0);
        margin-left: 10px;
        margin-top: 80px;
        margin-bottom: 15px;
        width: 97%;
        right: 0;
        
    }
    .logo img{
        width: 70px;
        margin: 0 50px;
        
    }
}
/* ukuran large */
/* .image{
    filter: drop-shadow(10px 10px 5px rgba(0, 0, 0, 0.285));
} */

#judul{
    text-align: center;
    font-size: 24px;
    margin-right: 15px;

}

.footer{
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
</head>

<body class="bg-gray-100">

    <!-- Navbar Start -->
    <nav class="flex justify-around border-b-2 mb-0 fixed top-0 bg-zinc-100 h-36">
        <div class="logo left-28 bg-scroll mt-[-55px]">
            <img src="../Image/logo.jpg" alt="" class="">
        </div>

        <div class="block justify-items-center">
            <ul class="flex justify-items-center">
                <li><a href="#" class="hover:bg-green-500 hover:text-white transition duration-200 sm:ml-10">Home</a></li>
                <li><a href="#" class="hover:bg-green-500 hover:text-white transition duration-200 sm:ml-10">Product</a></li>
                <li><a href="#" class="hover:bg-green-500 hover:text-white transition duration-200 sm:ml-10">Service</a></li>
                <li><a href="#" class="hover:bg-green-500 hover:text-white transition duration-200 sm:ml-10">Gallery</a></li>
                <li><a href="#" class="hover:bg-green-500 hover:text-white transition duration-200 sm:ml-10">About</a></li>
            </ul>
            <div class="flex justify-center">  
                <div class="mt-10 flex justify-items-center">
                    <form action="" >
                        
                        <input type="search" name="search" id="search" class="border bg-white border-white px-5 pr-36 py-2 rounded-md  focus:outline-green-500" placeholder="sneakers-fav">
                    </form>
                </div>
                <div>
                    <img src="..//picture/shopping-cart.png" alt="" class="w-8 h-8 mt-11 ml-5">
                </div>
            </div>
        </div>
        
        <ul class="justify-items-end mt-[-70px] md:mr-[-10px]" id="button">
            <button class="hover:bg-green-500 active:bg-green-600 active:scale-95 text-slate-600 transition-all ease-in-out py-2 px-3 rounded-lg hover:text-white">Sign in</button>
            <button class="hover:bg-green-500 active:bg-green-600 active:scale-95 text-slate-600 transition-all ease-in-out py-2 px-3 rounded-lg hover:text-white">Sign up</button>
        </ul>

        <div class="menu-toogle">
            <input type="checkbox" >
            <span></span>
            <span></span>
            <span></span>
            <span></span>   
        </div>
    </nav>

    <script src="script.js"></script>
    <!-- Navbar End -->
    <!-- component -->
    <!-- This is an example component -->


<!-- component -->
<!-- This is an example component -->
<!-- component -->
<!-- This is an example component -->
<div class="max-w-[90%]  mx-auto mt-48 rounded-md">

	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="..//Image/banner/boots.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="..//Image/banner/2.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="..//Image/banner/3.png" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>



    <!-- banner 2 start -->
    <div class="flex justify-evenly mx-auto mt-5 sm:flex-wrap md:flex-nowrap md:gap-2 ">
        <div class="bg-cover w-72 text-white mb-3 cursor-pointer active:rounded-lg transition-all active:scale-95 ease-in-out "
            style="background-image: url(..//banner/banner2/isaac-wendland-YbubEOFyKZU-unsplash.jpg); width: 350px; height: 200px;">
            <p class="text-center pt-36 font-semibold font-serif text-xl">Running shoes</p>
        </div>
        <div class="bg-cover w-72 text-white mb-3 cursor-pointer active:rounded-lg transition-all active:scale-95 ease-in-out"
            style="background-image: url(..//banner/banner2/nathan-dumlao-qxcQG21m_qE-unsplash.jpg); width: 350px; height: 200px;">
            <p class="text-center pt-36 font-semibold font-serif text-xl">Boots </p>
        </div>
        <div class="bg-cover w-72 text-white cursor-pointer active:rounded-lg transition-all active:scale-95 ease-in-out mb-5"
            style="background-image: url(..//banner/banner2/taylor-smith-aDZ5YIuedQg-unsplash.jpg); width: 350px; height: 200px;">
            <p class="text-center pt-36 font-semibold font-serif text-xl mb-3">Sneakers</p>
        </div>

    </div>
    <!-- banner 2 end -->

    <!-- First item start -->
    <div class="flex w-[100%] bg-red-600 h-90 justify-stretch sm:flex-wrap">
        <div class="image grid justify-items-start-start pb-10 ml-14">
            <img src="..//landingpage/domino-164_6wVEHfI-unsplash-removebg-preview.png" alt="" class="w-96  pl-40">
        </div>
        <div class="pt-16 ml-16 w-72 sm:ml-44 sm:mt-[-80px] lg:mt-[-40px] lg:ml-24 cursor-pointer">
            <h1 class="text-white text-2xl font-bold font-serif pr-10 sm:flex-wrap mb-2">Running Shoes</h1>
            <p class="font-semibold font-serif text-white">Special edition Nike running shoes available in our shop.</p>
            <div
                class=" px-4 py-2 ring-1 ring-white rounded-full w-28 mt-5 ml-20 transition hover:-translate-y-2 duration-700 sm:mr-16 delay-200">
                <p class="text-center font-bold font-serif text-white cursor-pointer">see</p>
            </div>
        </div>

    </div>
    <!-- fisrt item end -->

    <!-- diskon -->
    <div class="flex ml-14 mt-3 sm:justify-center md:justify-normal">
        <h1 class="text-2xl mr-5 mt-5">Diskon spesial</h1>
        <div class="" id="countdown-container">
            <div class="flex mt-1 mr-7" id="countdown">
            </div>
        </div>
        <div>
            <a href="..//detail/detail.html"><img src="..//Image/next.png" alt="" class="w-9 h-9 mt-3 mr-28 ml-[-15px]"></a>
        </div>
    </div>
    
    <script>
        // Tanggal dan waktu pembukaan toko
    const openingDate = new Date('2024-05-20T09:00:00').getTime();
    
    // Update hitungan mundur setiap 1 detik
    const countdown = setInterval(function() {
      // Dapatkan tanggal dan waktu saat ini
      const now = new Date().getTime();
    
      // Hitung selisih waktu antara sekarang dan tanggal pembukaan
      const distance = openingDate - now;
    
      // Hitung hari, jam, menit, dan detik
      const days = Math.floor(distance / (1200 * 70 * 60 * 24));
      const hours = Math.floor((distance % (1200 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1200 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1200 * 60)) / 1000);
    
      // Tampilkan hitungan mundur
      document.getElementById('countdown').innerHTML = `${days}    : &nbsp ${hours} : &nbsp ${minutes} : &nbsp ${seconds} `;
    
      // Jika hitungan mundur sudah selesai, hentikan hitungan mundur
      if (distance < 0) {
        clearInterval(countdown);
        document.getElementById('countdown').innerHTML = 'Diskon sudah habis !';
      }
    }, 1000);
    
      </script>
    
    <!-- coba -->
    <div class="flex justify-evenly mb-24 mr-2 sm:flex-wrap md:flex-wrap xl:justify-evenly mx-14 mt-5">
        <div
            class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <a href="..//detail/detail copy.php"><img src="..//Image/Nike/nike-1.jpg" alt="" class="h-52 mx-auto rounded-lg sm:w-full"></a>
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                    <div class="sub-kota flex items-center gap-1 mb-3">
                        <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                        <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                    </div>        
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3 mt-1">
                        <p class="text-slate-400 text-sm mt-2">4.9 | 500+ terjual</p>
                        <a href="#" class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px] hidden hover:">whre</a>
                    </div>

                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px] hidden hover:">whre</a>
                </div>
            </div>
        </div>
        <div
         class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/Nike/nike-5.jpg" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/boots/Favorit2-removebg-preview (1).png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/Nike/nike3-removebg-preview.png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-[380px] bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/Nike/nike9-removebg-preview.png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-[380px] bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/canvas/Favorit3-removebg-preview (1).png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-[380px] bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/canvas/canvas2.png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-[380px] bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/canvas/canvas3.png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
    </div>

    <!-- best produk start-->
    <!-- <div class="grid grid-rows-3 grid-cols-1 md:grid-cols-3 gap-3 w-[90%] mx-auto ">
        <a href="..//detail/detail.html">
            <div class="col-span-1 row-span-7">
                <figcaption>
                    <img src="..//Image/banner/Fav-produk-removebg-preview.png" alt="" class="bg-gray-200">
                    <h1 class="font-bold font-serif ml-28 mt-5 text-gray-800">Men's Sneaker</h1>
                    <div class="flex justify-center mt-2 mr-9">
                        <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                        <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                        <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                        <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                        <img src="..//picture/star(none).png" alt="" class="w-4 h-4 cursor-not-allowed">
                    </div>
                    <h3 class="mt-3 ml-32 font-bold">Rp.1.250.099</h3>
                </figcaption>
            </div>
        </a>
        <div class="grid grid-cols-1 col-span-1 h-96 pl-28">
            <figcaption>
                <img src="..//Image/banner/item-fav1.png" alt="" class="w-64 h-52 bg-gray-200 row-span-5  ">
                <h1 class="ml-16 font-bold font-serif mt-5">Man's Sneakers</h1>
                <div class="flex justify-center mt-2 ">
                    <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                    <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                    <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                    <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                    <img src="..//picture/star(none).png" alt="" class="w-4 h-4 cursor-not-allowed">
                </div>
                <h3 class="mt-3 ml-20 font-bold">Rp.1.250.099</h3>
            </figcaption>
        </div>
        <div class="grid grid-cols-1 col-span-1 h-96 pl-28">
            <figcaption>
                <img src="..//Image/banner/item-fav1.png " alt="" class="w-64 h-52 bg-gray-200 row-span-5  ">
                <h1 class="ml-16 font-bold font-serif mt-5">Man's Sneakers</h1>
                <div class="flex justify-center mt-2 ">
                    <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                    <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                    <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                    <img src="..//picture/star.png" alt="" class="w-4 h-4 cursor-not-allowed ">
                    <img src="..//picture/star(none).png" alt="" class="w-4 h-4 cursor-not-allowed">
                </div>
                <h3 class="mt-3 ml-20 font-bold">Rp.1.250.099</h3>
            </figcaption>
        </div>
           

        </div>

    </div> -->


    <!-- footer -->
    <footer class="flex sm:flex-wrap md:flex-nowrap">
        <div class="bg-green-500 w-[500px] 2xl:w-full xl:w-full sm:w-full">
            <img src="..//Image/logo.jpg" alt="" class="w-30 h-20 rounded-full ml-10 mt-20">
            <h3 class="ml-10 mt-5 text-white sm:text-red-500 md:text-white">Our startup must provide easy access and
                <br> user-friendly interface and will accept criticism &
                suggestions.
            </h3>
            <div class="flex ml-10 mt-5 text-white">
                <img src="..//picture/telephone.png" alt="" class="'w-5 h-5 bg-transparent">
                <p class="ml-3 mt-[-3px]">0895 3960 83939</p>
            </div>
            <div class="flex ml-10 mt-3 text-white mb-64">
                <img src="..//picture/mail.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">dwiezy1509@gmail.com</p>
            </div>
        </div>
        <div class="bg-zinc-200 2xl:w-full xl:w-full sm:w-full">
            <h1 class="mt-28 text-2xl font-bold ml-10">Addres</h1>
            <h3 class="ml-10 mt-10 text-gray-500">Jl. Abdul Muis No.44 1, RT.1/RW.8, Petojo Sel., <br> Kecamatan Gambir,
                Kota Jakarta Pusat, Daerah Khusus
                Ibukota Jakarta 10160</h3>
            <div class="flex ml-10 mt-5 text-gray-500 ">
                <img src="..//picture/calendar.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">Open Monday-Saturday</p>
            </div>
            <div class="flex ml-10 mt-3 text-gray-500">
                <img src="..//picture/clock.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">09:00 AM - 16:00 PM</p>
            </div>
        </div>
        <div class="bg-zinc-200 w-72 2xl:w-full xl:w-full sm:w-full">
            <h1 class="mt-28 text-2xl font-bold ml-10">Contact US</h1>
            <div class="flex">
                <img src="..//picture/facebook.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer">
                <img src="..//picture/instagram.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer">
                <img src="..//picture/youtube.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer">
            </div>


        </div>
    </footer>
</body>

</html>