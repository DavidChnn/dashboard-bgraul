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
        {{-- NAVBAR --}}
        <x-navbar />
        {{-- NAVBAR --}}
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