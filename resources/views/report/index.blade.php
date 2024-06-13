<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Asset Report</title>
  </head>
  <body class="bg-[#F5FAFF]">
    {{-- SIDEBAR --}}
    <x-sidebar id="mySidebar" class=""></x-sidebar>
    {{-- SIDEBAR --}}
    {{-- MAIN --}}
    <main class="ml-[280px] transition duration-300 ease-in-out">
        <nav class=" px-10 flex justify-between bg-white py-10">
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
              <div class="mx-10 my-4">
                <p class="font-bold">Asset depreciation >></p>
              </div>
            <form action="/report/assetreport" method="post">
                @csrf
              <div class="flex justify-between mx-10 mt-10">
                    @php
                        $months = [
                            'All', 'January', 'February', 'March', 'April', 'May', 'June', 
                            'July', 'August', 'September', 'October', 'November', 'December'
                        ];
                    @endphp
                    <div>
                        <p>Month</p>
                        <div>
                            <button type="button" id="dropdownButton2" onclick="toggleDropdown('dropdownButton2', 'myDropdown2')" class="flex justify-between items-center px-5 border-b-2 w-64 rounded">
                                <span id="selectedItemText2" class="h-6">-- Pilih bulan --</span>
                                <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                            </button>
                            <div id="myDropdown2" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                                @foreach ($months as $month)
                                    <div href="#" onclick="selectItem('{{ $month }}', 'selectedItemText2', 'myDropdown2', 'monthInput')" class="flex justify-between items-center w-64 px-4">
                                        <p>{{ $month }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <input type="hidden" id="monthInput" name="monthInput">
                    </div>
                    <div>
                        <p>Year</p>
                        <div>
                            <button type="button" id="dropdownButton3" onclick="toggleDropdown('dropdownButton3', 'myDropdown3', 'yearInput')" class="flex justify-between items-center px-5 border-b-2 w-64 rounded">
                                <span id="selectedItemText3" class="h-6">-- Pilih bulan --</span>
                                <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                            </button>
                            <div id="myDropdown3" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                                @for ($year = $earliestYear; $year <= $latestYear; $year++)
                                    <div href="#" onclick="selectItem('{{ $year }}', 'selectedItemText3', 'myDropdown3', 'yearInput')" class="flex justify-between items-center w-64 px-4">
                                        <p>{{ $year }}</p>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <input type="hidden" id="yearInput" name="yearInput">
                    </div>
                </div>
              </div>
            <div class="flex justify-end py-10 px-6">
              <button type="submit" class="flex text-white justify-center items-center w-fit bg-[#1899F6] px-2 py-1 rounded">
                  <p class="font-bold">+ Show</p>
              </button>
            </form>
              </div>
            </div>
        </div>
    </main>
    {{-- MAIN --}}
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
        }
      </script>
  </body>
</html>