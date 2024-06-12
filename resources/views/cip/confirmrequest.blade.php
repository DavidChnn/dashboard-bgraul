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
          CIP/Request/Confirm CIP
        </h1>
        <form class="bg-white mx-10 mb-10 pb-10" action="{{ url('/cip/confirmrequest/'.$data->id) }}" method="POST">
          @csrf
          @method('PUT')
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
            <p class="font-semibold">Confirm CIP >></p>
          </div>

          
          <div class="grid grid-cols-2 overflow-y-auto gap-x-10 gap-y-5 px-6">
            <div class="flex justify-between">
              <p>Class</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p> {{$data->assetClass}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>UoM</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p> {{$data->uom}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Inventory Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" value="{{$data->inventoryNumber}}" placeholder="{{$data->inventoryNumber}}" name="inventoryNumber" id="inventoryNumber" >
              </div>
            </div>
            <div class="flex justify-between">
              <p>CIP Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <input type="type" class="bg-[#ECE9E9]" value="{{$data->cipNumber}}" placeholder="{{$data->cipNumber}}" name="cipNumber" id="cipNumber">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Description</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p> {{$data->assetDescription}}</p>
              </div>
            </div>
            <div class="flex justify-between">
              <p>Confirmation</p>
              <div>
                  <button id="dropdownButton1" type="button" onclick="toggleDropdown('dropdownButton1', 'myDropdown1')" class="flex justify-between items-center px-5 bg-[#ECE9E9] w-64 rounded" required>
                      <span id="selectedItemText1" class="h-6">{{{$data->statusRequest}}}</span>
                      <img src="/image/arrow3.png" alt="" class="w-3 h-fit">
                  </button>
                  <div id="myDropdown1" class="w-64 absolute hidden rounded shadow-md bg-white z-10">
                      <div href="#" onclick="selectItem('Confirm', 'selectedItemText1', 'myDropdown1', 'statusRequestInput')" class="flex justify-between items-center w-64 px-4">
                          <p>Confirm</p>
                      </div>
                      <div href="#" onclick="selectItem('Reject', 'selectedItemText1', 'myDropdown1', 'statusRequestInput')" class="flex justify-between items-center w-64 px-4">
                          <p>Reject Request</p>
                      </div>
                      <div href="#" onclick="selectItem('Not Confirm', 'selectedItemText1', 'myDropdown1', 'statusRequestInput')" class="flex justify-between items-center w-64 px-4">
                          <p>Not Confirm</p>
                      </div>
                  </div>
                  <input type="hidden" id="statusRequestInput" name="statusRequestInput" value="{{{$data->statusRequest}}}">
              </div>
            </div>
            <div class="flex justify-between">
              <p>Cap Date</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p> {{$data->acquisitionCIP}}</p>
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Capex Number</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p> {{$data->budgetNumber}}</p>
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Dept</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p> {{$data->department}}</p>
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Amount</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p> {{$data->acquisitionValue}}</p>
              </div>
            </div>
            <div class="flex justify-between col-start-1">
              <p>Qty</p>
              <div class="bg-[#ECE9E9] w-64 px-4 rounded">
                <p> {{$data->quantity}}</p>
              </div>
            </div>
          </div>
          <div class="flex justify-center mt-10">
            <button type="submit" class="bg-[#4B06A4] px-2 py-1 rounded text-white">
                + Confirm CIP
            </button>
          </div>
        
          {{-- <div class="flex justify-center mt-10">
            <button type="submit" class="bg-[#4B06A4] px-2 py-1 rounded text-white">
                + Confirm CIP
            </button>
          </div> --}}
        </form>
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