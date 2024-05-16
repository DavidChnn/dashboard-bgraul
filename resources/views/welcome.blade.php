<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
  </head>
  <body>
    {{-- SIDEBAR --}}
    <x-sidebar id="mySidebar" class=""></x-sidebar>
    {{-- SIDEBAR --}}
    {{-- MAIN --}}
    <main class="ml-72 transition duration-300 ease-in-out">
        <nav class="flex justify-between">
            <button onclick="toggleSidebar()" class="">
                <svg  width="30" height="29" viewBox="0 0 5 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="5" height="0.8" rx="0.4" fill="#595959"/>
                  <rect y="1.5" width="5" height="0.8" rx="0.4" fill="#595959"/>
                  <rect y="3" width="5" height="0.8" rx="0.4" fill="#595959"/>
                  </svg>
              </button>
              <div class="flex">
                <img class="w-7 h-fit mr-2" src="/image/setting.png" alt="setting">
                <button class="flex justify-end items-center">
                  <p class="mr-1">Me</p>
                  <img class="w-2 h-fit mr-2 translate-y-1" src="/image/up-arrow.png" alt="up-arrow">
                </button>
              </div>
        </nav>
    </main>
    {{-- MAIN --}}
    {{-- SCRIPT --}}
    <script>
        const reportLink = document.getElementById('reportLink');
        const reportOptions = document.getElementById('reportOptions');
        const reportArrow = document.getElementById('reportArrow');

        reportLink.addEventListener('click', function(event) {
          event.preventDefault(); // Prevent default anchor tag behavior
          reportOptions.style.display = reportOptions.style.display === 'none' ? 'block' : 'none';
          reportArrow.classList.toggle('rotate-[-90deg]');
        });
      </script>
    {{-- SCRIPT --}}
  </body>
</html>