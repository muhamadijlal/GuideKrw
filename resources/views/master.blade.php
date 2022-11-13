<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ ENV('APP_NAME') }}</title>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
  <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark')
    } else {
      document.documentElement.classList.remove('dark')
    }

  </script>
</head>
<body>
  {{-- Navbar Section Start --}}
  @include('partials/navbar')
  {{-- Navbar Section End --}}
  
  @yield('content')

  {{-- Footer Section Start --}}
  @include('partials/footer')
  {{-- Footer Section End --}}

  {{-- myscript --}}
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>