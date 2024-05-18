@extends('layouts/main')

@section('mainClass')

@push('cs')
@vite(['resources/js/realtimeChart1.js', 'resources/js/realtimeChart2.js'])

<div class="flex flex-wrap -mx-3 mb-4">
    <!-- card1 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-500">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-1 font-sans font-semibold leading-normal text-sm dark:text-white">Server address</p>
                <p class="mb-0 font-bold dark:text-gray-300" style="font-size: 0.785rem;">
                  @if(isset($data_livetest["server_address"]))
                      {{ $data_livetest["server_address"] }}
                      {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span> --}}
                  @else
                      -
                  @endif
                </p>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                {{-- <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"> --}}
                  <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-2m-2.2-4A3 3 0 0 0 19 8a3 3 0 0 0-5.2-2M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                  </svg>
                {{-- </i> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card2 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-500">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:text-white">Connection Count</p>
                <h5 class="mb-0 font-bold dark:text-gray-300">
                  @if(isset($data_livetest->input_livetest->connection_count))
                    {{ $data_livetest->input_livetest->connection_count }}
                      <span class="leading-normal text-sm font-weight-bolder text-lime-500 ml-2">+55%</span>
                  @else
                      - 
                  @endif
                  
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                {{-- <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i> --}}
                <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v4m0 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 0v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V8m0 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card3 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-500">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:text-white">Request Count</p>
                <h5 class="mb-0 font-bold dark:text-gray-300">
                  @if(isset($data_livetest->input_livetest->request_count))
                      {{ $data_livetest->input_livetest->request_count }} 
                      <span class="leading-normal text-sm font-weight-bolder text-lime-500 ">+55%</span>
                  @else
                      - 
                  @endif
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                {{-- <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i> --}}
                <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6s0 0 0 0v-.5A5.5 5.5 0 0 0 7.2 9H7a4 4 0 1 0 0 8h2.2m2.8 2v-9m0 0-2 2m2-2 2 2"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card4 -->
    <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-500">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/4 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm mb-1 dark:text-white" style="font-size: 8pt">Status Connection</p>
                
                <h5 class="mb-0 font-bold">
                @if(isset($input_livetest2["status_connect"]) && $input_livetest2["status_connect"] == 1)
                      {{-- {{ $data_livetest->input_livetest->status_connect }} --}}
                      <span class="bg-green-300 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Running</span>
                @else
                      {{-- {{ $data_livetest->input_livetest->status_connect }} --}}
                      <span class="bg-red-300 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Stoped</span>
                @endif
                </h5>
              </div>
            </div>
            <div class="px-2 ml-2 py-4 text-center basis-1/4">
              <a href="/realtimeTest">
                <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                </svg>
              </a>
            </div>
            <div class="px-3 text-right basis-1/4">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                {{-- <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i> --}}
                <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 1 3-17.5m-8 6 4 4L19.3 5M17 14v6m-3-3h6"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

{{-- <div class="w-full max-w-full mt-0 mb-6 md:mb-0"> --}}
    {{-- <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4"> --}}

        {{-- <canvas id="myChart"></canvas> --}}
        {{-- <div class="chart-container" style="position: relative; height:40vh; width:80vw">
            <canvas id="myChart"></canvas>
        </div> --}}
        
        
    {{-- </div> --}}
{{-- </div> --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-4">
  
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
  <canvas id="myChart"></canvas>
  </div>
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
  <canvas id="myChart2"></canvas>
  </div>

</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-4">
  
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
  <canvas id="myChart3"></canvas>
  </div>
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
  <canvas id="myChart4"></canvas>
  </div>

</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-2">
  
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
  <canvas id="myChart5"></canvas>
  </div>
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
  <canvas id="myChart6"></canvas>
  </div>

</div>

<div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 dark:bg-gray-800">
  <h1 class="mt-2 mb-2 ml-2 font-sans font-semibold dark:text-white">Perbandingan Tools Pengukuran</h1>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-2">
  
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
    <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3>
    <canvas id="myChart7"></canvas>
    <div class="flex justify-center">
      <p class="mt-2 mb-2 font-sans">50 Concurrent (Request/sec)</p>
    </div>
  </div>
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
    <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3>
    <canvas id="myChart8"></canvas>
    <div class="flex justify-center">
      <p class="mt-2 mb-2 font-sans">100 Concurrent (Request/sec)</p>
    </div>
  </div>

</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-2">
  
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
    <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Troughput (Kbps)</h3>
    <canvas id="myChart9"></canvas>
    <div class="flex justify-center">
      <p class="mt-2 mb-2 font-sans">50 Concurrent (Request/sec)</p>
    </div>
  </div>
  <div
      class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 "
  >
    <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Troughput (Kbps)</h3>
    <canvas id="myChart10"></canvas>
    <div class="flex justify-center">
      <p class="mt-2 mb-2 font-sans">100 Concurrent (Request/sec)</p>
    </div>
  </div>

</div>




{{-- <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 ">
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Service
                </th>
                <th scope="col" class="px-6 py-3">
                    Connection Count
                </th>
                <th scope="col" class="px-6 py-3">
                    Request Count
                </th>
                <th scope="col" class="px-6 py-3">
                    Connection Time (ms)
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Troughput (Kbps)
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    -
                </th>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    -
                </td>
                <td class="px-6 py-4">
                    -
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    -
                </th>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    -
                </td>
                <td class="px-6 py-4">
                    -
                </td>
            </tr>
            
        </tbody>
    </table>
  </div>
    
</div> --}}



<div class="border-2 border-dashed rounded-lg border-gray-100 dark:border-gray-800 h-32 mb-4">
  <div class="w-full" style="visibility: hidden">
    <label for="user_id_live" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Id</label>
    <div type="number" name="user_id_live" id="user_id_live" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">{{ $dataUserId }}</div>
  </div>
</div>



@push('js')
<script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>

{{-- <!-- Pada halaman HTML sisi client -->
<script type="module"></script> --}}

{{-- <script type="module">

</script> --}}


@endpush

@endsection