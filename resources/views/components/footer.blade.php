<footer class="mt-16 border-t-2 border-black bg-gradient-to-r from-[#54b756] to-[#45b25a] pt-24 pb-5">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="mb-12 w-full flex-col place-items-center font-medium md:flex md:w-1/3">
        <ul>
          <h2 class="text-4xl font-bold text-black">RFL.</h2>
          <h3 class="mb-2 text-2xl font-bold text-black">Team
          </h3>
          <p class="text-xl text-white">Wan Jun Hao</p>
          <p class="text-xl text-white">Lew Wee Seng</p>
          <p class="text-xl text-white">Ethan</p>
          <p class="text-xl text-white">Asim</p>
        </ul>
      </div>
      <div class="mb-12 w-full flex-col place-items-center md:flex md:w-1/3">
        <ul class="text-black">
          <h3 class="mb-5 text-xl font-bold text-white">Shortcuts</h3>
          <li>
            <a href="/" class="mb-2 inline-block text-xl hover:text-white">
              Home
            </a>
          </li>
          <li>
            <a href="/recyclers" class="mb-2 inline-block text-xl hover:text-white">
              Recycle Locations
            </a>
          </li>
          @if (auth()->user() !== null && auth()->user()->is_admin == 1)
            <li>
              <a href="/dashboard"class="mb-2 inline-block text-xl hover:text-white">
                Dashboard
              </a>
            </li>
          @endif
        </ul>
      </div>
      <div class="mb-12 w-full flex-col place-items-center md:flex md:w-1/3">
        <ul class="text-black">
          <h3 class="mb-5 text-xl font-bold text-white">Join RFL</h3>
          @if (auth()->user() !== null)
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="mb-2 inline-block text-xl hover:text-white">
                  Logout
                </button>
              </form>
            </li>
          @else
            <li>
              <a href="/login"class="mb-2 inline-block text-xl hover:text-white">
                Login
              </a>
            </li>
          @endif
        </ul>
      </div>
    </div>

    <div class="w-full">
      <p class="text-center text-sm font-medium text-white">Copyright © 2023</p>
    </div>
  </div>
</footer>
