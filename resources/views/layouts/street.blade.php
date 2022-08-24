@extends('master')

@section('title','Street')

@section('content')
<section class="pt-16 dark:bg-dark">
  <div class="pt-36 pb-32">
    <div class="w-full relative lg:h-[500px] overflow-hidden">
      <div id="filterbackdropimg" class="w-full bg-dark h-full opacity-70 absolute z-1"></div>
      <div class="w-full py-6 bottom-10 lg:top-[125px] absolute px-4">
        <h1 class="text-white font-extralight text-5xl lg:text-8xl text-center">Street</h1> 
        {{-- <p class="text-white font-semibold text-base lg:text-2xl text-center">Food & Baverages</p> --}}
        <div class="flex items-center justify-center pt-5">
          <input type="text" class="w-full lg:w-1/2 py-2 px-3 border border-primary focus:outline-none focus:ring-1 focus:ring-cyan-600 shadow-lg rounded-lg" placeholder="Cafe name, etc...">
          <button type="submit" name="submit" class="bg-primary rounded-lg p-2 ml-2 hover:opacity-90 focus:ring-2 focus:ring-cyan-600">
              <span class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </span>
            </button>
        </div>
      </div>
      <img src="https://source.unsplash.com/1200x600?cafe" alt="heroSection" class="w-full">
    </div>
  </div>
</section>

<section class="pt-36 pb-32 dark:bg-dark">
  <div class="container">    
    <div class="flex flex-wrap px-4">
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden dark:bg-dark">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
            <p class="mb-10 h-24 text-secondary text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-secondary dark:text-white">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden dark:bg-dark">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
            <p class="mb-10 h-24 text-secondary text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-secondary dark:text-white">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden dark:bg-dark">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
            <p class="mb-10 h-24 text-secondary text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-secondary dark:text-white">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden dark:bg-dark">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
            <p class="mb-10 h-24 text-secondary text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-secondary dark:text-white">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden dark:bg-dark">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
            <p class="mb-10 h-24 text-secondary text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-secondary dark:text-white">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden dark:bg-dark">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
            <p class="mb-10 h-24 text-secondary text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-secondary dark:text-white">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
    </div>    
  </div>
</section>


@endsection

