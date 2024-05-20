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
        <h1 class="text-xl text-xl mx-10 my-10">
            Asset Layout/Line Production Mapping
        </h1>
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
        <div class="flex justify-between items-center mx-4 my-4">
            <p>Mapping Machine Line Production ASDL01</p>
            <img src="/image/search1.png" alt="search" class="w-6 mr-2">
        </div>
          <div class="px-2 w-full">
            <table class="table-fixed text-sm w-full">
                <thead class="text-center">
                    <tr class="border-2">
                        <th class="border-2">No</th>
                        <th class="border-2">Machine Number</th>
                        <th class="border-2">SAP Number</th>
                        <th class="border-2">Sub Asset</th>
                        <th class="border-2">Asset Group</th>
                        <th class="border-2">Asset Description</th>
                        <th class="border-2">Department  </th>
                        <th class="border-2">Cost Center</th>
                        <th class="border-2">Qty</th>
                        <th class="border-2">UoM</th>
                        <th class="border-2">Product</th>
                        <th class="border-2">Status</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="border-2">1</td>
                        <td class="border-2">JMM15073</td>
                        <td class="border-2">3001472-0</td>
                        <td class="border-2">0</td>
                        <td class="border-2">Machine1</td>
                        <td class="border-2">M/C Damper Assembly Machine HvD 22MY</td>
                        <td class="border-2">Engineering Body</td>
                        <td class="border-2">ENG331</td>
                        <td class="border-2">1</td>
                        <td class="border-2">pcs</td>
                        <td class="border-2">Hybrid Damper</td>
                        <td class="border-2">Active</td>
                    </tr>
                    <tr>
                        <td class="border-2">2</td>
                        <td class="border-2">JMM15073</td>
                        <td class="border-2">3001472-0</td>
                        <td class="border-2">0</td>
                        <td class="border-2">Machine1</td>
                        <td class="border-2">M/C Damper Assembly Machine HvD 22MY</td>
                        <td class="border-2">Engineering Body</td>
                        <td class="border-2">ENG331</td>
                        <td class="border-2">1</td>
                        <td class="border-2">pcs</td>
                        <td class="border-2">Hybrid Damper</td>
                        <td class="border-2">Active</td>
                    </tr>
                    <tr>
                        <td class="border-2">3</td>
                        <td class="border-2">JMM15073</td>
                        <td class="border-2">3001472-0</td>
                        <td class="border-2">0</td>
                        <td class="border-2">Machine1</td>
                        <td class="border-2">M/C Damper Assembly Machine HvD 22MY</td>
                        <td class="border-2">Engineering Body</td>
                        <td class="border-2">ENG331</td>
                        <td class="border-2">1</td>
                        <td class="border-2">pcs</td>
                        <td class="border-2">Hybrid Damper</td>
                        <td class="border-2">Active</td>
                    </tr>
                    <tr>
                        <td class="border-2">4</td>
                        <td class="border-2">JMM15073</td>
                        <td class="border-2">3001472-0</td>
                        <td class="border-2">0</td>
                        <td class="border-2">Machine1</td>
                        <td class="border-2">M/C Damper Assembly Machine HvD 22MY</td>
                        <td class="border-2">Engineering Body</td>
                        <td class="border-2">ENG331</td>
                        <td class="border-2">1</td>
                        <td class="border-2">pcs</td>
                        <td class="border-2">Hybrid Damper</td>
                        <td class="border-2">Active</td>
                    </tr>
                    <tr>
                        <td class="border-2">5</td>
                        <td class="border-2">JMM15073</td>
                        <td class="border-2">3001472-0</td>
                        <td class="border-2">0</td>
                        <td class="border-2">Machine1</td>
                        <td class="border-2">M/C Damper Assembly Machine HvD 22MY</td>
                        <td class="border-2">Engineering Body</td>
                        <td class="border-2">ENG331</td>
                        <td class="border-2">1</td>
                        <td class="border-2">pcs</td>
                        <td class="border-2">Hybrid Damper</td>
                        <td class="border-2">Active</td>
                    </tr>
                    <tr>
                        <td class="border-2">6</td>
                        <td class="border-2">JMM15073</td>
                        <td class="border-2">3001472-0</td>
                        <td class="border-2">0</td>
                        <td class="border-2">Machine1</td>
                        <td class="border-2">M/C Damper Assembly Machine HvD 22MY</td>
                        <td class="border-2">Engineering Body</td>
                        <td class="border-2">ENG331</td>
                        <td class="border-2">1</td>
                        <td class="border-2">pcs</td>
                        <td class="border-2">Hybrid Damper</td>
                        <td class="border-2">Active</td>
                    </tr>
                </tbody>
            </table>
          </div>
          <div class="flex justify-between items-end py-10 px-6">
            <div>
                <div class="flex justify-center items-center w-fit bg-[#F7F7F7] px-6 py-1 rounded border-2 border-black">
                    <a href="addasset" class="font-bold">Choose File</a>
                </div>
                <p class="text-[#E3E3E3] w-36">No file Chosen for Asset Layout</p>
            </div>
            <div class="flex text-white justify-center items-center w-fit bg-[#79C4FB] px-2 py-1 rounded">
              <button class="pr-2">1</button>
              <button class="pr-2">2</button>
              <button class="pr-2">3</button>
              <button class="pr-2">4</button>
              <button class="pr-2">5</button>
              <button class="pr-2">dst..</button>
            </div>
          </div>
        </div>
    </main>
    {{-- MAIN --}}
  </body>
</html>