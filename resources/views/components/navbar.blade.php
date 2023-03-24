<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
  <div class="container">
    <div class="relative flex items-center justify-between">
      <div class="px-4">
        <a href="/" class="block py-6 text-lg font-semibold text-primary">
          RFL<span class="text-primary">.</span>
        </a>
      </div>
      <div class="flex items-center px-4">
        <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
          <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
        </button>
        <nav id="nav-menu"
          class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-stone-900 py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none">
          <ul class="block text-secondary lg:flex">
            <li class="group">
              <a href="/" class="text-dark mx-8 flex py-2 text-base group-hover:text-primary">Home</a>
            </li>
            <li class="group">
              <a href="/locations" class="text-dark mx-8 flex py-2 text-base group-hover:text-primary">Recycle
                Locations</a>
            </li>
            <li class="group">
              <a href="/dashboard" class="text-dark mx-8 flex py-2 text-base group-hover:text-primary">Dashboard</a>
            </li>
            <li class="group">
              <button
                class="ml-5 rounded-3xl bg-gradient-to-r from-[#89c84d] to-[#45b25a] py-2 px-5 text-white duration-300 ease-out font-bold hover:from-[#45b25a] hover:to-[#89c84d] hover:text-black">
                <a href="/login">Login</a>
              </button>
            </li>

          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
