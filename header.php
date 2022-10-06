<div class="fixed w-full top-0 z-10" x-data="{open : false}">
  <header class=" w-full">
    <nav class="px-5 py-3 flex justify-between md:justify-around items-center content-center bg-slate-900">
      <div class="flex items-center">
        <a href="/"><img class="w-8 h-8 m-2" src="/img/BeetcodeStudio.png" alt=""></a>
        <a href="/" class="text-lg font-bold text-slate-300">
          <span class="text-pink-700">Beet</span>Code Studio</a>
      </div>

      <!-- button mobile black -->
      <div class="block md:hidden">
        <button class="flex items-center justify-center text-white bg-black p-2 rounded-full">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-7">
          <li>
            <a href="#offer" class="text-md font-semibold hover:text-slate-300 text-slate-600">Offer</a>
          </li>
          <li>
            <a href="#about" class="text-md font-semibold hover:text-slate-300 text-slate-600">About</a>
          </li>
          <li>
            <a href="#contact" class="text-md font-semibold hover:text-slate-300 text-slate-600">Contact</a>
          </li>
        </ul>
      </div>
      <button class="md:block hidden border border-gray-300 text-white py-2 p-5 rounded-2xl ml-5">
        Contact Us
      </button>
    </nav>
  </header>
  <div x-show="open" @click.outside="open = !open" class="w-full bg-black shadow-md px-10 py-5">
    <ul class="text-lg">
      <li>
        <a href="#offer" class="text-sm font-semibold hover:text-slate-300 text-slate-600">Offer</a>
      </li>
      <li>
        <a href="#about" class="text-sm font-medium hover:text-slate-300 text-slate-600">About</a>
      </li>
      <li>
        <a href="#contact" class="text-sm font-medium hover:text-slate-300 text-slate-600">Contact</a>
      </li>
    </ul>
  </div>
</div>