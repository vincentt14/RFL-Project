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
      <form action="/recyclers" method="get">
        <div class="mb-5 w-full px-4 md:w-2/5">
          <div class="flex">
            <input type="text" id="search" name="search"
              class="w-full rounded-l-3xl border-2 border-secondary bg-white p-3 focus:outline-none focus:ring focus:ring-secondary"
              placeholder="Search by Name" autofocus />
            <button type="submit"
              class="rounded-r-3xl border-2 border-secondary bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 px-8 font-bold text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black">
              Search
            </button>
          </div>
        </div>
      </form>
      <div class="mt-10 grid w-full grid-cols-1 flex-wrap gap-5 px-4 md:grid-cols-2 lg:grid-cols-4">
        @if ($recyclers->count())
          @foreach ($recyclers as $recycler)
            <div class="mb-5 rounded-xl bg-gradient-to-b from-[#54b756] to-[#45b25a] p-4">
              <div class="overflow-hidden rounded-xl border-2 border-primary shadow-lg">
                <img src="https://placehold.jp/300x200.png" alt="{{ $recycler['name'] }}" width="100%" />
              </div>
              <h3 class="mt-5 mb-3 text-xl font-semibold text-white">
                {{ $recycler['name'] }}
              </h3>
              <p class="my-3 text-justify text-primary">Location : <span
                  class="text-black">{{ $recycler['location'] }}</span>
              </p>
              <p class="text-justify font-light text-black">{{ $recycler['description'] }}</p>
            </div>
          @endforeach
        @else
          <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Recycler <span
              class="font-bold">Not Found</span>.
          </h2>
        @endif
      </div>
    </div>
  </section>
@endsection
