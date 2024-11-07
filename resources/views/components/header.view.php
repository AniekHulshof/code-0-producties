<nav class="bg-slate-50 border-b border-gray-100 shadow-xl">
  <div class="max-w-7xl w-full px-4 flex flex-wrap items-center justify-between mx-auto">
    <a href="?page=landingspage">
      <img src="img/logo/logo.png" class="h-16 mt-4 mb-4 md:m-4" alt="Entertainmentgroep Logo" />
    </a>
    <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>
    <a id="dynamicUrl" href="" class="hidden md:block">
      <div class="flex-1 items-center justify-center">
        <img id="dynamicImage" src="" alt="" class="h-16">
      </div>
    </a>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-slate-50 md:flex-row md:space-x-8 md:mt-0 md:border-0">
        <li class="relative group">
          <a href="?page=homepageTelltales" class="block py-2 px-3 bg-slate-50">TellTales</a>
        </li>
        <li class="relative group">
          <a href="?page=homepageCode0" class="block py-2 px-3 bg-slate-50">Code 0 Producties</a>
          <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white shadow-lg rounded-lg z-50">
            <li><a class="block px-4 py-2 hover:bg-gray-200" href="?page=verhalen">Verhalen</a></li>
            <li><a class="block px-4 py-2 hover:bg-gray-200" href="?page=karakters">Karakters</a></li>
          </ul>
        </li>
        <li class="relative group">
          <a href="?page=homepageLazyjack" class="block py-2 px-3 bg-slate-50">LazyJack</a>
        </li>
        <li>
          <a href="?page=contact" class="block py-2 px-3 bg-slate-50">Contact</a>
        </li>
      </ul>
    </div>
    <div class="w-full hidden md:hidden" id="mobile-menu">
      <ul class="font-medium flex flex-col p-4 bg-slate-50 rounded-lg">
        <li>
          <a href="?page=homepageTelltales" class="block py-2 px-3 bg-slate-50">TellTales</a>
        </li>
        <li class="relative">
          <button id="mobile-dropdown-toggle" class="block py-2 px-3 bg-slate-50 w-full text-left">
            Code 0 Producties &#9662;
          </button>
          <ul id="mobile-dropdown-menu" class="hidden pl-4 pt-1 bg-white shadow-lg rounded-lg">
            <li><a class="block px-4 py-2 hover:bg-gray-200" href="?page=verhalen">Verhalen</a></li>
            <li><a class="block px-4 py-2 hover:bg-gray-200" href="?page=karakters">Karakters</a></li>
          </ul>
        </li>
        <li>
          <a href="?page=homepageLazyjack" class="block py-2 px-3 bg-slate-50">LazyJack</a>
        </li>
        <li>
          <a href="?page=contact" class="block py-2 px-3 bg-slate-50">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>