@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-48 lg:pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center pl-4 pr-4 lg:w-1/2 lg:pr-10">
          <h1 class="text-base font-medium text-primary md:text-xl">
            Welcome to
            <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">R<span class="text-primary">ecycling</span>
              F<span class="text-primary">or</span> L<span class="text-primary">ife</span>.
            </p>
          </h1>
          <h2 class="mb-2 mt-2 text-justify text-lg font-light text-primary lg:text-2xl">We offer FREE pickup from your
            address and pay you upon collection. Electronic trade-in & recycling made easy & rewarding.</h2>
          <p class="mb-10 max-w-md text-slate-500">
            "Our nearby Heroes are ready to collect!"
            <span class="mt-1 block text-secondary">- Recycle.</span>
          </p>
          <button
            class="btnn mb-5 rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 px-8 font-bold text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black md:mb-16 lg:mb-20">
            <a href="/locations">Yes, I want to recycle!</a>
          </button>

        </div>
        <div class="hidden w-full self-center rounded-2xl border-2 border-secondary bg-white px-4 md:block lg:w-1/2">
          {{-- Lottie --}}
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_qaemdbel.json" speed="1"
            style="width: 400px; height: 400px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
      </div>
    </div>
  </section>
  <section id="definition" class="bg-gradient-to-r from-[#80c54e] to-[#44b25b] pb-16 pt-20 lg:pb-20">
    <div class="container">
      <div class="w-full px-4">
        <div class="m-auto max-w-xl">
          <h2 class="mt-1 mb-20 text-center text-4xl font-bold text-primary lg:text-5xl">How it Works?</h2>
        </div>
        <div class="grid grid-rows-3 gap-4 text-white md:grid-cols-3 md:grid-rows-none">
          <div class="flex w-full rounded-xl bg-black p-12">
            <i class="self-center text-slate-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6"></line>
                <line x1="8" y1="12" x2="21" y2="12"></line>
                <line x1="8" y1="18" x2="21" y2="18"></line>
                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                <line x1="3" y1="18" x2="3.01" y2="18"></line>
              </svg>
            </i>
            <div class="content ml-5">
              <h3 class="text-xl font-bold">Step 1</h3>
              <p>Search or choose Recycle place.</p>
              <p class="text-slate-500">You can search recycle places in the Recycle Location page.</p>
            </div>
          </div>
          <div class="flex w-full rounded-xl bg-black p-12">
            <i class="self-center text-slate-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file-plus">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="12" y1="18" x2="12" y2="12"></line>
                <line x1="9" y1="15" x2="15" y2="15"></line>
              </svg>
            </i>
            <div class="content ml-5">
              <h3 class="text-xl font-bold">Step 2</h3>
              <p>Create Recycle Location.</p>
              <p class="text-slate-500">You can add Recycle Location so that people can recycle at your place.</p>
            </div>
          </div>
          <div class="flex w-full rounded-xl bg-black p-12">
            <i class="self-center text-slate-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x-octagon">
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
              </svg>
            </i>
            <div class="content ml-5">
              <h3 class="text-xl font-bold">Step 3</h3>
              <p>Delete Recycle Location.</p>
              <p class="text-slate-500">You also can delete your own recycle place.</p>
            </div>
          </div>

        </div>
        <div class="m-auto mt-20 flex max-w-xl items-center justify-center">
          <button
            class="rounded-3xl bg-black py-3 px-8 font-bold text-white duration-300 ease-out hover:bg-white hover:text-black">
            <a href="/locations">Okay, Recycle Now!</a>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-28 pb-24 lg:pt-32 lg:pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="hidden w-full self-center rounded-2xl border-2 border-secondary bg-white px-4 md:block lg:w-1/2">
          {{-- Lottie --}}
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_qct0ydor.json" background="transparent"
            speed="1" style="width: 400px; height: 400px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
        <div class="w-full self-center pl-4 pr-4 lg:w-1/2 lg:pl-10">
          <h1 class="text-base font-medium text-primary md:text-xl">
            <p class="mt-10 block text-4xl font-bold text-secondary lg:text-5xl">Why <span
                class="text-primary">RFL?</span>.
            </p>
          </h1>
          <h2 class="mb-2 mt-10 text-justify text-lg font-light text-primary lg:text-xl">We recycle 100% of the e-waste we collect with a government-licensed recycling facility. Recycling your e-waste is one of the best ways to offset your GHG-emissions.</h2>
          <h2 class="mb-2 mt-4 text-justify text-lg font-light text-primary lg:text-xl">Rapid, Reliable, Rewarding - 5/5 star rating with over 5,000+ happy customers :)</h2>
          <h2 class="mb-10 mt-4 text-justify text-lg font-light text-primary lg:text-xl">Get Paid to Recycle Right Now, 100+ Heroes within 10km from you ready to collect!</h2>
          
          <button
            class="btnn rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 px-8 font-bold text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black md:mb-10">
            <a href="/locations">Recycle Now!</a>
          </button>
        </div>
      </div>
    </div>
  </section>
@endsection
