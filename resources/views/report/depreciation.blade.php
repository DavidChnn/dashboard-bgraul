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
              <div class="flex justify-between mx-10 mt-10">
                <div class="flex justify-between items-center gap-x-10">
                    <div>
                        <p>Assembly Line Production</p>
                        <div>
                            <button id="dropdownButton1" onclick="toggleDropdown('dropdownButton1', 'myDropdown1')" class="flex justify-between items-center px-5 border-b-2 w-64 rounded">
                                <span id="selectedItemText1" class="h-6">-- Pilih Line Production --</span>
                                <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                            </button>
                            <div id="myDropdown1" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                                <div href="#" onclick="selectItem('Plant1', 'selectedItemText1', 'myDropdown1')" class="flex justify-between items-center w-64 px-4">
                                    <p>Confirm</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText1', 'myDropdown1')" class="flex justify-between items-center w-64 px-4">
                                    <p>Reject Confirmation</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText1', 'myDropdown1')" class="flex justify-between items-center w-64 px-4">
                                    <p>Not Confirm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>Month</p>
                        <div>
                            <button id="dropdownButton2" onclick="toggleDropdown('dropdownButton2', 'myDropdown2')" class="flex justify-between items-center px-5 border-b-2 w-64 rounded">
                                <span id="selectedItemText2" class="h-6">-- Pilih bulan --</span>
                                <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                            </button>
                            <div id="myDropdown2" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                                <div href="#" onclick="selectItem('Plant1', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>January</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>February</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>Mart</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>April</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>May</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>June</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>July</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>Agust</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>September</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>October</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>November</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>December</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                                    <p>All</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>Year</p>
                        <div>
                            <button id="dropdownButton3" onclick="toggleDropdown('dropdownButton3', 'myDropdown3')" class="flex justify-between items-center px-5 border-b-2 w-64 rounded">
                                <span id="selectedItemText3" class="h-6">-- Pilih bulan --</span>
                                <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                            </button>
                            <div id="myDropdown3" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                                <div href="#" onclick="selectItem('Plant1', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                                    <p>2021</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                                    <p>2022</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                                    <p>2023</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                                    <p>2024</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                                    <p>2025</p>
                                </div>
                                <div href="#" onclick="selectItem('Plant2', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                                    <p>2026</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="flex justify-end py-10 px-6">
                <button type="button" class="flex text-white justify-center items-center w-fit bg-[#1899F6] px-2 py-1 rounded">
                  <a href="report/depretiaon/fiscal">
                    <p class="font-bold">+ Show</p>
                  </a>
                </button>
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

        function selectItem(item, selectedItemTextId, dropdownId) {
            document.getElementById(selectedItemTextId).innerText = item;
            toggleDropdown(null, dropdownId);
        }
      </script>
  </body>
</html>