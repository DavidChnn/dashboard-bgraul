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
        <h1 class="text-xl text-xl mx-10 my-10">
          CIP/Request
        </h1>
        <div class="bg-white mx-10 pb-10">
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
          <div class="flex justify-between items-center px-2">
              <div class="flex px-6 py-4">
                  <p class="font-semibold">Request CIP Number >></p>
              </div>
              <a href="{{ route('cip.export.exportrequestcip') }}" class="bg-[#79C4FB] text-white rounded text-xl px-2 py-1 mr-5">
                  Export to Excel
              </a>
          </div>
          <div class="px-2 w-full">
            <table class="table border-collapse text-sm w-full">
                <thead class="text-center">
                    <tr class="border-2">
                        <th class="border-2">No</th>
                        <th class="border-2">Class</th>
                        <th class="border-2">Asset Code User</th>
                        <th class="border-2">Description</th>
                        <th class="border-2">Cap Date  </th>
                        <th class="border-2">Capex Number </th>
                        <th class="border-2">Dept</th>
                        <th class="border-2">Amount</th>
                        <th class="border-2">Qty</th>
                        <th class="border-2">UoM</th>
                        <th class="border-2">Status</th>
                        <th class="border-2">CIP Number</th>
                        <th class="border-2">Deadline</th>
                        <th class="border-2">Konfirmasi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                  @php
                      $counter = ($data->currentPage() - 1) * $data->perPage() + 1;
                  @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td class="border-2">{{$counter}}</td>
                            <td class="border-2">{{$item->assetClass}}</td>
                            <td class="border-2">{{$item->assetCodeEnginery}}</td>
                            <td class="border-2">{{$item->assetDescription}}</td>
                            <td class="border-2">{{$item->acquisitionCIP}}</td>
                            <td class="border-2">{{$item->budgetNumber}}</td>
                            <td class="border-2">{{$item->department}}</td>
                            <td class="border-2">{{$item->acquisitionValue}}</td>
                            <td class="border-2">{{$item->quantity}}</td>
                            <td class="border-2">{{$item->uom}}</td>
                            <td class="border-2">{{$item->statusRequest}}</td>
                            <td class="border-2">{{$item->cipNumber ? $item->cipNumber : 'Insert CIP Number'}}</td>
                            @php
                                $deadline = \Carbon\Carbon::parse($item->deadline);
                                $datetimenow = \Carbon\Carbon::now();
                                $remainingTime = $deadline->diffForHumans($datetimenow);
                            @endphp
                            <td class="border-2">{{$remainingTime}}</td>
                            <td class="border-2">
                              <button type="button">
                                  <a href="{{url('/cip/confirmrequest/'.$item->id)}}">
                                    
                                    <img src="/image/checklist.png" alt="checklist" class="w-6 translate-y-1">
                                  </a>
                              </button>
                          </td>
                        </tr>
                        @php $counter++; @endphp
                    @endforeach
                    {{$data->links()}}
                </tbody>
            </table>
          </div>
        </div>
    </main>
    {{-- MAIN --}}
  </body>
</html>