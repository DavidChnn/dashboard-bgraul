<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F5FAFF]">
    <x-sidebar id="mySidebar" class=""></x-sidebar>
    <main class="ml-[280px] transition duration-300 ease-in-out">
        <x-navbar />
        <h1 class="text-xl text-xl mx-10 my-10">
            Add User
        </h1>
        <div class="bg-white mx-10 pb-10">
            <form action="{{ route('users.store') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full border-2" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full border-2" required>
                </div>
                <div class="mb-4">
                    <label for="dept" class="block text-gray-700">Department</label>
                    <input type="text" name="dept" id="dept" class="mt-1 block w-full border-2" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" placeholder="password min 6" id="password" class="mt-1 block w-full border-2" required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700">Role</label>
                    <select name="role" id="role" class="mt-1 block w-full border-2" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add User</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
