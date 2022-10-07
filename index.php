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
    <section id="about" class="scroll bg-white h-auto py-4 text-center">
        <h1 class="text-bold text-slate-800 text-2xl font-bold md:text-4xl">About us</h1>
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                <div class="md:5/12 lg:w-5/12">
                    <img src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png" alt="image" loading="lazy" width="" height="">
                </div>
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-slate-800 font-bold md:text-4xl">GabutForum is carried out by passionate developers</h2>
                    <p class="mt-6 text-gray-600">"Jadi gini, ..." kami gabut kali tapi pengen ngasah skill web development, maka terbentuk lah <span class="text-pink-700">Gabut</span>Code Studio</a> yang berawal dari sebuah kegabutan haqiqi mahasiswa TI semester 3, menjadi sebuah ide yang dieksekusi layaknya project beneran. udah itu aja dlu</p>
                </div>
            </div>
        </div>
    </section>

    <section id="offer" class="bg-blue-100 h-auto">
        <div class="scroll mx-2 mb-2 py-4 list-none text-center ">
            <h2 class="text-2xl text-slate-800 font-bold md:text-4xl">Layanan Kami</h2>
            <ul class="px-10 py-10">
                <a class="" href="">
                    <li class="bg-white rounded-lg inline-block w-60 h-80 max-h-80 max-w-xs mx-4 mb-7 px-6 pt-10 pb-14 text-center items-center hover:drop-shadow-xl duration-300 hover:duration-300">
                        <div class="mb-2 flex items-center justify-center">
                            <img src="img/blog.svg" class="border-4 border-slate-900 rounded-full max-w-[100%] w-24">
                        </div>

                        <h3 class="text-slate-800 font-bold">Blog</h3>
                        <p class="text-slate-800 text-sm mb-6">Dapatkan informasi terkini tentang teknologi disini !</p>
                    </li>
                </a>
                <a class="" href="">
                    <li class="bg-white rounded-lg inline-block w-60 h-80 max-h-80 max-w-xs mx-4 mb-7 px-6 pt-10 pb-14 text-center items-center hover:drop-shadow-xl duration-300 hover:duration-300">
                        <div class="mb-2 flex items-center justify-center">
                            <img src="img/rakit-pc.svg" class="border-4 border-slate-900 rounded-full max-w-[100%] w-24">
                        </div>

                        <h3 class="text-slate-800 font-bold">Rakit PC</h3>
                        <p class="text-slate-800 text-sm mb-6">Bingung mau rakit pc low budget? sini biar kita bantuin.</p>
                    </li>
                </a>
                <a class="" href="">
                    <li class="bg-white rounded-lg inline-block w-60 h-80 max-h-80 max-w-xs mx-4 mb-7 px-6 pt-10 pb-14 text-center items-center hover:drop-shadow-xl duration-300 hover:duration-300">
                        <div class="mb-2 flex items-center justify-center">
                            <img src="img/cloud-network.svg" class="border-4 border-slate-900 rounded-full max-w-[100%] w-24">
                        </div>

                        <h3 class="text-slate-800 font-bold">Hosting</h3>
                        <p class="text-slate-800 text-sm mb-6">Untuk website berskala kecil hingga menengah.</p>
                    </li>
                </a>
                <a class="" href="">
                    <li class="bg-white rounded-lg inline-block w-60 h-80 max-h-80 max-w-xs mx-4 mb-7 px-6 pt-10 pb-14 text-center items-center hover:drop-shadow-xl duration-300 hover:duration-300">
                        <div class="mb-2 flex items-center justify-center">
                            <img src="img/laptop.svg" class="border-4 border-slate-900 rounded-full max-w-[100%] w-24">
                        </div>

                        <h3 class="text-slate-800 font-bold">Realtime Chat</h3>
                        <p class="text-slate-800 text-sm mb-6">Skuy nongki dengan global chat kami :D</p>
                    </li>
                </a>
            </ul>
        </div>
    </section>

    <section id="contact" class="relative flex items-top justify-center min-h-screen bg-white sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 bg-gray-100 border-gray-400 dark:border-gray-700 sm:rounded-lg">
                        <h1 class="text-4xl sm:text-5xl text-gray-600 font-extrabold tracking-tight">
                            Get in touch
                        </h1>
                        <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                            Fill in the form to start a conversation
                        </p>

                        <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                Acme Inc, Street, State,
                                Postal Code
                            </div>
                        </div>

                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                +44 1234567890
                            </div>
                        </div>

                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                info@acme.org
                            </div>
                        </div>
                    </div>

                    <form class="p-6 flex flex-col justify-center">
                        <div class="flex flex-col">
                            <label for="name" class="hidden">Full Name</label>
                            <input autocomplete="off" type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="email" class="hidden">Email</label>
                            <input autocomplete="off" type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="tel" class="hidden">Number</label>
                            <input autocomplete="off" type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <button onclick="alert('Fitur ini Dalam Pengembangan')" type="submit" class="md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once 'footer.php';
    ?>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>