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
          List Asset
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
          <div class="flex justify-end px-2">
          <div class="flex justify-between items-center px-2">
            <form method="GET" action="{{ url('/listasset') }}" class="mb-4">
              <div class="flex items-center">
                  <label for="assetClass" class="mr-2">Filter by Asset Class:</label>
                  <select name="assetClass" id="assetClass" class="border rounded p-2">
                      <option value="">All</option>
                      @foreach(App\Models\Asset::select('assetClass')->distinct()->get() as $asset)
                          <option value="{{ $asset->assetClass }}" {{ request('assetClass') == $asset->assetClass ? 'selected' : '' }}>
                              {{ $asset->assetClass }}
                          </option>
                      @endforeach
                  </select>
                  <button type="submit" class="ml-2 bg-blue-500 text-white p-2 rounded">Filter</button>
              </div>
            </form>
          </div>
          <div class="flex justify-between items-center px-2">
              <a href="{{ route('exportlistasset') }}" class="bg-[#79C4FB] text-white rounded text-xl px-2 py-1 mr-5">
                  Export to Excel
              </a>
          </div>
            <div class="flex bg-[#D6CECE] w-fit items-center justify-between rounded px-2 my-4 py-1">
                <input class="bg-[#D6CECE] text-[#4B4A4A] focus:outline-none" type="text" placeholder="Search...">
                <img src="/image/search1.png" alt="search" class="w-6 mr-2">
              </div>
          </div>
          <div class="px-2 w-full">
            <table class="table-auto text-sm w-full">
                <thead class="text-center">
                    <tr class="border-2">
                        <th class="border-2">No</th>
                        <th class="border-2">Machine Number</th>
                        <th class="border-2">SAP Number</th>
                        <th class="border-2">Sub Asset</th>
                        <th class="border-2">Asset Group</th>
                        <th class="border-2">Asset class</th>
                        <th class="border-2">Asset Description</th>
                        <th class="border-2">Department</th>
                        <th class="border-2">Cost Center</th>
                        <th class="border-2">Qty</th>
                        <th class="border-2">UoM</th>
                        <th class="border-2">Product</th>
                        <th class="border-2">Status</th>
                        <th class="border-2">Book Value</th>
                        <th class="border-2">Detail</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                  @php 
                      $counter = ($data->currentPage() - 1) * $data->perPage() + 1;
                  @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td class="border-2">{{$counter}}</td>
                            <td class="border-2">{{$item->assetCodeEnginery}}</td>
                            <td class="border-2">{{$item->assetCodeAccounting}}</td>
                            <td class="border-2">{{$item->subAsset}}</td>
                            <td class="border-2">{{$item->assetGroup}}</td>
                            <td class="border-2">{{$item->assetClass}}</td>
                            <td class="border-2">{{$item->assetDescription}}</td>
                            <td class="border-2">{{$item->department}}</td>
                            <td class="border-2">{{$item->costCenter}}</td>
                            <td class="border-2">{{$item->quantity}}</td>
                            <td class="border-2">{{$item->uom}}</td>
                            <td class="border-2">{{$item->product}}</td>
                            <td class="border-2">{{$item->assetStatus}}</td>
                            <td class="border-2">{{$item->currentBookValue}}</td>
                            <td class="border-2">
                                <button>
                                    <a href='{{url('/listasset/assetdetail/'.$item->id)}}'>
                                        <img src="/image/search1.png" alt="search" class="w-6 translate-x-2">
                                    </a>
                                </button>
                            </td>
                        </tr>
                        @php $counter++; @endphp
                    @endforeach
                </tbody>
            </table>
          </div>
          <div class="flex justify-between py-10 px-6">
            <div class="flex text-white justify-center items-center w-fit bg-[#79C4FB] px-2 py-1 rounded">
              <a href="/listasset/addasset" class="font-bold">+ Add Asset</a>
            </div>
            <div >
              {{$data->links()}}
            </div>
          </div>
        </div>
    </main>
    {{-- MAIN --}}
  </body>
</html>