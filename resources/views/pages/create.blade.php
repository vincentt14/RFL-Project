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
        <div class="flex">
          <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Create <span class="font-bold">Recycler</span>.
          </h2>
        </div>
        <button
          class="mb-5 mr-5 rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 px-8 font-bold text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black lg:mb-2">
          <a href="/dashboard">Back</a>
        </button>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full self-center pr-4 lg:w-1/2">
          <form action="/" method="post">
            <div class="mb-5 w-full px-4">
              <label for="username" class="text-base font-bold text-primary">
                Recycler Name
              </label>
              <input type="text" id="username" name="username"
                class="w-full rounded-xl border-2 border-secondary bg-white p-3 focus:outline-none focus:ring focus:ring-secondary"
                required autofocus />
            </div>
            <div class="mb-5 w-full px-4">
              <label for="email" class="text-base font-bold text-primary">
                Location
              </label>
              <input type="text" id="email" name="email"
                class="w-full rounded-xl border-2 border-secondary bg-white p-3 focus:outline-none focus:ring focus:ring-secondary"
                required />
            </div>
            <div class="mb-5 w-full px-4">
              <label for="description" class="text-base font-bold text-primary">
                Description
              </label>
              <textarea id="description" name="description"
                class="w-full rounded-xl border-2 border-secondary bg-white p-3 focus:outline-none focus:ring focus:ring-secondary"></textarea>
            </div>
            <div class="w-full px-4">
              <button type="submit"
                class="mt-3 w-full rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black">
                Create
              </button>
            </div>
          </form>

        </div>
        <div
          class="mt-10 hidden w-full self-center rounded-2xl border-2 border-secondary bg-white px-4 md:block lg:mt-0 lg:w-1/2">
          {{-- Lottie --}}
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_Cf9s652Dhb.json" background="transparent"
            speed="1" style="width: 400px; height: 400px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
      </div>
    </div>
  </section>
@endsection
