<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <title>Landing Page</title>
</head>

<body>

    <section id="cta-banner" class="grid place-items-center h-screen md:h-screen bg-slate-900">
        <img class="hidden md:block h-screen w-screen z-0 brightness-50" src="img/pc.jpg" alt="">
        <div class="bg-black bg-opacity-50 absolute z-10 w-3/4 px-4 py-4 md:py-4 text-white text-center">
            <h1 class="ml1">
                <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters">WELCOME</span>
                    <span class="line line2"></span>
                </span>
            </h1>
            <br>
            <h1 class="text-3xl md:text-4xl text-bold font-mono">Hi, This is our site !</h1>
            <h2 class="text-2xl md:text-3xl text-bold font-mono text-teal-300">#projectGabut</h2><br>
            <h2 class="text-2xl md:text-3xl text-bold font-mono">An amazing website by Faiz and Yudhit</h2>
        </div>
    </section>
    <section id="about" class="scroll bg-white h-screen py-4 text-center">
        <h1 class="text-bold text-slate-800 text-2xl font-bold md:text-4xl">About us</h1>
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                <div class="md:5/12 lg:w-5/12">
                    <img src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png" alt="image" loading="lazy" width="" height="">
                </div>
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-slate-800 font-bold md:text-4xl">GabutForum is carried out by passionate developers</h2>
                    <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="offer" class="bg-blue-100">
        <div class="mx-2 mb-2 py-4 list-none text-center ">
            <h2 class="text-2xl text-slate-800 font-bold md:text-4xl">Layanan Kami</h2>
            <ul class="px-10 py-10">
                <a class="" href="">
                    <li class="bg-white rounded-lg inline-block w-60 h-80 max-h-80 max-w-xs mx-4 mb-7 px-6 pt-10 pb-14 text-center items-center hover:drop-shadow-xl duration-300 hover:duration-300">
                        <div class="mb-2 flex items-center justify-center">
                            <img src="img/laptop.svg" class="border-4 border-slate-900 rounded-full max-w-[100%] w-24">
                        </div>

                        <h3 class="text-slate-800">Hosting</h3>
                        <p class="text-slate-800 text-sm mb-6">Untuk website berskala kecil hingga menengah.</p>
                    </li>
                </a>
                <a class="" href="">
                    <li class="bg-white rounded-lg inline-block w-60 h-80 max-h-80 max-w-xs mx-4 mb-7 px-6 pt-10 pb-14 text-center items-center hover:drop-shadow-xl duration-300 hover:duration-300">
                        <div class="mb-2 flex items-center justify-center">
                            <img src="img/laptop.svg" class="border-4 border-slate-900 rounded-full max-w-[100%] w-24">
                        </div>

                        <h3 class="text-slate-800">Hosting</h3>
                        <p class="text-slate-800 text-sm mb-6">Untuk website berskala kecil hingga menengah.</p>
                    </li>
                </a>
                <a class="" href="">
                    <li class="bg-white rounded-lg inline-block w-60 h-80 max-h-80 max-w-xs mx-4 mb-7 px-6 pt-10 pb-14 text-center items-center hover:drop-shadow-xl duration-300 hover:duration-300">
                        <div class="mb-2 flex items-center justify-center">
                            <img src="img/laptop.svg" class="border-4 border-slate-900 rounded-full max-w-[100%] w-24">
                        </div>

                        <h3 class="text-slate-800">Hosting</h3>
                        <p class="text-slate-800 text-sm mb-6">Untuk website berskala kecil hingga menengah.</p>
                    </li>
                </a>
                <a class="" href="">
                    <li class="bg-white rounded-lg inline-block w-60 h-80 max-h-80 max-w-xs mx-4 mb-7 px-6 pt-10 pb-14 text-center items-center hover:drop-shadow-xl duration-300 hover:duration-300">
                        <div class="mb-2 flex items-center justify-center">
                            <img src="img/laptop.svg" class="border-4 border-slate-900 rounded-full max-w-[100%] w-24">
                        </div>

                        <h3 class="text-slate-800">Hosting</h3>
                        <p class="text-slate-800 text-sm mb-6">Untuk website berskala kecil hingga menengah.</p>
                    </li>
                </a>
            </ul>
        </div>
    </section>

    <?php
    include_once 'footer.php';
    ?>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>