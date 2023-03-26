<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')

  <title>RFL</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
  @if(session()->has('success'))
    <div
        class="sticky w-[300px] min-h-[50px] flex justify-between gap-x-4 bg-green-500 text-white left-1/2 -translate-x-1/2 top-20 px-5 pt-3.5 pb-4 z-20">
      <p>{{ session('success') }}</p>
      <button
          class="h-fit hover:text-white/75"
          onclick="this.parentNode.parentNode.removeChild(this.parentNode)">
          X
      </button>
    </div>
  @elseif(session()->has('error'))
    <div
        class="sticky w-[300px] min-h-[50px] flex justify-between gap-x-4 bg-red-500 text-white left-1/2 -translate-x-1/2 top-20 px-5 pt-3.5 pb-4 z-20">
      <p>{{ session('error') }}</p>
      <button
          class="h-fit hover:text-white/75"
          onclick="this.parentNode.parentNode.removeChild(this.parentNode)">
          X
      </button>
    </div>
  @endif
  @include('components.navbar')

  <main>
    @yield('content')
  </main>

  @include('components.footer')
  <script src="js/script.js"></script>
</body>

</html>
