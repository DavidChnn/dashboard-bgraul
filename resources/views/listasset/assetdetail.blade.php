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
                  <p>{{$data->assetCodeAccounting}}</p>
                </div>
            </div>
            <div class="flex justify-between">
                <p>Acqusition CIP</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <p>{{$data->acquisitionCIP}}</p>
                </div>
            </div>
            <div class="flex justify-between">
                <p>Asset Code Engineering</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <p>{{$data->assetCodeEnginery}}</p>
                </div>
            </div>
            <div class="flex justify-between">
                <p>Depreciation Start</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <p>{{$data->depreciationStart}}</p>
                </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Category</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->assetCategory}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Depreciation End</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->depreciationEnd}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Class</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->assetClass}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Current Book Value</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->currentBookValue}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Group</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->assetGroup}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Condition</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->assetCondition}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Description</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->assetDescription}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Status</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->assetStatus}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Sub Asset</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->subAsset}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Cost Center</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->costCenter}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>PIC Asset</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->picAsset}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Product</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->product}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>CIP Code</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->cipCode}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Inventory Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->inventoryNumber}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Department</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->department}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Budget Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->budgetNumber}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Vendor</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->vendor}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>PO Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->poNumber}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Site</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->site}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Asset Picture</p>
            </div>
            <div class="flex justify-between">
              <p>Line</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->departmentDetail}}</p>
              </div>
            </div>
            <div class="row-span-5">
              <button class="flex items-center text-center">
              <img src="{{url('foto').'/'.$data->assetPicture}}" alt="add" class="w-48">
                {{-- <a href="" class="bg-[#CACACA] h-fit px-2 py-1 ml-5 rounded">
                  Add picture
                </a> --}}
              </button>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Process</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->proccess}}</p>
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Quantity</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->quantity}}</p>
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>UoM</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->uom}}</p>
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Acquisition Value</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p>{{$data->acquisitionValue}}</p>
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
          event.preventDefault();
          document.getElementById(selectedItemTextId).innerText = item;
          toggleDropdown(null, dropdownId);
      }
    </script>
  </body>
</html>