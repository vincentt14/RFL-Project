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
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dummys as $dummy)
          <tr class="px-6 py-3 text-center">
            <td class="px-6 py-2">{{ $loop->iteration }}</td>
            <td class="px-6 py-2">{{ $dummy['name'] }}</td>
            <td class="text-justify px-6 py-2">{{ $dummy['location'] }}</td>
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
</div>
