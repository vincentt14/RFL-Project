@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto mb-6 max-w-xl text-center">
          <h1 class="text-3xl font-bold text-primary">Login</h1>
        </div>
      </div>
      <div class="mx-auto w-4/5 rounded-xl bg-stone-900 p-10 md:w-2/5">
        <form action="/login" method="post">
          @csrf
          <div class="mb-5 w-full px-4">
            <label for="username" class="text-base font-bold text-primary">
              Username
            </label>
            <input type="text" id="username" name="username"
              class="@error('username') border-red-500 @else border-secondary @enderror w-full rounded-3xl border-2 bg-white p-3 focus:outline-none focus:ring focus:ring-secondary"
              value="{{ @old('username') }}" />
            @error('username')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-8 w-full px-4">
            <label for="password" class="text-base font-bold text-primary">
              Password
            </label>
            <input type="password" id="password" name="password"
              class="@error('password') border-red-500 @else border-secondary @enderror w-full rounded-3xl border-2 bg-white p-3 focus:outline-none focus:ring focus:ring-secondary" />
            @error('password')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div class="w-full px-4">
            <button type="submit"
              class="mt-3 w-full rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black">
              Login
            </button>
          </div>
        </form>
        <div class="mt-4 w-full px-4 text-white">
          <p>Don't Have an Account? <span class="ml-1 font-bold text-secondary hover:text-white"><a
                href="/register">Register</a></span> </p>
        </div>
      </div>
    </div>
  </section>
@endsection
