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
        {{-- NAVBAR --}}
        <x-navbar />
        {{-- NAVBAR --}}
        <h1 class="text-xl text-xl mx-10 my-10">
          Report Asset
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
          <div class="flex justify-end px-2 my-2">
            <div class="flex justify-between items-center px-2">
                <a href="{{ route('report.export.assetreport') }}" class="bg-[#79C4FB] text-white rounded text-xl px-2 py-1 mr-5">
                    Export to Excel
                </a>
            </div>
          </div>
          <div class="px-2 w-full py-2">
            <table class="table-auto text-sm w-full">
                <thead class="text-center">
                    <tr class="border-2">
                        <th class="border-2">No</th>
                        <th class="border-2">Asset Class</th>
                        <th class="border-2">Asset Code User</th>
                        <th class="border-2">CIP Number</th>
                        <th class="border-2">Asset Description</th>
                        <th class="border-2">Departement</th>
                        <th class="border-2">Capitalized Date</th>
                        <th class="border-2">Useful Life</th>
                        <th class="border-2">Amount</th>
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
                            <td class="border-2">{{$item->cipNumber}}</td>
                            <td class="border-2">{{$item->assetDescription}}</td>
                            <td class="border-2">{{$item->department}}</td>
                            <td class="border-2">{{$item->acquisitionCIP}}</td>
                            <td class="border-2">{{$item->assetCondition}}</td>
                            <td class="border-2">{{$item->currentBookValue}}</td>
                            <!-- aku gatau isi yang assetNumber, Capitalized Date, Amount -->
                        </tr>
                        @php $counter++; @endphp
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
    </main>
    {{-- MAIN --}}
  </body>
</html>