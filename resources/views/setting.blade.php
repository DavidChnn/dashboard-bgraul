<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Settings</title>
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
        <h1 class="text-xl mx-10 my-10">Settings</h1>
        <div>
            <div class="bg-white mx-10">
                <div class="flex justify-between items-center border-b-2 p-4">
                    <div class="flex">
                        <svg width="40" height="35" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.936157" width="4.92021" height="0.8" rx="0.3" fill="#595959" />
                            <rect x="0.936157" y="1.20001" width="6.8883" height="0.8" rx="0.3" fill="#595959" />
                            <rect x="0.936157" y="3.5" width="6.8883" height="0.8" rx="0.3" fill="#595959" />
                            <rect x="0.936157" y="2.39999" width="5.90426" height="0.8" rx="0.3" fill="#595959" />
                        </svg>
                        <p class="text-2xl ml-5">Aisin Indonesia</p>
                    </div>
                    <div>
                        <img src="/image/arrow2.png" alt="arrow2" class="rotate-90 w-6">
                    </div>
                </div>
                <form class="p-6 flex flex-col w-fit gap-y-5" method="post" action="/register">
                    @csrf
                    <p class="text-xl">Add Account</p>
                    <div>
                        <p>Name</p>
                        <input type="text" class="border-2 rounded w-full" name="name" id="name">
                    </div>
                    <div>
                        <p>Password</p>
                        <input type="text" class="border-2 rounded w-full" name="password" id="password">
                    </div>
                    <div>
                        <p>Email</p>
                        <input type="text" class="border-2 rounded w-full" name="email" id="email">
                    </div>
                    <div>
                        <p>Department</p>
                        <div class="relative">
                            <button id="dropdownButton1" type="button" onclick="toggleDropdown('dropdownButton1', 'myDropdown1')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-full rounded">
                                <span id="selectedItemText1" class="h-6">Select Department</span>
                                <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                            </button>
                            <div id="myDropdown1" class="absolute hidden rounded shadow-md bg-white z-10 mt-1 w-full">
                                <button type="button" onclick="selectItem('Engineering Body', 'selectedItemText1', 'myDropdown1', 'dept')" class="flex justify-between items-center w-full px-4 py-2 text-left hover:bg-gray-100">
                                    Engineering Body
                                </button>
                                <button type="button" onclick="selectItem('Engineering', 'selectedItemText1', 'myDropdown1', 'dept')" class="flex justify-between items-center w-full px-4 py-2 text-left hover:bg-gray-100">
                                    Engineering
                                </button>
                            </div>
                        </div>
                        <input type="hidden" id="dept" name="dept">
                    </div>
                    <div class="flex justify-end py-10 px-6">
                        <button type="submit" class="flex text-white justify-center items-center w-fit bg-[#C80813] px-2 py-1 rounded">
                            <img src="/image/refresh.png" alt="refresh" class="w-5">
                            <p class="font-bold">Submit</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    {{-- MAIN --}}
    <script>
        function toggleNavDropdown() {
            const dropdown = document.getElementById('dropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('button') && !event.target.closest('.dropdown-content') && !event.target.closest('.relative')) {
                const dropdowns = document.getElementsByClassName("dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('hidden')) {
                        openDropdown.classList.add('hidden');
                    }
                }
            }
        }

        function toggleDropdown(buttonId, dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle("hidden");
        }

        function selectItem(item, selectedItemTextId, dropdownId, inputId) {
        event.preventDefault();
        document.getElementById(selectedItemTextId).innerText = item;
        document.getElementById(inputId).value = item; 
        toggleDropdown(null, dropdownId);
      }
    </script>
    </body>
</html>
