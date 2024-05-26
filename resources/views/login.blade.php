<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F5FAFF] flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-10">
        <div class="flex justify-center mb-6">
            <img src="/image/setting.png" alt="Logo" class="w-20">
        </div>
        <h1 class="text-2xl text-center mb-6">Login</h1>
        <form class="flex flex-col gap-y-5" action="/login" method="post">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" value="{{Session::get('name') }}" id="email" name="email" required class="mt-1 border-2 rounded w-full p-2">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 border-2 rounded w-full p-2">
            </div>
            {{-- <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>
                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                </div>
            </div> --}}
            <div>
                <button type="submit" class="w-full flex justify-center items-center bg-[#C80813] text-white py-2 px-4 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>
</html>
