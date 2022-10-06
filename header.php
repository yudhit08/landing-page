<div class="fixed w-full top-0 z-30" x-data="{open : false}">
  <header class=" w-full">
    <nav class="px-5 py-3 flex justify-between md:justify-around items-center content-center bg-slate-900">
      <div class="flex items-center">
        <a href="/"><img class="w-8 h-8 m-2" src="img/BeetcodeStudio.png" alt=""></a>
        <a href="/" class="text-lg font-bold text-slate-300">
          <span class="text-pink-700">Gabut</span>Code Studio</a>
      </div>

      <!-- button mobile black -->
      <div class="hidden md:block">
        <ul class="flex space-x-7">
          <li>
            <a href="#about" class="text-md font-semibold hover:text-slate-300 text-slate-600">About</a>
          </li>
          <li>
            <a href="#offer" class="text-md font-semibold hover:text-slate-300 text-slate-600">Offer</a>
          </li>
          <li>
            <a href="#contact" class="text-md font-semibold hover:text-slate-300 text-slate-600">Contact</a>
          </li>
        </ul>
      </div>
      <button class="md:block hidden border border-gray-300 text-white py-2 p-5 rounded-2xl ml-5">
        Login
      </button>
    </nav>
  </header>
</div>