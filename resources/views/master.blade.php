<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ ENV('APP_NAME') }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
</head>
<body>
  {{-- Navbar Section Start --}}
  @include('partials/navbar')
  {{-- Navbar Section End --}}
  
  @yield('content')

  {{-- Footer Section Start --}}
  @include('partials/footer')
  {{-- Footer Section End --}}

  {{-- myscritp --}}
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>