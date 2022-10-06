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
    <title>Landing Page</title>
</head>

<body>

    <section class="grid place-items-center h-screen md:h-screen bg-slate-900">
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
    <section class="bg-white h-screen py-4 text-center">
        <h1 class="text-bold font-mono text-slate-800 text-2xl font-bold md:text-4xl">About us</h1>
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                <div class="md:5/12 lg:w-5/12">
                    <img src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png" alt="image" loading="lazy" width="" height="">
                </div>
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">GabutForum is carried out by passionate developers</h2>
                    <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
                    <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
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