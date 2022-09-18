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
              <a href="#home" class="text-base dark:text-white text-dark pt-4 pb-2 px-6 lg:py-1 flex group-hover:text-primary">Home</a>
            </li>
            <li class="group">
              <a href="#fnb" class="text-base dark:text-white text-dark py-2 px-6 lg:py-1 flex group-hover:text-primary">Food & Beverages</a>
            </li>
            <li class="group">
              <a href="#hng" class="text-base dark:text-white text-dark py-2 px-6 lg:py-1 flex group-hover:text-primary">History & Goverment</a>
            </li>
            <li class="group">
              <a href="#street" class="text-base dark:text-white text-dark py-2 px-6 lg:py-1 flex group-hover:text-primary">Street</a>
            </li>
            <li class="group block lg:hidden">
              <a class="text-base dark:text-white text-dark pt-2 pb-4 px-6 lg:py-1 flex group-hover:text-primary">Others</a>
            </li>
            <li class="group hidden lg:block">              
              <a data-dropdown-toggle="dropdown" class="text-base dark:text-white text-dark pt-2 pb-4 px-6 lg:py-1 flex group-hover:text-primary items-center" type="button">Others <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>                                
              <!-- Dropdown menu -->
              <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-slate-800" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 558px);">
                  <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                    <li>
                      <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-slate-700 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                      <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-slate-700 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                      <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-slate-700 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                      <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-slate-700 dark:hover:text-white">Sign out</a>
                    </li>
                  </ul>
              </div>

            </li>
            <li class="flex mt-3 lg:mt-0 items-center">
              <div class="flex lg:py-1 pt-1 pb-4 px-6">
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