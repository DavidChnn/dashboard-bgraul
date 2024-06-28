<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
  </head>
  <body class="bg-[#F5FAFF]">
    {{-- SIDEBAR --}}
    <x-sidebar id="mySidebar" class=""></x-sidebar>
    {{-- SIDEBAR --}}
    {{-- MAIN --}}
    <main class="ml-[280px] transition duration-300 ease-in-out">
        {{-- NAVBAR --}}
        <x-navbar />
        {{-- NAVBAR --}}
        <h1 class="text-xl text-xl mx-10 my-10">
          MasterData/PIC
        </h1>
        <div class="bg-white mx-10 pb-10">
          <div class="flex justify-between items-center border-b-2 p-4">
            <div class="flex">
              <svg width="40" height="35" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.936157" width="4.92021" height="0.8" rx="0.3" fill="#595959"/>
                <rect x="0.936157" y="1.20001" width="6.8883" height="0.8" rx="0.3" fill="#595959"/>
                <rect x="0.936157" y="3.5" width="6.8883" height="0.8" rx="0.3" fill="#595959"/>
                <rect x="0.936157" y="2.39999" width="5.90426" height="0.8" rx="0.3" fill="#595959"/>
                </svg>
              <p class="text-2xl ml-5">Aisin Indonesia</p>
            </div>
            <div>
              <img src="/image/arrow2.png" alt="arrow2" class="rotate-90 w-6">
            </div>
          </div>
          <div class="flex justify-between items-center px-2">
              <div class="flex px-6 py-4">
                  <p class="font-semibold">PIC Asset >></p>
              </div>
          </div>
          <div class="px-2 w-full">
            <table class="table border-collapse text-sm w-full">
                <thead class="text-center">
                    <tr class="border-2">
                        <th class="border-2">No</th>
                        <th class="border-2">ID Number</th>
                        <th class="border-2">Name</th>
                        <th class="border-2">Department</th>
                        <th class="border-2">Email</th>
                        <th class="border-2">Role</th>
                        <th class="border-2">Edit</th>
                        <th class="border-2">Delete</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($users as $user)
                    <tr>
                        <td class="border-2">{{ $loop->iteration }}</td>
                        <td class="border-2">{{ $user->id }}</td>
                        <td class="border-2">{{ $user->name }}</td>
                        <td class="border-2">{{ $user->dept }}</td>
                        <td class="border-2">{{ $user->email }}</td>
                        <td class="border-2">{{ $user->role }}</td>
                        <td class="border-2">
                            <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>
                        </td>
                        <td class="border-2">
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="p-2 bg-[#79C4FB] rounded-lg text-white m-4" onclick="window.location.href='{{ route('users.create') }}'">
                  Add PIC
              </button>
          </div>
        </div>
    </main>
    {{-- MAIN --}}
  </body>
</html>
