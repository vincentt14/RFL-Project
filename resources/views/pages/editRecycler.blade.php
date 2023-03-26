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
          <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Edit <span class="font-bold">Recycler</span>.
          </h2>
        </div>
        <button
          class="mb-5 mr-5 rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 px-8 font-bold text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black lg:mb-2">
          <a href="/dashboard">Back</a>
        </button>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full self-center pr-4 lg:w-1/2">
          <form action="/recyclers/{{ $recycler['id'] }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-5 w-full px-4">
              <label for="name" class="text-base font-bold text-primary">
                Recycler Name
              </label>
              <input type="text" id="name" name="name"
                class="w-full rounded-xl border-2 border-secondary bg-white p-3 focus:outline-none focus:ring focus:ring-secondary"
                autofocus value="{{ @old('name', $recycler->name) }}" />
            </div>
            <div class="mb-5 w-full px-4">
              <p class="mb-3 text-base font-bold text-primary">
                Upload Image
              </p>
              <input type="hidden" name="oldImage" value="{{ $recycler->image }}">
              <label
                class="mr-5 rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 px-8 font-bold text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black lg:mb-2">
                Choose Image
                <input type="file" id="image" name="image" class="hidden" onchange="previewImage()" />
              </label>
              @if ($recycler->image)
              <img src="{{ asset('storage/' . $recycler->image ) }}" class="mt-5 object-contain w-[350px] max-h-[200px] img-preview img-fluid rounded-xl d-block">
              @else
              <img class="mt-5 w-[350px] img-preview img-fluid rounded-xl">
              @endif
            </div>
            <div class="mb-5 w-full px-4">
              <label for="email" class="text-base font-bold text-primary">
                Location
              </label>
              <input type="text" id="location" name="location"
                class="w-full rounded-xl border-2 border-secondary bg-white p-3 focus:outline-none focus:ring focus:ring-secondary"
                value="{{ @old('location', $recycler->location) }}" />
            </div>
            <div class="mb-5 w-full px-4">
              <label for="description" class="text-base font-bold text-primary">
                Description
              </label>
              <textarea id="description" name="description"
                class="w-full rounded-xl border-2 border-secondary bg-white p-3 focus:outline-none focus:ring focus:ring-secondary">{{ @old('description', $recycler->description) }}</textarea>
            </div>
            <div class="w-full px-4">
              <button type="submit"
                class="mt-3 w-full rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-3 text-white duration-300 ease-out hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black">
                Edit Recycler
              </button>
            </div>
          </form>

        </div>
        <div
          class="mt-10 hidden w-full self-center rounded-2xl border-2 border-secondary bg-white px-4 md:block lg:mt-0 lg:w-1/2">
          {{-- Lottie --}}
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_bvaweomu.json" background="transparent"
            speed="1" style="width: 400px; height: 400px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
      </div>
    </div>
  </section>

  <script>
    const previewImage = () => {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection
