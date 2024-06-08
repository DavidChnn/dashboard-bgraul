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

          <form method="post" action="/listasset" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 overflow-y-auto gap-x-10 gap-y-5 px-6">
              <div class="flex justify-between">
                  <p>Asset Code Accounting</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                      <input type="text" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="assetCodeAccounting" id="assetCodeAccounting">
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Acqusition CIP</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" name="acquisitionCIP" id="acquisitionCIP" value="{{ \Carbon\Carbon::now('Asia/Jakarta')->format('Y-m-d') }}">
                    <label for="currentDateTime">{{ \Carbon\Carbon::now('Asia/Jakarta')->locale('id')->isoFormat('dddd, Do MMMM YYYY') }}</label>
                </div>
              </div>
              <div class="flex justify-between">
                  <p>Asset Code Engineering</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="text" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="assetCodeEnginery" id="assetCodeEnginery">
                  </div>
              </div>
              <div class="flex justify-between">
                  <p>Depreciation Start</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="date" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="depreciationStart" id="depreciationStart">
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
                      @foreach ($category as $category)
                        <a href="#" onclick="selectItem('{{$category->assetCategory}}', 'assetCategory', 'myDropdown1', 'assetCategoryInput')" class="flex justify-between items-center w-64 px-4">
                            <p>{{$category->assetCategory}}</p>
                        </a>
                      @endforeach
                    </div>
                    <input type="hidden" id="assetCategoryInput" name="assetCategoryInput">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Depreciation End</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="date" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="depreciationEnd" id="depreciationEnd">
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
                        @foreach ($class as $class)
                          <a href="#" onclick="selectItem('{{$class->assetClass}}', 'assetClass', 'myDropdown2', 'assetClassInput')" class="flex justify-between items-center w-64 px-4">
                              <p>{{$class->assetClass}}</p>
                          </a>
                        @endforeach
                    </div>
                </div>
                <input type="hidden" id="assetClassInput" name="assetClassInput">
              </div>
              <div class="flex justify-between">
                <p>Current Book Value</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="number" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="currentBookValue" id="currentBookValue">
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
                      @foreach ($group as $group)
                        <a href="#" onclick="selectItem1('{{$group->assetGroup}}', 'assetGroup', 'myDropdown3', 'assetGroupInput', '{{$group->depreciationCom}}', 'depreciationInput')" class="flex justify-between items-center w-64 px-4">
                            <p>{{$group->assetGroup}}</p>
                        </a>
                      @endforeach
                    </div>
                </div>
                <input type="hidden" id="depreciationInput" name="depreciationInput">
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
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="assetDescription" id="assetDescription">
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
                      @foreach ($status as $item)
                          <a href="#" onclick="selectItem('{{$item->status}}', 'assetStatus', 'myDropdown5', 'assetStatusInput')" class="flex justify-between items-center w-64 px-4">
                              <p>{{$item->status}}</p>
                          </a>
                        @endforeach
                    </div>
                </div>
                <input type="hidden" id="assetStatusInput" name="assetStatusInput">
              </div>
              <div class="flex justify-between">
                <p>Sub Asset</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="subAsset" id="subAsset">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Cost Center</p>
                <div class="relative">
                  <input type="text" id="costCentreInput" name="costCentreInput" oninput="filterDropdown('costCentreInput', 'myDropdown9')" onclick="showDropdown('myDropdown9')" placeholder="Select or type..." class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded">
                  <div id="myDropdown9" class="w-64 absolute hidden rounded shadow-md bg-white z-10 max-h-40 overflow-y-auto">
                      @foreach ($costCentre as $item)
                          <a href="#" onclick="selectItem('{{$item->name}}', 'costCentreInput', 'myDropdown9')" class="flex justify-between items-center w-64 px-4 py-2 hover:bg-gray-100">
                              <p>{{$item->name}}</p>
                          </a>
                      @endforeach
                  </div>
              </div>
              </div>
              <div class="flex justify-between">
                <p>PIC Asset</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="picAsset" id="picAsset">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Product</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="product" id="product">
                </div>
              </div>
              <div class="flex justify-between">
                <p>CIP Code</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="number" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="cipCode" id="cipCode">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Inventory Number</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="inventoryNumber" id="inventoryNumber">
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
                      @foreach ($dept as $item)
                      <a href="#" onclick="selectItem('{{$item->dept}}', 'department', 'myDropdown6', 'departmentInput')" class="flex justify-between items-center w-64 px-4">
                          <p>{{$item->dept}}</p>
                      </a>
                      @endforeach
                    </div>
                </div>
                <input type="hidden" id="departmentInput" name="departmentInput">
              </div>
              <div class="flex justify-between">
                <p>Budget Number</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="budgetNumber" id="budgetNumber">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Vendor</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="vendor" id="vendor">
                </div>
              </div>
              <div class="flex justify-between">
                <p>PO Number</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="poNumber" id="poNumber">
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
                      @foreach ($site as $item)
                        <a href="#" onclick="selectItem('{{$item->name}}', 'site', 'myDropdown7', 'siteInput')" class="flex justify-between items-center w-64 px-4">
                            <p>{{$item->name}}</p>
                        </a>
                      @endforeach
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
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="line" id="line">
                </div>
              </div>
              <div class="row-span-5">
                <button class="flex items-center text-center">
                <img src="/image/addpicture.png" alt="add" class="w-48">
                  <a href="" class="bg-[#CACACA] h-fit px-2 py-1 ml-5 rounded">
                    <input type="file" class="form-control" id="assetPicture" name="assetPicture" >
                  </a>
                </button>
              </div>
              <div class="flex justify-between col-start-1">
                <p>Process</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="proccess" id="proccess">
                </div>
              </div>
              <div class="flex justify-between col-start-1">
                <p>Quantity</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="number" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="quantity" id="quantity">
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
                      @foreach ($uom as $item)
                      <a href="#" onclick="selectItem('{{$item->name}}', 'uom', 'myDropdown8', 'uomInput')" class="flex justify-between items-center w-64 px-4">
                          <p>{{$item->name}}</p>
                      </a>
                      @endforeach
                  </div>
                </div>
                <input type="hidden" id="uomInput" name="uomInput">
              </div>
              <div class="flex justify-between col-start-1">
                <p>Acquisition Value</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="number" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="acquisitionValue" id="acquisitionValue">
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
      function selectItem1(item, selectedItemTextId, dropdownId, inputId, item2, inputId2) {
        event.preventDefault();
        document.getElementById(selectedItemTextId).innerText = item;
        document.getElementById(inputId).value = item; 
        document.getElementById(inputId2).value = item2; 
        toggleDropdown(null, dropdownId);
      }
      document.getElementById('depreciationStart').addEventListener('change', function() {
        const startDate = new Date(this.value);
        if (!isNaN(startDate.getTime())) {
            const endDate = new Date(startDate);
            endDate.setMonth(
              startDate.getMonth() + Number(document.getElementById("depreciationInput").value)
            );
            document.getElementById('depreciationEnd').value = endDate.toISOString().split('T')[0];
        }
      })
      // function showDropdown(dropdownId) {
      //   document.getElementById(dropdownId).classList.remove('hidden');
      // }

      // function hideDropdown(dropdownId) {
      //     document.getElementById(dropdownId).classList.add('hidden');
      // }

      // function toggleDropdown(buttonId, dropdownId) {
      //     const dropdown = document.getElementById(dropdownId);
      //     if (dropdown.classList.contains('hidden')) {
      //         dropdown.classList.remove('hidden');
      //     } else {
      //         dropdown.classList.add('hidden');
      //     }
      // }

      // function selectItem(value, inputId, dropdownId) {
      //     document.getElementById(inputId).value = value;
      //     hideDropdown(dropdownId);
      // }

      // function filterDropdown(inputId, dropdownId) {
      //     const input = document.getElementById(inputId);
      //     const filter = input.value.toLowerCase();
      //     const dropdown = document.getElementById(dropdownId);
      //     const items = dropdown.getElementsByTagName('a');

      //     for (let i = 0; i < items.length; i++) {
      //         const txtValue = items[i].textContent || items[i].innerText;
      //         if (txtValue.toLowerCase().indexOf(filter) > -1) {
      //             items[i].style.display = "";
      //         } else {
      //             items[i].style.display = "none";
      //         }
      //     }
      // }

      // // document.addEventListener('click', function(event) {
      // //     event.preventDefault();
      // //     const dropdown = document.getElementById('myDropdown9');
      // //     if (!dropdown.contains(event.target) && event.target.id !== 'costCentreInput') {
      // //         hideDropdown('myDropdown9');
      // //     }
      // // });
    </script>
  </body>
</html>