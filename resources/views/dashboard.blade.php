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
        <h1 class="text-xl mx-10 my-10">
          Home Dashboard
        </h1>
        <div>
            <div class="bg-white mx-10">
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
              <div class="flex justify-between p-6">
                <div class="bg-[#FFEFEF] flex justify-center items-center py-2 px-6 border-4">
                  <img src="/image/gear.png" alt="gear" class="w-20">
                  <div class="ml-6">
                    <p>Total Asset</p>
                    <p>1032</p>
                  </div>
                </div>
                <div class="bg-[#FFBEBE] flex justify-center items-center py-2 px-6 border-4">
                  <img src="/image/personmarket.png" alt="personmarket" class="w-20">
                  <div class="ml-6">
                    <p>Outstanding CIP</p>
                    <p>214</p>
                  </div>
                </div>
                <div class="bg-[#FFEFEF] flex justify-center items-center py-2 px-6 border-4">
                  <img src="/image/moneyhand.png" alt="moneyhand" class="w-20">
                  <div class="ml-6">
                    <p>Total Valuation</p>
                    <p>Rp 27.5 Miliar</p>
                  </div>
                </div>
              </div>
              <div class="flex justify-end py-10 px-6">
                <div class="flex text-white justify-center items-center w-fit bg-[#C80813] px-2 py-1 rounded">
                  <img src="/image/refresh.png" alt="refresh" class="w-5">
                  <p class="font-bold">Refresh</p>
                </div>
              </div>
            </div>
        </div>
    </main>
    {{-- MAIN --}}
    <script>
      function toggleDropdown() {
               const dropdown = document.getElementById('dropdown');
               dropdown.classList.toggle('hidden');
           }

           // Close the dropdown if the user clicks outside of it
           window.onclick = function(event) {
               if (!event.target.matches('button') && !event.target.matches('ul') && !event.target.matches('li')) {
                   const dropdowns = document.getElementsByClassName("absolute");
                   for (let i = 0; i < dropdowns.length; i++) {
                       const openDropdown = dropdowns[i];
                       if (!openDropdown.classList.contains('hidden')) {
                           openDropdown.classList.add('hidden');
                       }
                   }
               }
           }
    </script>
  </body>
</html>