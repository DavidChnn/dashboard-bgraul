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
          List Asset/Details
        </h1>
        <div class="bg-white mx-10 mb-10 pb-10">
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
          <div class="flex px-6 py-4">
            <p class="font-semibold">Asset Details >></p>
          </div>
          <div class="grid grid-cols-2 overflow-y-auto gap-x-10 gap-y-5 px-6">
            <div class="flex justify-between">
                <p>Asset Code Accounting</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <p>JMM15073</p>
                </div>
            </div>
            <div class="flex justify-between">
                <p>Acqusition CIP</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="date" class="bg-[#ECE9E9]" placeholder="17 April 2018">
                </div>
            </div>
            <div class="flex justify-between">
                <p>Asset Code Engineering</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <p>3001470-0</p>
                </div>
            </div>
            <div class="flex justify-between">
                <p>Depreciation Start</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="date" class="bg-[#ECE9E9]" placeholder="4 Mei 2018">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Category</p>
              <div>
                  <button id="dropdownButton1" onclick="toggleDropdown('dropdownButton1', 'myDropdown1')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                      <span id="selectedItemText1" class="h-6">Machine</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown1" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <a href="#" onclick="selectItem('Machine', 'selectedItemText1', 'myDropdown1')" class="flex justify-between items-center w-64 px-4">
                          <p>Machine</p>
                      </a>
                      <a href="#" onclick="selectItem('Machine1', 'selectedItemText1', 'myDropdown1')" class="flex justify-between items-center w-64 px-4">
                          <p>Machine1</p>
                      </a>
                      <a href="#" onclick="selectItem('Machine2', 'selectedItemText1', 'myDropdown1')" class="flex justify-between items-center w-64 px-4">
                          <p>Machine2</p>
                      </a>
                  </div>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Depreciation End</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="date" class="bg-[#ECE9E9]" placeholder="4 Mei 2018">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Class</p>
              <div>
                  <button id="dropdownButton2" onclick="toggleDropdown('dropdownButton2', 'myDropdown2')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                      <span id="selectedItemText2" class="h-6">300</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown2" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <a href="#" onclick="selectItem('300', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                          <p>300</p>
                      </a>
                      <a href="#" onclick="selectItem('301', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                          <p>301</p>
                      </a>
                      <a href="#" onclick="selectItem('302', 'selectedItemText2', 'myDropdown2')" class="flex justify-between items-center w-64 px-4">
                          <p>302</p>
                      </a>
                  </div>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Depreciation End</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="170.000.000">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Group</p>
              <div>
                  <button id="dropdownButton3" onclick="toggleDropdown('dropdownButton3', 'myDropdown3')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                      <span id="selectedItemText3" class="h-6">Machine</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown3" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <a href="#" onclick="selectItem('Machine', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                          <p>Machine</p>
                      </a>
                      <a href="#" onclick="selectItem('Machine1', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                          <p>Machine1</p>
                      </a>
                      <a href="#" onclick="selectItem('Machine2', 'selectedItemText3', 'myDropdown3')" class="flex justify-between items-center w-64 px-4">
                          <p>Machine2</p>
                      </a>
                  </div>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Group</p>
              <div>
                  <button id="dropdownButton4" onclick="toggleDropdown('dropdownButton4', 'myDropdown4')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                      <span id="selectedItemText4" class="h-6">Good</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown4" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <a href="#" onclick="selectItem('Good', 'selectedItemText4', 'myDropdown4')" class="flex justify-between items-center w-64 px-4">
                          <p>Good</p>
                      </a>
                      <a href="#" onclick="selectItem('Average', 'selectedItemText4', 'myDropdown4')" class="flex justify-between items-center w-64 px-4">
                          <p>Average</p>
                      </a>
                      <a href="#" onclick="selectItem('Bad', 'selectedItemText4', 'myDropdown4')" class="flex justify-between items-center w-64 px-4">
                          <p>Bad</p>
                      </a>
                  </div>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Description</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="M/C Damper Assembly Machine HvD 22MY">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Group</p>
              <div>
                  <button id="dropdownButton5" onclick="toggleDropdown('dropdownButton5', 'myDropdown5')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                      <span id="selectedItemText5" class="h-6">Active</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown5" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <a href="#" onclick="selectItem('Active', 'selectedItemText5', 'myDropdown5')" class="flex justify-between items-center w-64 px-4">
                          <p>Active</p>
                      </a>
                      <a href="#" onclick="selectItem('In-Active', 'selectedItemText5', 'myDropdown5')" class="flex justify-between items-center w-64 px-4">
                          <p>In-Active</p>
                      </a>
                  </div>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Sub Asset</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="1">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Cost Center</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="ENG331">
              </div>
            </div>
            <div class="flex justify-between">
              <p>PIC Asset</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="SPV Engineering">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Product</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="Hybrid Damper">
              </div>
            </div>
            <div class="flex justify-between">
              <p>CIP Code</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="1220184">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Inventory Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Department</p>
              <div>
                  <button id="dropdownButton6" onclick="toggleDropdown('dropdownButton6', 'myDropdown6')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                      <span id="selectedItemText6" class="h-6">Engineering Body</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown6" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <a href="#" onclick="selectItem('Engineering Body', 'selectedItemText6', 'myDropdown6')" class="flex justify-between items-center w-64 px-4">
                          <p>Engineering Body</p>
                      </a>
                      <a href="#" onclick="selectItem('Engineering', 'selectedItemText6', 'myDropdown6')" class="flex justify-between items-center w-64 px-4">
                          <p>Engineering</p>
                      </a>
                  </div>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Budget Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="CC12001">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Vendor</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="PT Chemicon">
              </div>
            </div>
            <div class="flex justify-between">
              <p>PO Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="PO12012018">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Site</p>
              <div>
                  <button id="dropdownButton7" onclick="toggleDropdown('dropdownButton7', 'myDropdown7')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                      <span id="selectedItemText7" class="h-6">Plant1</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown7" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <a href="#" onclick="selectItem('Plant1', 'selectedItemText7', 'myDropdown7')" class="flex justify-between items-center w-64 px-4">
                          <p>Plant1</p>
                      </a>
                      <a href="#" onclick="selectItem('Plant2', 'selectedItemText7', 'myDropdown7')" class="flex justify-between items-center w-64 px-4">
                          <p>Plant2</p>
                      </a>
                  </div>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Picture</p>
            </div>
            <div class="flex justify-between">
              <p>Line</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="ASDL01">
              </div>
            </div>
            <div class="row-span-5">
              <button class="flex items-center text-center">
              <img src="/image/addpicture.png" alt="add" class="w-48">
                <a href="" class="bg-[#CACACA] h-fit px-2 py-1 ml-5 rounded">
                  Add picture
                </a>
              </button>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Process</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="Apply Grease Housing">
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Quantity</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="1">
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>UoM</p>
              <div>
                  <button id="dropdownButton8" onclick="toggleDropdown('dropdownButton8', 'myDropdown8')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                      <span id="selectedItemText8" class="h-6">Pcs</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown8" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <a href="#" onclick="selectItem('Pcs', 'selectedItemText8', 'myDropdown8')" class="flex justify-between items-center w-64 px-4">
                          <p>Pcs</p>
                      </a>
                      <a href="#" onclick="selectItem('Num', 'selectedItemText8', 'myDropdown8')" class="flex justify-between items-center w-64 px-4">
                          <p>Num</p>
                      </a>
                  </div>
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Acquisition Value</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" placeholder="512.000.000">
              </div>
            </div>
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