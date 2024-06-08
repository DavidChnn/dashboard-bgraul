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

          <form method="post" action="/cip/addasset" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 overflow-y-auto gap-x-10 gap-y-5 px-6">
              <div class="flex justify-between">
                  <p>Asset Code Accounting</p>
                  <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                      <input  type="text" name="assetCodeAccounting" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" id="assetCodeAccounting">
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
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->assetCodeEnginery}}" name="assetCodeEnginery" id="assetCodeEnginery">
                    <label for="">{{$data->assetCodeEnginery}}</label>
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
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->assetCategory}}" name="assetCategory" id="assetCategory">
                    <label for="">{{$data->assetCategory}}</label>
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
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->assetClass}}" name="assetClass" id="assetClass">
                    <label for="">{{$data->assetClass}}</label>
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Current Book Value</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$sum}}" name="currentBookValue" id="currentBookValue">
                    <label for="">{{$sum}}</label>
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Asset Group</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->assetGroup}}" name="assetGroup" id="assetGroup">
                    <label for="">{{$data->assetGroup}}</label>
                  </div>
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
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->assetStatus}}" name="assetStatus" id="assetStatus">
                    <label for="">{{$data->assetStatus}}</label>
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Sub Asset</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="type" class="bg-[#ECE9E9] w-full outline-none" required placeholder="" name="subAsset" id="subAsset">
                </div>
              </div>
              <div class="flex justify-between">
                <p>Cost Center</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->costCenter}}" name="costCenter" id="costCenter">
                    <label for="">{{$data->costCenter}}</label>
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
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->product}}" name="product" id="product">
                    <label for="">{{$data->product}}</label>
                  </div>
              </div>
              <div class="flex justify-between">
                <p>CIP Code</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->cipNumber}}" name="cipNumber" id="cipNumber">
                    <label for="">{{$data->cipNumber}}</label>
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Inventory Number</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->inventoryNumber}}" name="inventoryNumber" id="inventoryNumber">
                    <label for="">{{$data->inventoryNumber}}</label>
                  </div>
              </div>
              <div class="flex justify-between">
                <p>Department</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->department}}" name="department" id="department">
                    <label for="">{{$data->department}}</label>
                  </div>
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
                    <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->vendor}}" name="vendor" id="vendor">
                    <label for="">{{$data->vendor}}</label>
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
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->site}}" name="site" id="site">
                  <label for="">{{$data->site}}</label>
                </div>
              </div>
              <div class="flex justify-between">
                <p>Asset Picture</p>
              </div>
              <div class="flex justify-between">
                <p>Line</p>
                <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                  <input type="hidden" class="bg-[#ECE9E9]" value="{{$data->line}}" name="line" id="line">
                  <label for="">{{$data->line}}</label>
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
                  <input type="hidden" class="bg-[#ECE9E9]" value="{{$count}}" name="quantity" id="quantity">
                  <label for="">{{$count}}</label>
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
                  <input type="hidden" class="bg-[#ECE9E9]" value="{{$sum}}" name="acquisitionValue" id="acquisitionValue">
                  <label for="">{{$sum}}</label>
                </div>
              </div>
            </div>
            <input type="hidden" name="ids" id="ids" value="{{ implode(',', $ids) }}">
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
      
      document.getElementById('depreciationStart').addEventListener('change', function() {
        const startDate = new Date(this.value);
        if (!isNaN(startDate.getTime())) {
            const endDate = new Date(startDate);
            endDate.setMonth(startDate.getMonth() + Number({{$depre->depreciationCom}}));
            document.getElementById('depreciationEnd').value = endDate.toISOString().split('T')[0];
        }
      })
    </script>
  </body>
</html>