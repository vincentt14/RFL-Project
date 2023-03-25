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
      <div class="mt-10 grid w-full grid-cols-1 flex-wrap gap-5 px-4 md:grid-cols-2 lg:grid-cols-4">
        @foreach ($dummys as $dummy)
          <div class="mb-5 rounded-xl bg-gradient-to-b from-[#89c84d] to-[#45b25a] p-4">
            <div
              class="cursor-pointer overflow-hidden rounded-xl border-2 border-primary shadow-lg hover:border-secondary">
              <img src="https://placehold.jp/300x200.png" alt="{{ $dummy['name'] }}" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-white">
              {{ $dummy['name'] }}
            </h3>
            <p class="my-3 text-justify text-primary">Location : <span class="text-black">{{ $dummy['location'] }}</span>
            </p>
            <p class="text-justify font-light text-black">{{ $dummy['description'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
