<!-- resources/views/components/navbar.blade.php -->
<nav class="px-10 flex justify-between bg-white py-10">
    <button onclick="toggleSidebar()" class="">
        <svg width="30" height="29" viewBox="0 0 5 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="5" height="0.8" rx="0.4" fill="#595959"/>
            <rect y="1.5" width="5" height="0.8" rx="0.4" fill="#595959"/>
            <rect y="3" width="5" height="0.8" rx="0.4" fill="#595959"/>
        </svg>
    </button>
    <div class="flex">
        <img class="w-7 h-fit mr-2" src="/image/setting.png" alt="setting">
        <div class="relative">
            <button class="flex items-center justify-end" onclick="toggleNavDropdown()">
                <ul class="mr-1">
                    <li>Me</li>
                </ul>
                <img class="w-2 h-fit mr-2 translate-y-1" src="/image/up-arrow.png" alt="up-arrow">
            </button>
            <div id="dropdown" class="dropdown-content hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
                <a href="/setting" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Settings</a>
                <a href="/login" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>
</nav>

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
</script>
