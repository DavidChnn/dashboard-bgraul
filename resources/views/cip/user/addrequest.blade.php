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
          Asset Details/Add Asset Details
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
            <p class="font-semibold">Add Asset Details >></p>
          </div>

          <form action="/cip/user/request" method="post">
            @csrf
            <div class="grid grid-cols-2 overflow-y-auto gap-x-10 gap-y-5 px-6">
              <div class="flex justify-between">
                  <p>Asset Code Accounting</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                      <p></p>
                  </div>
              </div>
              <div class="flex justify-between">
                  <p>Acqusition CIP</p>
                    <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                        <input type="date" class="bg-[#ECE9E9]" placeholder="" name="acquisitionCIP" id="acquisitionCIP">
                    </div>
              </div>
              <div class="flex justify-between">
                  <p>Asset Code Engineering</p>
                    <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                      <input type="text" class="bg-[#ECE9E9]" placeholder="" name="assetCodeEnginery" id="assetCodeEnginery">
                    </div>
              </div>
              <div class="flex justify-between">
                  <p>Depreciation Start</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="date" class="bg-[#ECE9E9]" placeholder="" name="depreciationStart" id="depreciationStart">
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Asset Category</p>
                  <div>
                      <button type="button" id="dropdownButton1" onclick="toggleDropdown('dropdownButton1', 'myDropdown1')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                          <span id="assetCategory" class="h-6"></span>
                          <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                      </button>
                      <div id="myDropdown1" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                          <a href="#" onclick="selectItem('Machine', 'assetCategory', 'myDropdown1', 'assetCategoryInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Machine</p>
                          </a>
                          <a href="#" onclick="selectItem('Machine1', 'assetCategory', 'myDropdown1', 'assetCategoryInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Machine1</p>
                          </a>
                          <a href="#" onclick="selectItem('Machine2', 'assetCategory', 'myDropdown1', 'assetCategoryInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Machine2</p>
                          </a>
                      </div>
                      <input type="hidden" id="assetCategoryInput" name="assetCategoryInput">
                  </div>
              </div>
              <div class="flex justify-between">
                  <p>Depreciation End</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="date" class="bg-[#ECE9E9]" placeholder="" name="depreciationEnd" id="depreciationEnd">
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Asset Class</p>
                  <div>
                      <button type="button" id="dropdownButton2" onclick="toggleDropdown('dropdownButton2', 'myDropdown2')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                          <span id="assetClass" class="h-6"></span>
                          <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                      </button>
                      <div id="myDropdown2" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                          <a href="#" onclick="selectItem('300', 'assetClass', 'myDropdown2', 'assetClassInput')" class="flex justify-between items-center w-64 px-4">
                              <p>300</p>
                          </a>
                          <a href="#" onclick="selectItem('301', 'assetClass', 'myDropdown2', 'assetClassInput')" class="flex justify-between items-center w-64 px-4">
                              <p>301</p>
                          </a>
                          <a href="#" onclick="selectItem('302', 'assetClass', 'myDropdown2', 'assetClassInput')" class="flex justify-between items-center w-64 px-4">
                              <p>302</p>
                          </a>
                      </div>
                  </div>
                  <input type="hidden" id="assetClassInput" name="assetClassInput">
              </div>
              <div class="flex justify-between">
                <p>Current Book Value</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="number" class="bg-[#ECE9E9]" placeholder="" name="currentBookValue" id="currentBookValue">
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Asset Group</p>
                  <div>
                      <button type="button" id="dropdownButton3" onclick="toggleDropdown('dropdownButton3', 'myDropdown3')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                          <span id="assetGroup" class="h-6"></span>
                          <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                      </button>
                      <div id="myDropdown3" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                          <a href="#" onclick="selectItem('Machine', 'assetGroup', 'myDropdown3', 'assetGroupInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Machine</p>
                          </a>
                          <a href="#" onclick="selectItem('Machine1', 'assetGroup', 'myDropdown3', 'assetGroupInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Machine1</p>
                          </a>
                          <a href="#" onclick="selectItem('Machine2', 'assetGroup', 'myDropdown3', 'assetGroupInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Machine2</p>
                          </a>
                      </div>
                  </div>
                  <input type="hidden" id="assetGroupInput" name="assetGroupInput">
              </div>
              <div class="flex justify-between">
                <p>Asset Condition</p>
                  <div>
                      <button type="button" id="dropdownButton4" onclick="toggleDropdown('dropdownButton4', 'myDropdown4')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                          <span id="assetCondition" class="h-6"></span>
                          <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                      </button>
                      <div id="myDropdown4" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                          <a href="#" onclick="selectItem('Good', 'assetCondition', 'myDropdown4', 'assetConditionInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Good</p>
                          </a>
                          <a href="#" onclick="selectItem('Average', 'assetCondition', 'myDropdown4', 'assetConditionInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Average</p>
                          </a>
                          <a href="#" onclick="selectItem('Bad', 'assetCondition', 'myDropdown4', 'assetConditionInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Bad</p>
                          </a>
                      </div>
                  </div>
                  <input type="hidden" id="assetConditionInput" name="assetConditionInput">
              </div>
              <div class="flex justify-between">
                <p>Asset Description</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="type" class="bg-[#ECE9E9]" placeholder="" name="assetDescription" id="assetDescription">
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Asset Status</p>
                  <div>
                      <button type="button" id="dropdownButton5" onclick="toggleDropdown('dropdownButton5', 'myDropdown5')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                          <span id="assetStatus" class="h-6"></span>
                          <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                      </button>
                      <div id="myDropdown5" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                          <a href="#" onclick="selectItem('Active', 'assetStatus', 'myDropdown5', 'assetStatusInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Active</p>
                          </a>
                          <a href="#" onclick="selectItem('In-Active', 'assetStatus', 'myDropdown5', 'assetStatusInput')" class="flex justify-between items-center w-64 px-4">
                              <p>In-Active</p>
                          </a>
                      </div>
                  </div>
                  <input type="hidden" id="assetStatusInput" name="assetStatusInput">
              </div>
              <div class="flex justify-between">
                <p>Sub Asset</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="subAsset" id="subAsset">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Cost Center</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="costCenter" id="costCenter">
                </div>
              </div>
              <div class="flex justify-between">
                <p>PIC Asset</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="picAsset" id="picAsset">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Product</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="product" id="product">
                </div>
              </div>
              <div class="flex justify-between">
                <p>CIP Code</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <p></p>
                </div>
              </div>
              <div class="flex justify-between">
                <p>Inventory Number</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <p></p>
                </div>
              </div>
              <div class="flex justify-between">
                <p>Department</p>
                  <div>
                      <button type="button" id="dropdownButton6" onclick="toggleDropdown('dropdownButton6', 'myDropdown6')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                          <span id="department" class="h-6"></span>
                          <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                      </button>
                      <div id="myDropdown6" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                          <a href="#" onclick="selectItem('Engineering Body', 'department', 'myDropdown6', 'departmentInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Engineering Body</p>
                          </a>
                          <a href="#" onclick="selectItem('Engineering', 'department', 'myDropdown6', 'departmentInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Engineering</p>
                          </a>
                      </div>
                  </div>
                  <input type="hidden" id="departmentInput" name="departmentInput">
              </div>
              <div class="flex justify-between">
                <p>Budget Number</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="budgetNumber" id="budgetNumber">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Vendor</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="vendor" id="vendor">
                </div>
              </div>
              <div class="flex justify-between">
                <p>PO Number</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="poNumber" id="poNumber">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Site</p>
                  <div>
                      <button type="button" id="dropdownButton7" onclick="toggleDropdown('dropdownButton7', 'myDropdown7')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                          <span id="site" class="h-6"></span>
                          <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                      </button>
                      <div id="myDropdown7" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                          <a href="#" onclick="selectItem('Plant1', 'site', 'myDropdown7', 'siteInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Plant1</p>
                          </a>
                          <a href="#" onclick="selectItem('Plant2', 'site', 'myDropdown7', 'siteInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Plant2</p>
                          </a>
                      </div>
                  </div>
                  <input type="hidden" id="siteInput" name="siteInput">
              </div>
              <div class="flex justify-between">
                <p>Asset Picture</p>
              </div>
              <div class="flex justify-between">
                <p>Line</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="line" id="line">
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
                  <input type="type" class="bg-[#ECE9E9]" placeholder="" name="proccess" id="proccess">
                </div>
              </div>
              <div class="flex justify-between col-start-1">
                <p>Quantity</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="number" class="bg-[#ECE9E9]" placeholder="" name="quantity" id="quantity">
                </div>
              </div>
              <div class="flex justify-between col-start-1">
                <p>UoM</p>
                  <div>
                      <button type="button" id="dropdownButton8" onclick="toggleDropdown('dropdownButton8', 'myDropdown8')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                          <span id="uom" class="h-6"></span>
                          <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                      </button>
                      <div id="myDropdown8" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                          <a href="#" onclick="selectItem('Pcs', 'uom', 'myDropdown8', 'uomInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Pcs</p>
                          </a>
                          <a href="#" onclick="selectItem('Num', 'uom', 'myDropdown8', 'uomInput')" class="flex justify-between items-center w-64 px-4">
                              <p>Num</p>
                          </a>
                      </div>
                  </div>
                  <input type="hidden" id="uomInput" name="uomInput">
              </div>
              <div class="flex justify-between col-start-1">
                <p>Acquisition Value</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="number" class="bg-[#ECE9E9]" placeholder="" name="acquisitionValue" id="acquisitionValue">
                </div>
              </div>
            </div>
            <div class="flex justify-center items-center my-10">
              <button type="submit" class="bg-red-500 rounded px-2 py-1">
                Submit
              </button>
            </div>
          </form>
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