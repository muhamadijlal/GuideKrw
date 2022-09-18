@extends('master')

@section('title','Detail Blog Page')

@section('content')
  {{-- Section detail blog start --}}
  <section class="pt-36 pb-20 dark:bg-dark">
    <div class="container">
      <div class="w-full px-4">
        <img src="https://source.unsplash.com/1024x600?food" alt="food"  class="w-full">
        <div class="flex flex-wrap items-center py-4 lg:hidden">
          <p class="text-xs text-slate-300 mr-2 dark:text-white">Tags : </p>
          <span class="block py-1 px-3 mx-1 my-1 bg-slate-300 text-slate-500 text-xs dark:bg-white dark:text-dark">Inovation</span>
          <span class="block py-1 px-3 mx-1 my-1 bg-slate-300 text-slate-500 text-xs dark:bg-white dark:text-dark">Popular</span>
          <span class="block py-1 px-3 mx-1 my-1 bg-slate-300 text-slate-500 text-xs dark:bg-white dark:text-dark">Covid-19</span>
          <span class="block py-1 px-3 mx-1 my-1 bg-slate-300 text-slate-500 text-xs dark:bg-white dark:text-dark">Health</span>
        </div>
        <div class="w-full py-8">
          <div class="flex items-center mb-5">
            <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full lg:h-12 lg:w-12 h-7 w-7">
            <h3 class="text-base lg:text-2xl font-semibold text-dark hover:text-primary truncate ml-2 lg:ml-5 dark:text-white">Muhamad Haidar Ijlal</h3>
          </div>
          <div class="w-full mb-10">
            <p class="text-lg lg:text-4xl font-bold dark:text-white">Judul Judul Judul Judul Judul Judul Judul Judul Judul Judul Judul Judul Judul Judul Judul Judul </p>
          </div>
          <div class="flex w-full mb-10">
            <p class="text-xs text-slate-300 mr-5">Business</p>
            <p class="text-xs text-slate-300">23 April 2022</p>
          </div>
          <p class="mb-5 dark:text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa amet nam aut sed dolore totam rerum ad eius? Architecto iure, odit pariatur et autem tenetur dicta earum culpa natus ab incidunt nihil odio expedita itaque fuga perspiciatis rerum velit asperiores quo sint mollitia quia officiis veniam. Accusantium nulla, repellendus ea impedit nostrum quod beatae aperiam quia natus eveniet libero, quis odio alias amet corporis a ut corrupti quibusdam accusamus qui. Laudantium nulla alias fugiat porro ratione ex pariatur blanditiis, sequi eum corporis repellendus nihil ullam, quibusdam maiores consequuntur labore quam beatae, voluptas dolores. Nihil dolor dolorum quo sed nam inventore facere, laudantium odio! Corporis explicabo, quae aliquid ad fugit officia sapiente similique. Vel, perspiciatis at a fugit quos doloremque dolorum perferendis in. Eum consequuntur nam sequi facilis dolores dolor similique, laboriosam at id accusantium deleniti consectetur ipsum odit et ipsa porro, saepe provident, accusamus doloremque cumque officiis odio.</p>
          <p class="mb-5 dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid sequi voluptate, quia quisquam, eum iste inventore reiciendis vel obcaecati illum molestias veniam atque sed consectetur quo eligendi. Excepturi facilis quis asperiores dolorem labore consequatur necessitatibus fugiat et placeat itaque ab repellat ratione accusamus beatae fuga, sit corporis nihil ullam temporibus, consequuntur sed nemo. Vero, a ratione cumque tenetur ducimus ut numquam laudantium. Tempore inventore repudiandae dignissimos id, dolorum esse aspernatur accusamus iure ipsam doloremque harum saepe veritatis impedit earum libero perspiciatis vero? Incidunt esse quos maiores amet accusamus, voluptatibus illo harum! Voluptates praesentium maiores quia tempore assumenda, earum perspiciatis dolores.</p>
          <p class="mb-5 dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate dicta, assumenda ducimus earum quam ea excepturi tempora iure possimus quisquam commodi et inventore sunt voluptates cumque iste, nemo architecto dignissimos, sit nesciunt impedit. Laboriosam id recusandae voluptatibus odio, dolorem, similique quaerat dolores exercitationem dolore libero esse ipsa necessitatibus illum.</p>
        </div>
        <div class="flex items-center">
          <div class="w-1/2 flex">
            <div id="like" class="flex items-center mx-1">
              <span class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
              </span>
              <p class="px-2 text-xs text-slate-300 dark:text-white">1000K</p>
            </div>
            <div id="comment" class="flex items-center mx-1">
              <span class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg>
              </span>
              <p class="px-2 text-xs text-slate-300 dark:text-white">512</p>
            </div>
            <div id="share" class="flex items-center mx-1">
              <span class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                </svg>
              </span>
              <p class="px-2 text-xs text-slate-300 dark:text-white">100+</p>
            </div>
          </div>
          <div class="w-1/2  hidden lg:block">
            <div class="flex flex-wrap items-center py-4">
              <p class="text-xs text-slate-300 mr-2">Tags : </p>
              <span class="block py-1 px-3 mx-1 my-1 bg-slate-300 text-slate-500 text-xs dark:text-dark dark:bg-white">Inovation</span>
              <span class="block py-1 px-3 mx-1 my-1 bg-slate-300 text-slate-500 text-xs dark:text-dark dark:bg-white">Popular</span>
              <span class="block py-1 px-3 mx-1 my-1 bg-slate-300 text-slate-500 text-xs dark:text-dark dark:bg-white">Covid-19</span>
              <span class="block py-1 px-3 mx-1 my-1 bg-slate-300 text-slate-500 text-xs dark:text-dark dark:bg-white">Health</span>
            </div>        
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-12 pb-6 dark:bg-slate-700">
    <div class="container">
      <div class="w-full px-4">
        <div class="mb-20">
          <h1 class="text-4xl text-dark font-bold dark:text-white dark:text-white">Recomended for you</h1>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-1/3 lg:px-1 mb-2">
            <div class="bg-white mb-10 overflow-hidden dark:bg-slate-700">
              <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
              <div class="py-6">
                <div class="flex mb-5">
                  <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
                  <h3 class="text-base font-semibold text-dark hover:text-primary truncate ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
                </div>
                <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
                <p class="mb-10 h-24 text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
                <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
              </div>
            </div>
          </div>          
          <div class="w-full lg:w-1/3 lg:px-1 mb-2">
            <div class="bg-white mb-10 overflow-hidden dark:bg-slate-700">
              <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
              <div class="py-6">
                <div class="flex mb-5">
                  <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
                  <h3 class="text-base font-semibold text-dark hover:text-primary truncate ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
                </div>
                <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
                <p class="mb-10 h-24 text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
                <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
              </div>
            </div>
          </div>          
          <div class="w-full lg:w-1/3 lg:px-1 mb-2">
            <div class="bg-white mb-10 overflow-hidden dark:bg-slate-700">
              <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
              <div class="py-6">
                <div class="flex mb-5">
                  <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
                  <h3 class="text-base font-semibold text-dark hover:text-primary truncate ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
                </div>
                <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
                <p class="mb-10 h-24 text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
                <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
              </div>
            </div>
          </div>          
          <div class="w-full lg:w-1/3 lg:px-1 mb-2">
            <div class="bg-white mb-10 overflow-hidden dark:bg-slate-700">
              <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
              <div class="py-6">
                <div class="flex mb-5">
                  <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
                  <h3 class="text-base font-semibold text-dark hover:text-primary truncate ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
                </div>
                <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
                <p class="mb-10 h-24 text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
                <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
              </div>
            </div>
          </div>          
          <div class="w-full lg:w-1/3 lg:px-1 mb-2">
            <div class="bg-white mb-10 overflow-hidden dark:bg-slate-700">
              <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
              <div class="py-6">
                <div class="flex mb-5">
                  <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
                  <h3 class="text-base font-semibold text-dark hover:text-primary truncate ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
                </div>
                <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
                <p class="mb-10 h-24 text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
                <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
              </div>
            </div>
          </div>          
          <div class="w-full lg:w-1/3 lg:px-1 mb-2">
            <div class="bg-white mb-10 overflow-hidden dark:bg-slate-700">
              <img src="https://source.unsplash.com/300x300?programming" alt="#" class="w-full h-52">
              <div class="py-6">
                <div class="flex mb-5">
                  <img src="https://source.unsplash.com/300x300?person" alt="person" class="rounded-full h-7 w-7">
                  <h3 class="text-base font-semibold text-dark hover:text-primary truncate ml-2 dark:text-white">Muhamad Haidar Ijlal</h3>
                </div>
                <h1 class="text-2xl font-bold text-dark mb-2 dark:text-white">Title</h1>
                <p class="mb-10 h-24 text-ellipsis overflow-hidden dark:text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, quae quam officiis veniam blanditiis esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laboriosam eos dolore molestiae, dolorem libero, rerum odio aut sequi excepturi, cum omnis harum repellendus labore.</p>
                <p class="text-xs text-slate-300">2 March - Food  & Beverages</p>            
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </section>
  {{-- Section detail blog end --}}
@endsection