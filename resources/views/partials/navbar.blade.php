<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
  <div class="container">
    <div class="flex justify-between items-center relative">
      <div class="px-4">
        <a href="#home" class="font-bold block text-lg py-4 text-dark dark:text-white">Guide<span class="text-primary">Krw</span></a>
      </div>
      <div class="flex items-center p-3">
        <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
          <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>          
          <span class="hamburger-line transition duration-300 ease-in-out"></span>          
          <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>          
        </button>
        <nav id="nav-menu" class="hidden lg:block lg:shadow-none lg:bg-transparent lg:dark:bg-transparent lg:rounded-none lg:static lg:max-w-full absolute bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full z-10 dark:bg-dark dark:shadow-slate-500 dark:shadow-lg lg:dark:shadow-none">
          <ul class="block lg:flex">
            <li class="group">
              <a href="#home" class="text-base dark:text-white text-dark pt-4 pb-2 px-8 lg:py-1 flex group-hover:text-primary">Home</a>
            </li>
            <li class="group">
              <a href="#fnb" class="text-base dark:text-white text-dark py-2 px-8 lg:py-1 flex group-hover:text-primary">Food & Beverages</a>
            </li>
            <li class="group">
              <a href="#hng" class="text-base dark:text-white text-dark py-2 px-8 lg:py-1 flex group-hover:text-primary">History & Goverment</a>
            </li>
            <li class="group">
              <a href="#street" class="text-base dark:text-white text-dark pt-2 pb-4 px-8 lg:py-1 flex group-hover:text-primary">Street</a>
            </li>
            <li class="flex mt-3 lg:mt-0 items-center">
              <div class="flex lg:py-1 pt-2 pb-4 px-8">
                <span class="text-sm mr-2 text-slate-500 dark:text-white font-medium">light</span>
                <input type="checkbox" class="hidden" id="dark-toggle"/>
                <label for="dark-toggle">
                  <div class="flex h-5 w-9 items-center cursor-pointer rounded-full bg-slate-500 dark:bg-primary p-1">
                    <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                  </div>
                </label>
                <span class="text-sm ml-2 text-slate-500 font-medium dark:text-white">
                  dark                    
                </span>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>