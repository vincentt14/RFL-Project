@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="w-full self-center px-4">
        <h1 class="text-base font-medium text-primary md:text-xl">
          <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">R<span class="text-primary">ecycling</span>
            F<span class="text-primary">or</span> L<span class="text-primary">ife</span>.
          </p>
        </h1>
        <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Recycle Location <span
            class="font-bold">Available</span>.
        </h2>
      </div>
      <form action="/" method="post">
        <div class="mb-5 w-full px-4 md:w-2/5">
          <input type="text" id="username" name="username"
            class="w-full rounded-3xl border-2 border-secondary bg-white p-3 focus:outline-none focus:ring focus:ring-secondary"
            placeholder="Search Location" autofocus />
        </div>
      </form>
      <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        @foreach ($dummys as $dummy)
          <div class="mb-12 p-4 mx-2 md:w-1/4 bg-stone-900">
            <h3 class="font-semibold text-white text-xl mt-5 mb-3">
              {{ $dummy['name'] }}
              <p class="text-primary">{{ $dummy['location'] }}</p>
            </h3>
            <p class="text-primary">{{ $dummy['description'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
