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
          Asset Layout
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
                <div>
                    <p>Assembly Line Production</p>
                    <div>
                        <button id="dropdownButton1" onclick="toggleDropdown('dropdownButton1', 'myDropdown1')" class="flex justify-between items-center px-5 border-b-2 w-64 rounded">
                            <span id="selectedItemText1" class="h-6">-- Pilih Line Production --</span>
                            <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                        </button>
                        <div id="myDropdown1" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                            @php
                                $uniqueLines = $data->unique('line');
                            @endphp
                            @foreach ($uniqueLines as $item)
                                <div onclick="selectItem('{{ $item->line }}', 'selectedItemText1', 'myDropdown1', 'selectedLine')" class="flex justify-between items-center w-64 px-4 cursor-pointer">
                                    <p>{{ $item->line }}</p>
                                </div>
                            @endforeach
                        </div>
                        <input type="hidden" id="selectedLine" name="selectedLine">
                    </div>
                </div>
            </div>
            <div class="flex justify-end py-10 px-6">
                <a href="#" id="showButtonLink" class="flex text-white justify-center items-center w-fit bg-[#1899F6] px-2 py-1 rounded">
                    <p class="font-bold">+ Show</p>
                </a>
            </div>
            </div>
        </div>
    </main>
    <script>
      function toggleDropdown(buttonId, dropdownId) {
        var dropdown = document.getElementById(dropdownId);
        dropdown.classList.toggle("hidden");
      }

      function selectItem(item, selectedItemTextId, dropdownId, inputId) {
        event.preventDefault();
        document.getElementById(selectedItemTextId).innerText = item;
        document.getElementById(inputId).value = item;
        toggleDropdown(null, dropdownId);

        // Update the show button link
        var showButtonLink = document.getElementById("showButtonLink");
        showButtonLink.href = "/assetlayout/lineproductionmap/" + item;
      }
    </script>
    {{-- MAIN --}}
  </body>
</html>