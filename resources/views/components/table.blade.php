<div class="w-full self-center px-4">
  <div class="container rounded-xl bg-stone-900 p-10">
    <table class="w-full rounded-xl text-white">
      <thead class="text-secondary">
        <tr>
          <th class="px-6 py-3">
            No
          </th>
          <th class="px-6 py-3">
            Recycler name
          </th>
          <th class="px-6 py-3">
            Location
          </th>
          <th class="px-6 py-3">
            <span class="sr-only">Action</span>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dummys as $dummy)
          <tr class="px-6 py-3">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dummy['name'] }}</td>
            <td>{{ $dummy['location'] }}</td>
            <td>
              <a href="/dashboard/posts/{{ $dummy['id'] }}">
                <img src="../icons/eye.svg" alt="view" height="24" width="24">
              </a>
              <a href="/dashboard/posts/{{ $dummy['id'] }}/edit">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                  </path>
                </svg> --}}
              </a>
              <form action="/dashboard/posts/{{ $dummy['id'] }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button onClick="return confirm('Are you sure?')">
                  {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                  </svg> --}}
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
