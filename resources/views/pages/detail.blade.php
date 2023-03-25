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
        <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Detail of <span
            class="font-bold text-secondary">{{ $dummy['name'] }}</span> Recycler
        </h2>

        <button
          class="mb-5 mr-5 rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 px-8 font-bold text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black">
          <a href="/dashboard">Back</a>
        </button>
        <button
          class="mb-5 rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 px-8 font-bold text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black">
          <a href="/editRecycler">Edit Recycler</a>
        </button>

        <div
          class="container rounded-xl bg-stone-900 p-10 lg:grid lg:grid-flow-col lg:grid-rows-2 lg:items-center lg:gap-5">
          <div class="row-span-3 mb-8 lg:mb-0">
            <img src="https://placehold.jp/300x200.png" alt="{{ $dummy['name'] }}"
              class="rounded-xl border-2 border-primary" />
          </div>
          <div class="col-span-1 mb-8 lg:mb-0">
            <p class="my-2 text-xl text-primary">Recycler name : </p>
            <p class="mx-5 text-xl font-light text-slate-200">{{ $dummy['name'] }}</p>
          </div>
          <div class="col-span-1 mb-8 lg:mb-0">
            <p class="my-2 text-xl text-primary">Location : </p>
            <p class="mx-5 text-xl font-light text-slate-200">{{ $dummy['location'] }}</p>
          </div>
          <div class="col-span-1 mb-8 lg:mb-0">
            <p class="my-2 text-xl text-primary">Description : </p>
            <p class="mx-5 text-justify text-xl font-light text-slate-200">{{ $dummy['description'] }}</p>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
