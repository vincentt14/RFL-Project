<div class="w-full self-center px-4">
  <div class="container mb-10 rounded-xl bg-stone-900 px-10 py-5">
    <h1 class="mt-2 mb-6 text-center text-lg font-light text-primary lg:text-2xl">Recycler Location Table</h1>
    <hr class="my-2 border-stone-500">
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
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dummys as $dummy)
          <tr class="px-6 py-3 text-center">
            <td class="px-6 py-2">{{ $loop->iteration }}</td>
            <td class="px-6 py-2">{{ $dummy['name'] }}</td>
            <td class="px-6 py-2 text-justify">{{ $dummy['location'] }}</td>
            <td class="flex px-6 py-2">
              <a class="mx-2 text-blue-300" href="/dummy/{{ $dummy['id'] }}">
                View
              </a>
              <a class="mx-2 text-yellow-300" href="/dummy/{{ $dummy['id'] }}/edit">
                Edit
              </a>
              <form class="mx-2 text-red-400" action="/dummy/{{ $dummy['id'] }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button onClick="return confirm('Are you sure?')">
                  Delete
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="container rounded-xl bg-stone-900 px-10 py-5">
    <h1 class="mt-2 mb-6 text-center text-lg font-light text-primary lg:text-2xl">Volunteer Table</h1>
    <hr class="my-2 border-stone-500">
    <table class="w-full rounded-xl text-white">
      <thead class="text-secondary">
        <tr>
          <th class="px-6 py-3">
            No
          </th>
          <th class="px-6 py-3">
            Name
          </th>
          <th class="px-6 py-3">
            Email
          </th>
          <th class="px-6 py-3">
            Date Validate
          </th>
          <th class="px-6 py-3">
            Phone Number
          </th>
          <th class="px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($volunteers as $volunteer)
          <tr class="px-6 py-3 text-center">
            <td class="px-6 py-2">{{ $loop->iteration }}</td>
            <td class="px-6 py-2">{{ $volunteer['name'] }}</td>
            <td class="px-6 py-2">{{ $volunteer['email'] }}</td>
            <td class="px-6 py-2">{{ $volunteer['date'] }}</td>
            <td class="px-6 py-2">{{ $volunteer['phoneNum'] }}</td>
            <td class="flex px-6 py-2">
              <a class="mx-2 text-yellow-300" href="/dummy/{{ $dummy['id'] }}/edit">
                Edit
              </a>
              <form class="mx-2 text-red-400" action="/dummy/{{ $dummy['id'] }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button onClick="return confirm('Are you sure?')">
                  Delete
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>