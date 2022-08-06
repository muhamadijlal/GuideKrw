@extends('master')

@section('title','Search Result')

@section('content')
    <section class="pt-36 pb-32 dark:bg-dark">
      <div class="container">
        <div class="w-full flex px-4">
          <input type="text" name="text" placeholder="Input some text here" class="bg-white text-dark p-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary w-full border-1 border-slate-300 border">
          <button type="submit" name="submit" class="bg-primary rounded-lg p-2 w-11 h-11 ml-2 hover:opacity-90 focus:ring focus:ring-cyan-400">
            <span class="text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </span>
          </button>
        </div>
        <div class="w-full px-4">
          <h1 class="text-2xl lg:text-4xl text-dark font-bold py-12 dark:text-white">Search Result</h1>
          <div class="flex flex-wrap">
            <div class="w-full px-4 mb-3 lg:w-1/3">            
              <div class="w-full rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/800x300?cafe" alt="cafe" class="w-full h-40 rounded-b-lg">
                <div class=" py-4">
                  <h1 class="text-2xl lg:text-4xl font-bold py-4 text-dark dark:text-white">Kopi Uwak Coffe & Roastery</h1>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Alamat :</span> Ruko Teraz block IX-C no. 57, Galuh Mas, Karawang, Jawa Barat</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Jam :</span> 13:00 - 22:00 WIB</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Telepon :</span> 0811-763-425</p>                  
                  <div class="py-5 w-full flex justify-center">
                    <a href="#" class="px-3 py-2 inline-block text-sm text-white bg-primary rounded-full hover:opacity-80 focus:ring focus:ring-cyan-500"><p>Show more</p></a>
                  </div>
                </div>                
              </div>
            </div>            
            <div class="w-full px-4 mb-3 lg:w-1/3">            
              <div class="w-full rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/800x300?cafe" alt="cafe" class="w-full h-40 rounded-b-lg">
                <div class=" py-4">
                  <h1 class="text-2xl lg:text-4xl font-bold py-4 text-dark dark:text-white">Kopi Uwak Coffe & Roastery</h1>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Alamat :</span> Ruko Teraz block IX-C no. 57, Galuh Mas, Karawang, Jawa Barat</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Jam :</span> 13:00 - 22:00 WIB</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Telepon :</span> 0811-763-425</p>                  
                  <div class="py-5 w-full flex justify-center">
                    <a href="#" class="px-3 py-2 inline-block text-sm text-white bg-primary rounded-full hover:opacity-80 focus:ring focus:ring-cyan-500"><p>Show more</p></a>
                  </div>
                </div>                
              </div>
            </div>            
            <div class="w-full px-4 mb-3 lg:w-1/3">            
              <div class="w-full rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/800x300?cafe" alt="cafe" class="w-full h-40 rounded-b-lg">
                <div class=" py-4">
                  <h1 class="text-2xl lg:text-4xl font-bold py-4 text-dark dark:text-white">Kopi Uwak Coffe & Roastery</h1>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Alamat :</span> Ruko Teraz block IX-C no. 57, Galuh Mas, Karawang, Jawa Barat</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Jam :</span> 13:00 - 22:00 WIB</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Telepon :</span> 0811-763-425</p>                  
                  <div class="py-5 w-full flex justify-center">
                    <a href="#" class="px-3 py-2 inline-block text-sm text-white bg-primary rounded-full hover:opacity-80 focus:ring focus:ring-cyan-500"><p>Show more</p></a>
                  </div>
                </div>                
              </div>
            </div>            
            <div class="w-full px-4 mb-3 lg:w-1/3">            
              <div class="w-full rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/800x300?cafe" alt="cafe" class="w-full h-40 rounded-b-lg">
                <div class=" py-4">
                  <h1 class="text-2xl lg:text-4xl font-bold py-4 text-dark dark:text-white">Kopi Uwak Coffe & Roastery</h1>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Alamat :</span> Ruko Teraz block IX-C no. 57, Galuh Mas, Karawang, Jawa Barat</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Jam :</span> 13:00 - 22:00 WIB</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Telepon :</span> 0811-763-425</p>                  
                  <div class="py-5 w-full flex justify-center">
                    <a href="#" class="px-3 py-2 inline-block text-sm text-white bg-primary rounded-full hover:opacity-80 focus:ring focus:ring-cyan-500"><p>Show more</p></a>
                  </div>
                </div>                
              </div>
            </div>            
            <div class="w-full px-4 mb-3 lg:w-1/3">            
              <div class="w-full rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/800x300?cafe" alt="cafe" class="w-full h-40 rounded-b-lg">
                <div class=" py-4">
                  <h1 class="text-2xl lg:text-4xl font-bold py-4 text-dark dark:text-white">Kopi Uwak Coffe & Roastery</h1>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Alamat :</span> Ruko Teraz block IX-C no. 57, Galuh Mas, Karawang, Jawa Barat</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Jam :</span> 13:00 - 22:00 WIB</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Telepon :</span> 0811-763-425</p>                  
                  <div class="py-5 w-full flex justify-center">
                    <a href="#" class="px-3 py-2 inline-block text-sm text-white bg-primary rounded-full hover:opacity-80 focus:ring focus:ring-cyan-500"><p>Show more</p></a>
                  </div>
                </div>                
              </div>
            </div>            
            <div class="w-full px-4 mb-3 lg:w-1/3">            
              <div class="w-full rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/800x300?cafe" alt="cafe" class="w-full h-40 rounded-b-lg">
                <div class=" py-4">
                  <h1 class="text-2xl lg:text-4xl font-bold py-4 text-dark dark:text-white">Kopi Uwak Coffe & Roastery</h1>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Alamat :</span> Ruko Teraz block IX-C no. 57, Galuh Mas, Karawang, Jawa Barat</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Jam :</span> 13:00 - 22:00 WIB</p>
                  <p class="text-sm lg:text-base text-secondary py-2"><span class="text-dark dark:text-white font-semibold text-sm">Telepon :</span> 0811-763-425</p>                  
                  <div class="py-5 w-full flex justify-center">
                    <a href="#" class="px-3 py-2 inline-block text-sm text-white bg-primary rounded-full hover:opacity-80 focus:ring focus:ring-cyan-500"><p>Show more</p></a>
                  </div>
                </div>                
              </div>
            </div>            
          </div>
        </div>
      </div>
    </section>
@endsection