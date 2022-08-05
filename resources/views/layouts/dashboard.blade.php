@extends('master')

@section('title','Dashboard Page')

@section('content')
{{-- Hero section start --}}
<section id="home" class="p-0 mt-16">
  <div class="p-0">
    <div class="w-full p-0">
      <div class="mb-10 overflow-hidden relative h-96 lg:h-screen">
        <img src="https://source.unsplash.com/1200x600?programming" alt="#" class="w-full h-screen">
        <div class="py-6 px-6 absolute top-0 lg:h-screen">
          <div class="lg:p-20">
            <div class="flex items-center mb-2 lg:mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-9 lg:h-12 w-9 lg:w-12">
              <h3 class="text-xs lg:text-lg font-semibold hover:text-primary truncate ml-2 lg:m-4 text-white cursor-pointer">Muhamad Haidar Ijlal</h3>
            </div>            
            <h1 class="text-xl lg:text-4xl mt-36 lg:mt-0 mb-4 text-white font-bold lg:mb-28">Title</h1>
            <p class="text-base mb-5 h-12 lg:h-24 text-ellipsis overflow-hidden text-white lg:w-1/2 lg:block lg:mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <a href="#" class="text-base lg:text-xl text-white hover:text-primary">Read More ></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Hero section end --}}

{{-- Latest posts section start --}}
<section id="latest-post" class="pt-36 pb-32">
  <div class="container">
    <div class="px-4 mb-20">
      <h1 class="text-4xl text-dark font-bold">Latest Posts</h1>
    </div>
    <div class="flex flex-wrap px-4">
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-secondary">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full flex justify-end">
      <p class="text-base block font-semibold text-primary cursor-pointer">
        <a href="#">Show more ></a>
      </p>
    </div>
  </div>
</section>
{{-- Latest posts section end --}}

{{-- Recomended posts section start --}}
<section id="recomended" class="pt-36 pb-12">
  <div class="container">
    <div class="px-4 mb-20">
      <h1 class="text-4xl text-dark font-bold">Recomended for you</h1>
    </div>
    <div class="flex flex-wrap px-4">
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-1 mb-2">
        <div class="bg-white mb-10 overflow-hidden">
          <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
          <div class="py-6">
            <div class="flex mb-5">
              <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
              <h3 class="text-base font-semibold text-dark hover:text-primary truncate  ml-2">Muhamad Haidar Ijlal</h3>
            </div>
            <h1 class="text-2xl font-bold text-dark mb-2">Title</h1>
            <p class="mb-10 h-24 text-ellipsis overflow-hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
            <p class="text-sm text-slate-300">2 March - Food  & Beverages</p>            
          </div>
        </div>
      </div>
    </div>
    <div class="w-full flex justify-end">
      <p class="text-base block font-semibold text-primary cursor-pointer">
        <a href="#">Show more ></a>
      </p>
    </div>
  </div>
</section>
{{-- Recomended posts section end --}}

@endsection