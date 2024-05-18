@extends('layouts/main')

@section('mainClass')


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
                  @if(isset($data_loadtest["server_address"]))
                      {{ $data_loadtest["server_address"] }}
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
                <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:text-white">Best Performance</p>
                <p id="bestPerformance" class="mt-1.5 font-sans font-semibold leading-normal text-xs dark:text-gray-300">
                  {{-- Placeholder for mostUsedAlgorithm --}}
                </p>
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
                <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:text-white" style="font-size: 9pt">Performance Indicators</p>
                <h5 class="mb-0 font-bold dark:text-gray-300">
                  {{-- @if(isset($data_livetest->input_livetest->request_count))
                      {{ $data_livetest->input_livetest->request_count }}  --}}
                      
                  {{-- @else --}}
                      
                  {{-- @endif --}}
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
          <div class="flex flex-row items-center justify-between">
            <div>
              <!-- Dropdown menu -->
              <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                </svg>
                Data Pengukuran
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>
              <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="filter-radio-example-1" for="dropdownRadio-1" type="radio" value="1" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300 whitespace-nowrap">Pengukuran ke-1</label>
                    </div>
                  </li>
                  <!-- tambahkan item dropdown radio yang lain di sini -->
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="filter-radio-example-2" for="dropdownRadio-2" type="radio" value="2" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300 whitespace-nowrap">Pengukuran ke-2</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="filter-radio-example-3" for="dropdownRadio-3" type="radio" value="3" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300 whitespace-nowrap">Pengukuran ke-3</label>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Tombol delete -->
            <form id="deleteForm" action="{{ route('loadAnalytic.destroy', ['loadAnalytic' => $dataLoadtests]) }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <input type="hidden" id="urutanPengukuran" name="urutan_pengukuran">
                <button type="submit" class="text-white border-0 bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-3 py-1.5 text-center me-2 ml-2" onclick="return confirm('Are you sure to DELETE data?')">Delete Data</button>
            </form>
            {{-- <form id="deleteForm" action="/loadAnalytic/{{ $dataLoadtests }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <input type="hidden" id="urutanPengukuran" name="urutan_pengukuran">
                <button type="submit" class="text-white border-0 bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-3 py-1.5 text-center me-2 ml-2" onclick="return confirm('Are you sure to DELETE data?')">Delete Data</button>
            </form> --}}
          </div>
        </div>
      </div>
    </div>
    
</div>

<div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border dark:bg-gray-800 mb-4 ">
  <div class="flex items-center justify-between">
    <h1 class="mt-2 mb-2 ml-4 font-sans font-semibold dark:text-white">Connection Times (ms)</h1>
    
  </div>
</div>



<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-4">

  @php
    $request_count_ldchart1 = null; // inisialisasi variabel
    $request_count_ldchart2 = null; // inisialisasi variabel
    $request_count_ldchart3 = null; // inisialisasi variabel
  @endphp

    <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
        <canvas id="ldChart1"></canvas>
        <div class="flex justify-center">
          @foreach($dataLoadtests as $dataLoadtest)
            @if($dataLoadtest->field_chart == 'field_chart1')
                @php
                    $request_count_ldchart1 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
                @endphp
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
                @break 
            @endif
          @endforeach
        </div>
    </div>
    

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart2"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart2')
              @php
                  $request_count_ldchart2 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart3"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart3')
              @php
                  $request_count_ldchart3 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart4"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">{{ $request_count_ldchart1 }}, {{ $request_count_ldchart2 }}, {{ $request_count_ldchart3 }} Concurrent connection</p>
        {{-- <p class="mb-2 mr-2 ml-2 font-sans">100 Concurrent connection</p>
        <p class="mb-2 mr-2 ml-2 font-sans">300 Concurrent connection</p> --}}
      </div>
    </div>
  
</div>

{{-- untuk parameter troughput --}}

<div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border dark:bg-gray-800 mb-4 ">
  <div class="flex items-center justify-between">
    <h1 class="mt-2 mb-2 ml-4 font-sans font-semibold dark:text-white">Troughput or Transfer Rate (Kbps)</h1>
  </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-4">

  @php
    $request_count_ldchart5 = null; // inisialisasi variabel
    $request_count_ldchart6 = null; // inisialisasi variabel
    $request_count_ldchart7 = null; // inisialisasi variabel
  @endphp

    <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
        <canvas id="ldChart5"></canvas>
        <div class="flex justify-center">
          @foreach($dataLoadtests as $dataLoadtest)
            @if($dataLoadtest->field_chart == 'field_chart1')
                @php
                    $request_count_ldchart5 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
                @endphp
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
                @break 
            @endif
          @endforeach
        </div>
    </div>
    

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart6"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart2')
              @php
                  $request_count_ldchart6 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart7"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart3')
              @php
                  $request_count_ldchart7 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart8"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">{{ $request_count_ldchart5 }}, {{ $request_count_ldchart6 }}, {{ $request_count_ldchart7 }} Concurrent connection</p>
        {{-- <p class="mb-2 mr-2 ml-2 font-sans">100 Concurrent connection</p>
        <p class="mb-2 mr-2 ml-2 font-sans">300 Concurrent connection</p> --}}
      </div>
    </div>
  
</div>

{{-- untuk parameter request/second --}}

<div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border dark:bg-gray-800 mb-4 ">
  <div class="flex items-center justify-between">
    <h1 class="mt-2 mb-2 ml-4 font-sans font-semibold dark:text-white">RPS or Request per Second (req/sec)</h1>
  </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-4">

  @php
    $request_count_ldchart8 = null; // inisialisasi variabel
    $request_count_ldchart9 = null; // inisialisasi variabel
    $request_count_ldchart10 = null; // inisialisasi variabel
  @endphp

    <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
        <canvas id="ldChart9"></canvas>
        <div class="flex justify-center">
          @foreach($dataLoadtests as $dataLoadtest)
            @if($dataLoadtest->field_chart == 'field_chart1')
                @php
                    $request_count_ldchart8 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
                @endphp
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
                @break 
            @endif
          @endforeach
        </div>
    </div>
    

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart10"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart2')
              @php
                  $request_count_ldchart9 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart11"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart3')
              @php
                  $request_count_ldchart10 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart12"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">{{ $request_count_ldchart8 }}, {{ $request_count_ldchart9 }}, {{ $request_count_ldchart10 }} Concurrent connection</p>
        {{-- <p class="mb-2 mr-2 ml-2 font-sans">100 Concurrent connection</p>
        <p class="mb-2 mr-2 ml-2 font-sans">300 Concurrent connection</p> --}}
      </div>
    </div>
  
</div>

{{-- untuk parameter time/request --}}

<div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border dark:bg-gray-800 mb-4 ">
  <div class="flex items-center justify-between">
    <h1 class="mt-2 mb-2 ml-4 font-sans font-semibold dark:text-white">Time per Request (ms)</h1>
  </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-4">

  @php
    $request_count_ldchart11 = null; // inisialisasi variabel
    $request_count_ldchart12 = null; // inisialisasi variabel
    $request_count_ldchart13 = null; // inisialisasi variabel
  @endphp

    <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
        <canvas id="ldChart13"></canvas>
        <div class="flex justify-center">
          @foreach($dataLoadtests as $dataLoadtest)
            @if($dataLoadtest->field_chart == 'field_chart1')
                @php
                    $request_count_ldchart11 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
                @endphp
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
                @break 
            @endif
          @endforeach
        </div>
    </div>
    

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart14"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart2')
              @php
                  $request_count_ldchart12 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart15"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart3')
              @php
                  $request_count_ldchart13 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart16"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">{{ $request_count_ldchart11 }}, {{ $request_count_ldchart12 }}, {{ $request_count_ldchart13 }} Concurrent connection</p>
        {{-- <p class="mb-2 mr-2 ml-2 font-sans">100 Concurrent connection</p>
        <p class="mb-2 mr-2 ml-2 font-sans">300 Concurrent connection</p> --}}
      </div>
    </div>
  
</div>

{{-- untuk parameter time testing --}}

<div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border dark:bg-gray-800 mb-4 ">
  <div class="flex items-center justify-between">
    <h1 class="mt-2 mb-2 ml-4 font-sans font-semibold dark:text-white">Time Testing (s)</h1>
  </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-4">

  @php
    $request_count_ldchart14 = null; // inisialisasi variabel
    $request_count_ldchart15 = null; // inisialisasi variabel
    $request_count_ldchart16 = null; // inisialisasi variabel
  @endphp

    <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
        <canvas id="ldChart17"></canvas>
        <div class="flex justify-center">
          @foreach($dataLoadtests as $dataLoadtest)
            @if($dataLoadtest->field_chart == 'field_chart1')
                @php
                    $request_count_ldchart14 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
                @endphp
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
                @break 
            @endif
          @endforeach
        </div>
    </div>
    

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart18"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart2')
              @php
                  $request_count_ldchart15 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart19"></canvas>
      <div class="flex justify-center">
        @foreach($dataLoadtests as $dataLoadtest)
          @if($dataLoadtest->field_chart == 'field_chart3')
              @php
                  $request_count_ldchart16 = intval($dataLoadtest->request_count); // menyimpan nilai ke dalam variabel
              @endphp
              <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent connection</p>
              @break 
          @endif
        @endforeach
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart20"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">{{ $request_count_ldchart14 }}, {{ $request_count_ldchart15 }}, {{ $request_count_ldchart16 }} Concurrent connection</p>
        {{-- <p class="mb-2 mr-2 ml-2 font-sans">100 Concurrent connection</p>
        <p class="mb-2 mr-2 ml-2 font-sans">300 Concurrent connection</p> --}}
      </div>
    </div>
  
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table id="table-container" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

  </table>
</div>




@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Mendapatkan formulir delete berdasarkan ID
    const deleteForm = document.getElementById('deleteForm');
    // Mendapatkan input urutan_pengukuran
    const urutanPengukuranInput = document.getElementById('urutanPengukuran');
    
    // Mendapatkan semua input radio dropdown
    const dropdownItems = document.querySelectorAll('#dropdownRadio input[type="radio"]');
    
    // Menambahkan event listener untuk submit formulir delete
    deleteForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Mendapatkan nilai urutan_pengukuran dari input radio yang dipilih
        var urutanPengukuran;
        dropdownItems.forEach(function(item) {
            if (item.checked) {
                urutanPengukuran = item.value;
            }
        });
        
        // Jika tidak ada input radio yang dipilih, berikan pesan kesalahan
        if (!urutanPengukuran) {
            alert('Please select a measurement order from the dropdown.');
            return;
        }
        
        // Setel nilai urutan_pengukuran ke input tersembunyi
        urutanPengukuranInput.value = urutanPengukuran;
        
        // Submit formulir delete
        this.submit();
    });

    // Your existing code for handling dropdown selection
    // const dropdownItems = document.querySelectorAll('#dropdownRadio input[type="radio"]');
    
    // Mendapatkan nilai urutan_pengukuran dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const selectedValue = urlParams.get('urutan_pengukuran');
    
    // Memeriksa nilai urutan_pengukuran dan menandai tombol dropdown yang sesuai
    if (selectedValue) {
        dropdownItems.forEach(function(item) {
            if (item.value === selectedValue) {
                item.checked = true;
            }
        });
    }

    // Menambahkan event listener untuk setiap tombol dropdown
    dropdownItems.forEach(function(item) {
        item.addEventListener('change', function() {
            // Dapatkan nilai yang dipilih
            var selectedValue = this.value;

            // Redirect halaman dengan menambahkan nilai yang dipilih sebagai query parameter
            window.location.href = window.location.pathname + '?urutan_pengukuran=' + selectedValue;
            
            console.log(selectedValue);
        });
    });
});

// document.addEventListener('DOMContentLoaded', function () {
//     // Mendapatkan formulir delete berdasarkan ID
//     const deleteForm = document.getElementById('deleteForm');
//     const urutanPengukuranInput = document.getElementById('urutanPengukuran');
//     const dropdownItems = document.querySelectorAll('#dropdownRadio input[type="radio"]');

//     // Event listener untuk submit formulir delete
//     deleteForm.addEventListener('submit', function(event) {
//         event.preventDefault();

//         // Mendapatkan nilai urutan_pengukuran dari input radio yang dipilih
//         let urutanPengukuran = null;
//         dropdownItems.forEach(function(item) {
//             if (item.checked) {
//                 urutanPengukuran = item.value;
//             }
//         });

//         if (!urutanPengukuran) {
//             alert('Please select a measurement order from the dropdown.');
//             return;
//         }

//         // Kirim permintaan POST menggunakan fetch
//         fetch('/loadAnalytic', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
//             },
//             body: JSON.stringify({ urutan_pengukuran: urutanPengukuran })
//         })
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Network response was not ok');
//             }
//             return response.json();
//         })
//         .then(data => {
//             console.log('Data deleted successfully:', data);
//             window.location.reload(); // Reload halaman setelah penghapusan berhasil
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             alert('An error occurred while deleting data.');
//         });
//     });

//     // Menangani pilihan dropdown dan nilai urutan_pengukuran dari URL
//     const urlParams = new URLSearchParams(window.location.search);
//     const selectedValue = urlParams.get('urutan_pengukuran');

//     if (selectedValue) {
//         dropdownItems.forEach(function(item) {
//             if (item.value === selectedValue) {
//                 item.checked = true;
//             }
//         });
//     }

//     // Event listener untuk setiap tombol dropdown
//     dropdownItems.forEach(function(item) {
//         item.addEventListener('change', function() {
//             const selectedValue = this.value;
//             window.location.href = window.location.pathname + '?urutan_pengukuran=' + selectedValue;
//         });
//     });
// });


</script>

<script>

var dataLoadtest = {!! json_encode($dataLoadtests) !!};
console.log(dataLoadtest);


// untuk field_chart2
let dataPengukuranFromLoadtest1a = [];
let dataPengukuranFromLoadtest2a = [];
let dataPengukuranFromLoadtest3a = [];
let dataPengukuranFromLoadtest4a = [];

// untuk field_chart1
let dataPengukuranFromLoadtest1b = [];
let dataPengukuranFromLoadtest2b = [];
let dataPengukuranFromLoadtest3b = [];
let dataPengukuranFromLoadtest4b = [];

// untuk field_chart3
let dataPengukuranFromLoadtest1c = [];
let dataPengukuranFromLoadtest2c = [];
let dataPengukuranFromLoadtest3c = [];
let dataPengukuranFromLoadtest4c = [];

// untuk field_chart4
let dataPengukuranFromLoadtest1d = [];

dataLoadtest.forEach(entry => { // Gunakan entry untuk setiap objek dalam array

  const fieldChart = entry.field_chart;
  const algoritmaLB = entry.algortima_LB;
  // console.log(algoritmaLB)

  if (fieldChart == 'field_chart1'){
    if (algoritmaLB == 'round_robin'){
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          rb_cn: parseFloat(entry.connection_time),
          rb_tr: parseFloat(entry.transfer_rate),
          rb_rs: parseFloat(entry.request_second),
          rb_trq: parseFloat(entry.time_request),
          rb_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest1b.push(newData); // Tambahkan data ke array
    }
    else if (algoritmaLB == 'weight_round_robin'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          wrb_cn: parseFloat(entry.connection_time),
          wrb_tr: parseFloat(entry.transfer_rate),
          wrb_rs: parseFloat(entry.request_second),
          wrb_trq: parseFloat(entry.time_request),
          wrb_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest2b.push(newData); // Tambahkan data ke array
      
    }
    else if (algoritmaLB == 'least_connection'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          lc_cn: parseFloat(entry.connection_time),
          lc_tr: parseFloat(entry.transfer_rate),
          lc_rs: parseFloat(entry.request_second),
          lc_trq: parseFloat(entry.time_request),
          lc_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest3b.push(newData); // Tambahkan data ke array
      
    }
    else if (algoritmaLB == 'weight_least_connection'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          wlc_cn: parseFloat(entry.connection_time),
          wlc_tr: parseFloat(entry.transfer_rate),
          wlc_rs: parseFloat(entry.request_second),
          wlc_trq: parseFloat(entry.time_request),
          wlc_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest4b.push(newData); // Tambahkan data ke array
      
    }
  }

  else if (fieldChart == 'field_chart2'){
    if (algoritmaLB == 'round_robin'){
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          rb_cn: parseFloat(entry.connection_time),
          rb_tr: parseFloat(entry.transfer_rate),
          rb_rs: parseFloat(entry.request_second),
          rb_trq: parseFloat(entry.time_request),
          rb_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest1a.push(newData); // Tambahkan data ke array
    }
    else if (algoritmaLB == 'weight_round_robin'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          wrb_cn: parseFloat(entry.connection_time),
          wrb_tr: parseFloat(entry.transfer_rate),
          wrb_rs: parseFloat(entry.request_second),
          wrb_trq: parseFloat(entry.time_request),
          wrb_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest2a.push(newData); // Tambahkan data ke array
      
    }
    else if (algoritmaLB == 'least_connection'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          lc_cn: parseFloat(entry.connection_time),
          lc_tr: parseFloat(entry.transfer_rate),
          lc_rs: parseFloat(entry.request_second),
          lc_trq: parseFloat(entry.time_request),
          lc_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest3a.push(newData); // Tambahkan data ke array
      
    }
    else if (algoritmaLB == 'weight_least_connection'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          wlc_cn: parseFloat(entry.connection_time),
          wlc_tr: parseFloat(entry.transfer_rate),
          wlc_rs: parseFloat(entry.request_second),
          wlc_trq: parseFloat(entry.time_request),
          wlc_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest4a.push(newData); // Tambahkan data ke array
      
    }
  }

  else if (fieldChart == 'field_chart3'){
    if (algoritmaLB == 'round_robin'){
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          rb_cn: parseFloat(entry.connection_time),
          rb_tr: parseFloat(entry.transfer_rate),
          rb_rs: parseFloat(entry.request_second),
          rb_trq: parseFloat(entry.time_request),
          rb_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest1c.push(newData); // Tambahkan data ke array
    }
    else if (algoritmaLB == 'weight_round_robin'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          wrb_cn: parseFloat(entry.connection_time),
          wrb_tr: parseFloat(entry.transfer_rate),
          wrb_rs: parseFloat(entry.request_second),
          wrb_trq: parseFloat(entry.time_request),
          wrb_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest2c.push(newData); // Tambahkan data ke array
      
    }
    else if (algoritmaLB == 'least_connection'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          lc_cn: parseFloat(entry.connection_time),
          lc_tr: parseFloat(entry.transfer_rate),
          lc_rs: parseFloat(entry.request_second),
          lc_trq: parseFloat(entry.time_request),
          lc_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest3c.push(newData); // Tambahkan data ke array
      
    }
    else if (algoritmaLB == 'weight_least_connection'){ 
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          wlc_cn: parseFloat(entry.connection_time),
          wlc_tr: parseFloat(entry.transfer_rate),
          wlc_rs: parseFloat(entry.request_second),
          wlc_trq: parseFloat(entry.time_request),
          wlc_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest4c.push(newData); // Tambahkan data ke array
      
    }
  }

  else if (fieldChart == 'field_chart4'){
    if (algoritmaLB == 'no_load_balancer'){
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          nlb_cn: parseFloat(entry.connection_time),
          nlb_tr: parseFloat(entry.transfer_rate),
          nlb_rs: parseFloat(entry.request_second),
          nlb_trq: parseFloat(entry.time_request),
          nlb_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
          req : entry.request_count,
      };

      dataPengukuranFromLoadtest1d.push(newData); // Tambahkan data ke array
    }
    
  }


  // Tambahkan else if lainnya jika diperlukan
});


// data untuk field_chart2
const dataFixedLoad1 = dataPengukuranFromLoadtest1a.slice(0, 3);
console.log(dataFixedLoad1)
const dataFixedLoad2 = dataPengukuranFromLoadtest2a.slice(0, 3);
console.log(dataFixedLoad2)
const dataFixedLoad3 = dataPengukuranFromLoadtest3a.slice(0, 3);
console.log(dataFixedLoad3)
const dataFixedLoad4 = dataPengukuranFromLoadtest4a.slice(0, 3);
console.log(dataFixedLoad4)

// data untuk field_chart1
const dataFixedLoad1b = dataPengukuranFromLoadtest1b.slice(0, 3);
console.log(dataFixedLoad1b)
const dataFixedLoad2b = dataPengukuranFromLoadtest2b.slice(0, 3);
console.log(dataFixedLoad2b)
const dataFixedLoad3b = dataPengukuranFromLoadtest3b.slice(0, 3);
console.log(dataFixedLoad3b)
const dataFixedLoad4b = dataPengukuranFromLoadtest4b.slice(0, 3);
console.log(dataFixedLoad4b)

// data untuk field_chart3
const dataFixedLoad1c = dataPengukuranFromLoadtest1c.slice(0, 3);
console.log(dataFixedLoad1b)
const dataFixedLoad2c = dataPengukuranFromLoadtest2c.slice(0, 3);
console.log(dataFixedLoad2b)
const dataFixedLoad3c = dataPengukuranFromLoadtest3c.slice(0, 3);
console.log(dataFixedLoad3b)
const dataFixedLoad4c = dataPengukuranFromLoadtest4c.slice(0, 3);
console.log(dataFixedLoad4c)

// data untuk field_chart4
const dataFixedLoad1d = dataPengukuranFromLoadtest1d;
// Urutkan dataLoadtest berdasarkan request_count terkecil ke terbesar
dataFixedLoad1d.sort((a, b) => a.req - b.req);
console.log(dataFixedLoad1d)


// Fungsi untuk menggabungkan nilai objek dengan nilai conn yang sama
function dataDuplicateConn(arr1, arr2, arr3, arr4) {
  const dataObj = {};

  // Gabungkan objek dari arr1 ke dataObj
  arr1.forEach(obj => {
    const conn = obj.conn;
    if (!dataObj[conn]) {
      dataObj[conn] = { ...obj };
    } else {
      // Tambahkan nilai-nilai objek yang ada pada arr1 ke objek yang sudah ada pada dataObj
      for (let key in obj) {
        if (key !== 'conn') {
          dataObj[conn][key] = obj[key];
        }
      }
    }
  });

  // Gabungkan objek dari arr2 ke dataObj
  arr2.forEach(obj => {
    const conn = obj.conn;
    if (!dataObj[conn]) {
      dataObj[conn] = { ...obj };
    } else {
      // Tambahkan nilai-nilai objek yang ada pada arr2 ke objek yang sudah ada pada dataObj
      for (let key in obj) {
        if (key !== 'conn' && !dataObj[conn][key]) {
          dataObj[conn][key] = obj[key];
        }
      }
    }
  });

  // Gabungkan objek dari arr3 ke dataObj
  arr3.forEach(obj => {
    const conn = obj.conn;
    if (!dataObj[conn]) {
      dataObj[conn] = { ...obj };
    } else {
      // Tambahkan nilai-nilai objek yang ada pada arr2 ke objek yang sudah ada pada dataObj
      for (let key in obj) {
        if (key !== 'conn' && !dataObj[conn][key]) {
          dataObj[conn][key] = obj[key];
        }
      }
    }
  });

  // Gabungkan objek dari arr4 ke dataObj
  arr4.forEach(obj => {
    const conn = obj.conn;
    if (!dataObj[conn]) {
      dataObj[conn] = { ...obj };
    } else {
      // Tambahkan nilai-nilai objek yang ada pada arr2 ke objek yang sudah ada pada dataObj
      for (let key in obj) {
        if (key !== 'conn' && !dataObj[conn][key]) {
          dataObj[conn][key] = obj[key];
        }
      }
    }
  });

  // Konversi dataObj menjadi array hasil gabungan
  const dataArray = Object.values(dataObj);

  return dataArray;
}



//chart untuk connection times
// const dataPengukuran1 = [{x: '100 connection', rb: 30, wrb: 15.7, lc: 10.3, wlc: 21.3}, {x: '250 connection', rb: 22, wrb: 24.34, lc: 12.3, wlc: 23.3}, {x: '350 connection', rb: 19, wrb: 21.34, lc: 9.3, wlc: 21.3}];
// Gabungkan nilai objek dengan nilai conn yang sama
const dataChart1 = dataDuplicateConn(dataFixedLoad1b, dataFixedLoad2b, dataFixedLoad3b, dataFixedLoad4b);
// Output hasil gabungan
console.log('Merged data:', dataChart1);

// Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
dataChart1.sort((a, b) => a.conn - b.conn);


const ctx = document.getElementById('ldChart1').getContext('2d');
const ldChart1 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dataChart1.map(entry => entry.x),
        datasets: [{
            label: 'Round Robin',
            data: dataChart1.map(entry => entry.rb_cn || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart1.map(entry => entry.wrb_cn || 0)
        }, {
            label: 'Least Connection',
            data: dataChart1.map(entry => entry.lc_cn || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart1.map(entry => entry.wlc_cn || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});


// Gabungkan nilai objek dengan nilai conn yang sama
const dataChart2 = dataDuplicateConn(dataFixedLoad1, dataFixedLoad2, dataFixedLoad3, dataFixedLoad4);
// Output hasil gabungan
console.log('Merged data:', dataChart2);

// Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
dataChart2.sort((a, b) => a.conn - b.conn);

const ctx2 = document.getElementById('ldChart2').getContext('2d');
const ldChart2 = new Chart(ctx2, {
  type: 'line',
  data: {
    labels: dataChart2.map(entry => entry.x),
    datasets: [{
        label: 'Round Robin',
        data: dataChart2.map(entry => entry.rb_cn || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Round Robin',
        data: dataChart2.map(entry => entry.wrb_cn || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Least Connection',
        data: dataChart2.map(entry => entry.lc_cn || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Least Connection',
        data: dataChart2.map(entry => entry.wlc_cn || 0) // Tambahkan nilai default jika tidak ada data
      }
    ]
  },
  options: {
    scales: {
      x: {},
      y: {
        // min: 0,
        ticks: {
          padding: 30
        },
      }
    }
  }
});


// const dataPengukuran3 = [{x: '100 connection', rb: 30, wrb: 15.7, lc: 10.3, wlc: 21.3}, {x: '250 connection', rb: 22, wrb: 24.34, lc: 12.3, wlc: 23.3}, {x: '350 connection', rb: 19, wrb: 21.34, lc: 9.3, wlc: 21.3}];

// Gabungkan nilai objek dengan nilai conn yang sama
const dataChart3 = dataDuplicateConn(dataFixedLoad1c, dataFixedLoad2c, dataFixedLoad3c, dataFixedLoad4c);
// Output hasil gabungan
console.log('Merged data:', dataChart3);

// Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
dataChart3.sort((a, b) => a.conn - b.conn);

const ctx3 = document.getElementById('ldChart3').getContext('2d');
const ldChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: dataChart3.map(entry => entry.x),
        datasets: [{
            label: 'Round Robin',
            data: dataChart3.map(entry => entry.rb_cn || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart3.map(entry => entry.wrb_cn || 0)
        }, {
            label: 'Least Connection',
            data: dataChart3.map(entry => entry.lc_cn || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart3.map(entry => entry.wlc_cn || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});


// Objek untuk menyimpan data berdasarkan jumlah req yang sama
const dataNoLB = [];

// Memisahkan data berdasarkan jumlah req yang sama
dataFixedLoad1d.forEach(entry => {
    if (!dataNoLB.hasOwnProperty(entry.req)) {
        // Jika belum ada entri untuk jumlah req ini, buat array kosong untuk menyimpan entri
        dataNoLB[entry.req] = [];
    }
    // Tambahkan entri ke dalam array yang sesuai dengan jumlah reqnya
    dataNoLB[entry.req].push(entry);
});

console.log(dataNoLB);

// Membuat variabel baru untuk setiap jumlah req yang sama
let number = 1; // Counter untuk memberikan nama variabel baru
for (const req in dataNoLB) {
    if (Object.hasOwnProperty.call(dataNoLB, req)) {
        // Menyimpan array entri untuk jumlah req ini ke variabel baru dengan nama dataReq1, dataReq2, dst
        window[`dataNoLB${number}`] = dataNoLB[req];
        number++; // Meningkatkan counter untuk nama variabel berikutnya
    }
}
// console.log("p1 :", dataNoLB1);
// console.log("p2 :", dataNoLB2);
// console.log("p3 :", dataNoLB3);
// Mengecek apakah variabel dataNoLB1, dataNoLB2, dan dataNoLB3 sudah didefinisikan
if (typeof dataNoLB1 === 'undefined') {
    dataNoLB1 = [
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        },
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        },
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        }
    ];
}

if (typeof dataNoLB2 === 'undefined') {
    dataNoLB2 = [
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        },
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        },
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        }
    ];
}

if (typeof dataNoLB3 === 'undefined') {
    dataNoLB3 = [
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        },
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        },
        {
            "x": "",
            "nlb_cn": 0,
            "nlb_tr": 0,
            "nlb_rs": 0,
            "nlb_trq": 0,
            "nlb_tt": 0,
            "conn": 0,
            "req": 0
        }
    ];
}

// console.log("p1 :", dataNoLB1);
// console.log("p2 :", dataNoLB2);
// console.log("p3 :", dataNoLB3);


// function nilaiterkecil(data) {
//     let minValues = [];
//     data.forEach((entry, index) => {
//         // Helper function to filter out empty values and find the min
//         const findMin = (values) => Math.min(...values.filter(value => value !== undefined && value !== null && value !== ''));

//         // Helper function to filter out empty values and find the max
//         const findMax = (values) => Math.max(...values.filter(value => value !== undefined && value !== null && value !== ''));

//         // Calculate min and max values
//         let rb_cn_values = [entry.rb_cn, entry.wrb_cn, entry.lc_cn, entry.wlc_cn];
//         let rb_tr_values = [entry.rb_tr, entry.wrb_tr, entry.lc_tr, entry.wlc_tr];
//         let rb_rs_values = [entry.rb_rs, entry.wrb_rs, entry.lc_rs, entry.wlc_rs];
//         let rb_trq_values = [entry.rb_trq, entry.wrb_trq, entry.lc_trq, entry.wlc_trq];
//         let rb_tt_values = [entry.rb_tt, entry.wrb_tt, entry.lc_tt, entry.wlc_tt];

//         let hasil1;
//         let hasil2 = findMin(rb_cn_values);
//         if (hasil2 === entry.rb_cn) {
//             hasil1 = 'round_robin';
//         } else if (hasil2 === entry.wrb_cn) {
//             hasil1 = 'weight_round_robin';
//         } else if (hasil2 === entry.lc_cn) {
//             hasil1 = 'least_connection';
//         } else if (hasil2 === entry.wlc_cn) {
//             hasil1 = 'weight_least_connection';
//         }

//         let hasil1b;
//         let hasil2b = findMax(rb_tr_values);
//         if (hasil2b === entry.rb_tr) {
//             hasil1b = 'round_robin';
//         } else if (hasil2b === entry.wrb_tr) {
//             hasil1b = 'weight_round_robin';
//         } else if (hasil2b === entry.lc_tr) {
//             hasil1b = 'least_connection';
//         } else if (hasil2b === entry.wlc_tr) {
//             hasil1b = 'weight_least_connection';
//         }

//         let hasil1c;
//         let hasil2c = findMax(rb_rs_values);
//         if (hasil2c === entry.rb_rs) {
//             hasil1c = 'round_robin';
//         } else if (hasil2c === entry.wrb_rs) {
//             hasil1c = 'weight_round_robin';
//         } else if (hasil2c === entry.lc_rs) {
//             hasil1c = 'least_connection';
//         } else if (hasil2c === entry.wlc_rs) {
//             hasil1c = 'weight_least_connection';
//         }

//         let hasil1d;
//         let hasil2d = findMin(rb_trq_values);
//         if (hasil2d === entry.rb_trq) {
//             hasil1d = 'round_robin';
//         } else if (hasil2d === entry.wrb_trq) {
//             hasil1d = 'weight_round_robin';
//         } else if (hasil2d === entry.lc_trq) {
//             hasil1d = 'least_connection';
//         } else if (hasil2d === entry.wlc_trq) {
//             hasil1d = 'weight_least_connection';
//         }

//         let hasil1e;
//         let hasil2e = findMin(rb_tt_values);
//         if (hasil2e === entry.rb_tt) {
//             hasil1e = 'round_robin';
//         } else if (hasil2e === entry.wrb_tt) {
//             hasil1e = 'weight_round_robin';
//         } else if (hasil2e === entry.lc_tt) {
//             hasil1e = 'least_connection';
//         } else if (hasil2e === entry.wlc_tt) {
//             hasil1e = 'weight_least_connection';
//         }

//         minValues[index] = {
//             lb_cn: hasil2,
//             algoritmaLB_cn: hasil1,
//             lb_tr: hasil2b,
//             algoritmaLB_tr: hasil1b,
//             lb_rs: hasil2c,
//             algoritmaLB_rs: hasil1c,
//             lb_trq: hasil2d,
//             algoritmaLB_trq: hasil1d,
//             lb_tt: hasil2e,
//             algoritmaLB_tt: hasil1e,
//             req: entry.req,
//             conn: entry.conn,
//         };
//     });
//     return minValues;
// }

// // menjalankan fungsi untuk chart 1
// // console.log("Ini dataChart1", dataChart1)
// const hasildata1 = nilaiterkecil(dataChart1);
// console.log("Nilai terkecil dari setiap propertie rb_cn, wrb_cn, lc_cn, wlc_cn:");
// // console.log(hasildata1);

// // menjalankan fungsi untuk chart 3
// const hasildata2 = nilaiterkecil(dataChart2);
// console.log("Nilai terkecil dari setiap propertie rb_cn, wrb_cn, lc_cn, wlc_cn:");
// // console.log(hasildata2);

// // menjalankan fungsi untuk chart 2
// const hasildata3 = nilaiterkecil(dataChart3);
// console.log("Nilai terkecil dari setiap propertie rb_cn, wrb_cn, lc_cn, wlc_cn:");
// // console.log(hasildata3);

// console.log(hasildata1);
// console.log(hasildata2);
// console.log(hasildata3);
// Fungsi untuk mendapatkan nilai terkecil dari data
function nilaiterkecil(data) {
    let minValues = [];
    if (!data || data.length === 0) return null; // Jika data kosong, kembalikan null

    data.forEach((entry, index) => {
        // Helper function to filter out empty values and find the min
        const findMin = (values) => Math.min(...values.filter(value => value !== undefined && value !== null && value !== ''));

        // Helper function to filter out empty values and find the max
        const findMax = (values) => Math.max(...values.filter(value => value !== undefined && value !== null && value !== ''));

        // Calculate min and max values
        let rb_cn_values = [entry.rb_cn, entry.wrb_cn, entry.lc_cn, entry.wlc_cn];
        let rb_tr_values = [entry.rb_tr, entry.wrb_tr, entry.lc_tr, entry.wlc_tr];
        let rb_rs_values = [entry.rb_rs, entry.wrb_rs, entry.lc_rs, entry.wlc_rs];
        let rb_trq_values = [entry.rb_trq, entry.wrb_trq, entry.lc_trq, entry.wlc_trq];
        let rb_tt_values = [entry.rb_tt, entry.wrb_tt, entry.lc_tt, entry.wlc_tt];

        let hasil1;
        let hasil2 = findMin(rb_cn_values);
        if (hasil2 === entry.rb_cn) {
            hasil1 = 'round_robin';
        } else if (hasil2 === entry.wrb_cn) {
            hasil1 = 'weight_round_robin';
        } else if (hasil2 === entry.lc_cn) {
            hasil1 = 'least_connection';
        } else if (hasil2 === entry.wlc_cn) {
            hasil1 = 'weight_least_connection';
        }

        let hasil1b;
        let hasil2b = findMax(rb_tr_values);
        if (hasil2b === entry.rb_tr) {
            hasil1b = 'round_robin';
        } else if (hasil2b === entry.wrb_tr) {
            hasil1b = 'weight_round_robin';
        } else if (hasil2b === entry.lc_tr) {
            hasil1b = 'least_connection';
        } else if (hasil2b === entry.wlc_tr) {
            hasil1b = 'weight_least_connection';
        }

        let hasil1c;
        let hasil2c = findMax(rb_rs_values);
        if (hasil2c === entry.rb_rs) {
            hasil1c = 'round_robin';
        } else if (hasil2c === entry.wrb_rs) {
            hasil1c = 'weight_round_robin';
        } else if (hasil2c === entry.lc_rs) {
            hasil1c = 'least_connection';
        } else if (hasil2c === entry.wlc_rs) {
            hasil1c = 'weight_least_connection';
        }

        let hasil1d;
        let hasil2d = findMin(rb_trq_values);
        if (hasil2d === entry.rb_trq) {
            hasil1d = 'round_robin';
        } else if (hasil2d === entry.wrb_trq) {
            hasil1d = 'weight_round_robin';
        } else if (hasil2d === entry.lc_trq) {
            hasil1d = 'least_connection';
        } else if (hasil2d === entry.wlc_trq) {
            hasil1d = 'weight_least_connection';
        }

        let hasil1e;
        let hasil2e = findMin(rb_tt_values);
        if (hasil2e === entry.rb_tt) {
            hasil1e = 'round_robin';
        } else if (hasil2e === entry.wrb_tt) {
            hasil1e = 'weight_round_robin';
        } else if (hasil2e === entry.lc_tt) {
            hasil1e = 'least_connection';
        } else if (hasil2e === entry.wlc_tt) {
            hasil1e = 'weight_least_connection';
        }

        minValues[index] = {
            lb_cn: hasil2,
            algoritmaLB_cn: hasil1,
            lb_tr: hasil2b,
            algoritmaLB_tr: hasil1b,
            lb_rs: hasil2c,
            algoritmaLB_rs: hasil1c,
            lb_trq: hasil2d,
            algoritmaLB_trq: hasil1d,
            lb_tt: hasil2e,
            algoritmaLB_tt: hasil1e,
            req: entry.req,
            conn: entry.conn,
        };
    });
    return minValues;
}

// Menentukan nilai default
const defaultData = [
    {
        lb_cn: 0,
        algoritmaLB_cn: " ",
        lb_tr: 0,
        algoritmaLB_tr: " ",
        lb_rs: 0,
        algoritmaLB_rs: " ",
        lb_trq: 0,
        algoritmaLB_trq: " ",
        lb_tt: 0,
        algoritmaLB_tt: " ",
        req: 0,
        conn: 0,
    },
    {
        lb_cn: 0,
        algoritmaLB_cn: " ",
        lb_tr: 0,
        algoritmaLB_tr: " ",
        lb_rs: 0,
        algoritmaLB_rs: " ",
        lb_trq: 0,
        algoritmaLB_trq: " ",
        lb_tt: 0,
        algoritmaLB_tt: " ",
        req: 0,
        conn: 0,
    },
    {
        lb_cn: 0,
        algoritmaLB_cn: " ",
        lb_tr: 0,
        algoritmaLB_tr: " ",
        lb_rs: 0,
        algoritmaLB_rs: " ",
        lb_trq: 0,
        algoritmaLB_trq: " ",
        lb_tt: 0,
        algoritmaLB_tt: " ",
        req: 0,
        conn: 0,
    }
];

// Menjalankan fungsi untuk chart 1
const hasildata1 = nilaiterkecil(dataChart1) ?? defaultData;
console.log("Nilai terkecil dari setiap propertie rb_cn, wrb_cn, lc_cn, wlc_cn:");
console.log(hasildata1);

// Menjalankan fungsi untuk chart 2
const hasildata2 = nilaiterkecil(dataChart2) ?? defaultData;
console.log("Nilai terkecil dari setiap propertie rb_cn, wrb_cn, lc_cn, wlc_cn:");
console.log(hasildata2);

// Menjalankan fungsi untuk chart 3
const hasildata3 = nilaiterkecil(dataChart3) ?? defaultData;
console.log("Nilai terkecil dari setiap propertie rb_cn, wrb_cn, lc_cn, wlc_cn:");
console.log(hasildata3);

// fungsi untuk menggabungkan data hasil pengukuran no lb dengan lb
function mergeArraysByReqAndConn(data1, data2) {
    data1.forEach(entry1 => {
        const foundEntryIndex = data2.findIndex(entry2 => entry1.req === entry2.req && entry1.conn === entry2.conn);
        if (foundEntryIndex !== -1) {
            data2[foundEntryIndex] = { ...data2[foundEntryIndex], ...entry1 };
        } else {
            data2.push(entry1);
        }
    });
    return data2;
}

var dataPengukuran4; // data poengukuran chart 4
var dataChart4a;
var dataChart4b;
var dataChart4c;


if (typeof dataNoLB1 !== 'undefined' && dataNoLB1.length > 0 && typeof hasildata1 !== 'undefined' && hasildata1.length > 0) {
    // eksekusi fungsi untuk menggabungkan data
    dataChart4a = mergeArraysByReqAndConn(dataNoLB1, hasildata1);
    console.log("hasil data chart 4 :", dataChart4a);
}

if (typeof dataNoLB2 !== 'undefined' && dataNoLB2.length > 0 && typeof hasildata2 !== 'undefined' && hasildata2.length > 0) {
    // eksekusi fungsi untuk menggabungkan data
    dataChart4b = mergeArraysByReqAndConn(dataNoLB2, hasildata2);
    console.log("hasil data chart 4 :", dataChart4b);
}

if (typeof dataNoLB3 !== 'undefined' && dataNoLB3.length > 0 && typeof hasildata3 !== 'undefined' && hasildata3.length > 0) {
    // eksekusi fungsi untuk menggabungkan data
    dataChart4c = mergeArraysByReqAndConn(dataNoLB3, hasildata3);
    console.log("hasil data chart 4 :", dataChart4c);
}


if (typeof dataChart4a !== 'undefined'){

  dataPengukuran4 = [
    ...dataChart4a.map(entry => ({ x: entry.x, lb: entry.lb_cn, nlb_cn: entry.nlb_cn })),
    { x: '', lb: 0, nlb_cn: 0 }, // Menambahkan baris kosong untuk memisahkan grup
    ...dataChart4b.map(entry => ({ x: entry.x, lb: entry.lb_cn, nlb_cn: entry.nlb_cn })),
    { x: '', lb: 0, nlb_cn: 0 }, // Menambahkan baris kosong untuk memisahkan grup
    ...dataChart4c.map(entry => ({ x: entry.x, lb: entry.lb_cn, nlb_cn: entry.nlb_cn })),
  ];

  // dataPengukuran4 = [
  //   ...dataChart4a.map(entry => ({ 
  //     x: entry.x, 
  //     lb: entry.lb_cn !== undefined ? entry.lb_cn : 0,
  //     nlb_cn: entry.nlb_cn !== undefined ? entry.nlb_cn : 0 
  //   })),
  //   { x: '', lb: 0, nlb_cn: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  //   ...dataChart4b.map(entry => ({ 
  //     x: entry.x, 
  //     lb: entry.lb_cn !== undefined ? entry.lb_cn : 0,
  //     nlb_cn: entry.nlb_cn !== undefined ? entry.nlb_cn : 0 
  //   })),
  //   { x: '', lb: 0, nlb_cn: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  //   ...dataChart4c.map(entry => ({ 
  //     x: entry.x, 
  //     lb: entry.lb_cn !== undefined ? entry.lb_cn : 0,
  //     nlb_cn: entry.nlb_cn !== undefined ? entry.nlb_cn : 0 
  //   })),
  // ];

} else {

  dataPengukuran4 = [

  ];

}

const ctx4 = document.getElementById('ldChart4').getContext('2d');
const ldChart4 = new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: dataPengukuran4.map(entry => entry.x),
        datasets: [{
            label: 'Web Server with LB',
            data: dataPengukuran4.map(entry => entry.lb || 0)
        }, {
            label: 'Web Server with No LB',
            data: dataPengukuran4.map(entry => entry.nlb_cn || 0)
        }]
    },
    options: {
        indexAxis: 'x',
        scales: {
            x: {
                grouped: true, // Mengelompokkan label
                // display: false,
            },
            y: {
                // min: 0, // Nilai minimum sumbu y
                // max: 35, // Nilai maksimum sumbu y
                ticks: {
                    // padding: 30, // Tambahkan padding di sini
                    // stepSize: 10,
                },
            }
        }
    }
});



// chart untuk parameter troughput

// const dataPengukuran1 = [{x: '100 connection', rb: 30, wrb: 15.7, lc: 10.3, wlc: 21.3}, {x: '250 connection', rb: 22, wrb: 24.34, lc: 12.3, wlc: 23.3}, {x: '350 connection', rb: 19, wrb: 21.34, lc: 9.3, wlc: 21.3}];
// Gabungkan nilai objek dengan nilai conn yang sama
// const dataChart5 = [];//dataDuplicateConn(dataFixedLoad1b, dataFixedLoad2b, dataFixedLoad3b, dataFixedLoad4b);
// Output hasil gabungan
// console.log('Merged data:', dataChart5);

// Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
// dataChart5.sort((a, b) => a.conn - b.conn);


const ctx5 = document.getElementById('ldChart5').getContext('2d');
const ldChart5 = new Chart(ctx5, {
    type: 'line',
    data: {
        labels: dataChart1.map(entry => entry.x || 0),
        datasets: [{
            label: 'Round Robin',
            data: dataChart1.map(entry => entry.rb_tr || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart1.map(entry => entry.wrb_tr || 0)
        }, {
            label: 'Least Connection',
            data: dataChart1.map(entry => entry.lc_tr || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart1.map(entry => entry.wlc_tr || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});


// Gabungkan nilai objek dengan nilai conn yang sama
// const dataChart6 = [];//dataDuplicateConn(dataFixedLoad1, dataFixedLoad2, dataFixedLoad3, dataFixedLoad4);
// Output hasil gabungan
// console.log('Merged data:', dataChart6);

// Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
// dataChart6.sort((a, b) => a.conn - b.conn);

const ctx6 = document.getElementById('ldChart6').getContext('2d');
const ldChart6 = new Chart(ctx6, {
  type: 'line',
  data: {
    labels: dataChart2.map(entry => entry.x || 0),
    datasets: [{
        label: 'Round Robin',
        data: dataChart2.map(entry => entry.rb_tr || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Round Robin',
        data: dataChart2.map(entry => entry.wrb_tr || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Least Connection',
        data: dataChart2.map(entry => entry.lc_tr || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Least Connection',
        data: dataChart2.map(entry => entry.wlc_tr || 0) // Tambahkan nilai default jika tidak ada data
      }
    ]
  },
  options: {
    scales: {
      x: {},
      y: {
        // min: 0,
        ticks: {
          padding: 30
        },
      }
    }
  }
});


// const dataPengukuran3 = [{x: '100 connection', rb: 30, wrb: 15.7, lc: 10.3, wlc: 21.3}, {x: '250 connection', rb: 22, wrb: 24.34, lc: 12.3, wlc: 23.3}, {x: '350 connection', rb: 19, wrb: 21.34, lc: 9.3, wlc: 21.3}];

// Gabungkan nilai objek dengan nilai conn yang sama
// const dataChart7 = [];//dataDuplicateConn(dataFixedLoad1c, dataFixedLoad2c, dataFixedLoad3c, dataFixedLoad4c);
// Output hasil gabungan
// console.log('Merged data:', dataChart7);

// Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
// dataChart7.sort((a, b) => a.conn - b.conn);

const ctx7 = document.getElementById('ldChart7').getContext('2d');
const ldChart7 = new Chart(ctx7, {
    type: 'line',
    data: {
        labels: dataChart3.map(entry => entry.x || 0),
        datasets: [{
            label: 'Round Robin',
            data: dataChart3.map(entry => entry.rb_tr || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart3.map(entry => entry.wrb_tr || 0)
        }, {
            label: 'Least Connection',
            data: dataChart3.map(entry => entry.lc_tr || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart3.map(entry => entry.wlc_tr || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});

var data_pengukuran_chart8;

if (typeof dataChart4a !== 'undefined'){

data_pengukuran_chart8 = [
  ...dataChart4a.map(entry => ({ x: entry.x, lb: entry.lb_tr, nlb_tr: entry.nlb_tr })),
  { x: '', lb: 0, nlb_tr: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  ...dataChart4b.map(entry => ({ x: entry.x, lb: entry.lb_tr, nlb_tr: entry.nlb_tr })),
  { x: '', lb: 0, nlb_tr: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  ...dataChart4c.map(entry => ({ x: entry.x, lb: entry.lb_tr, nlb_tr: entry.nlb_tr })),
];

} else {

data_pengukuran_chart8 = [
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '', net: 0, cogs: 0}, // Menambahkan baris kosong untuk memisahkan grup
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '', net: 0, cogs: 0}, // Menambahkan baris kosong untuk memisahkan grup
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0}
];

}

const ctx8 = document.getElementById('ldChart8').getContext('2d');
const ldChart8 = new Chart(ctx8, {
    type: 'bar',
    data: {
        labels: data_pengukuran_chart8.map(entry => entry.x),
        datasets: [{
            label: 'Web Server with LB',
            data: data_pengukuran_chart8.map(entry => entry.lb || 0)
        }, {
            label: 'Web Server with No LB',
            data: data_pengukuran_chart8.map(entry => entry.nlb_tr || 0)
        }]
    },
    options: {
        indexAxis: 'x',
        scales: {
            x: {
                grouped: true, // Mengelompokkan label
                // display: false,
            },
            y: {
                // min: 0, // Nilai minimum sumbu y
                // max: 35, // Nilai maksimum sumbu y
                ticks: {
                    // padding: 30, // Tambahkan padding di sini
                    // stepSize: 10,
                },
            }
        }
    }
});


// chart untuk parameter RPS

const ctx9 = document.getElementById('ldChart9').getContext('2d');
const ldChart9 = new Chart(ctx9, {
    type: 'line',
    data: {
        labels: dataChart1.map(entry => entry.x || 0),
        datasets: [{
            label: 'Round Robin',
            data: dataChart1.map(entry => entry.rb_rs || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart1.map(entry => entry.wrb_rs || 0)
        }, {
            label: 'Least Connection',
            data: dataChart1.map(entry => entry.lc_rs || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart1.map(entry => entry.wlc_rs || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});


const ctx10 = document.getElementById('ldChart10').getContext('2d');
const ldChart10 = new Chart(ctx10, {
  type: 'line',
  data: {
    labels: dataChart2.map(entry => entry.x || 0),
    datasets: [{
        label: 'Round Robin',
        data: dataChart2.map(entry => entry.rb_rs || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Round Robin',
        data: dataChart2.map(entry => entry.wrb_rs || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Least Connection',
        data: dataChart2.map(entry => entry.lc_rs || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Least Connection',
        data: dataChart2.map(entry => entry.wlc_rs || 0) // Tambahkan nilai default jika tidak ada data
      }
    ]
  },
  options: {
    scales: {
      x: {},
      y: {
        // min: 0,
        ticks: {
          padding: 30
        },
      }
    }
  }
});


const ctx11 = document.getElementById('ldChart11').getContext('2d');
const ldChart11 = new Chart(ctx11, {
    type: 'line',
    data: {
        labels: dataChart3.map(entry => entry.x || 0),
        datasets: [{
            label: 'Round Robin',
            data: dataChart3.map(entry => entry.rb_rs || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart3.map(entry => entry.wrb_rs || 0)
        }, {
            label: 'Least Connection',
            data: dataChart3.map(entry => entry.lc_rs || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart3.map(entry => entry.wlc_rs || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});

var data_pengukuran_chart12;

if (typeof dataChart4a !== 'undefined'){

data_pengukuran_chart12 = [
  ...dataChart4a.map(entry => ({ x: entry.x, lb: entry.lb_rs, nlb_rs: entry.nlb_rs })),
  { x: '', lb: 0, nlb_rs: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  ...dataChart4b.map(entry => ({ x: entry.x, lb: entry.lb_rs, nlb_rs: entry.nlb_rs })),
  { x: '', lb: 0, nlb_rs: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  ...dataChart4c.map(entry => ({ x: entry.x, lb: entry.lb_rs, nlb_rs: entry.nlb_rs })),
];

} else {

data_pengukuran_chart12 = [
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '', net: 0, cogs: 0}, // Menambahkan baris kosong untuk memisahkan grup
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '', net: 0, cogs: 0}, // Menambahkan baris kosong untuk memisahkan grup
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0}
];

}

const ctx12 = document.getElementById('ldChart12').getContext('2d');
const ldChart12 = new Chart(ctx12, {
    type: 'bar',
    data: {
        labels: data_pengukuran_chart12.map(entry => entry.x),
        datasets: [{
            label: 'Web Server with LB',
            data: data_pengukuran_chart12.map(entry => entry.lb || 0)
        }, {
            label: 'Web Server with No LB',
            data: data_pengukuran_chart12.map(entry => entry.nlb_rs || 0)
        }]
    },
    options: {
        indexAxis: 'x',
        scales: {
            x: {
                grouped: true, // Mengelompokkan label
                // display: false,
            },
            y: {
                // min: 0, // Nilai minimum sumbu y
                // max: 35, // Nilai maksimum sumbu y
                ticks: {
                    // padding: 30, // Tambahkan padding di sini
                    // stepSize: 10,
                },
            }
        }
    }
});

// chart untuk parameter Time Request

const ctx13 = document.getElementById('ldChart13').getContext('2d');
const ldChart13 = new Chart(ctx13, {
    type: 'line',
    data: {
        labels: dataChart1.map(entry => entry.x || 0),
        datasets: [{
            label: 'Round Robin',
            data: dataChart1.map(entry => entry.rb_trq || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart1.map(entry => entry.wrb_trq || 0)
        }, {
            label: 'Least Connection',
            data: dataChart1.map(entry => entry.lc_trq || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart1.map(entry => entry.wlc_trq || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});


const ctx14 = document.getElementById('ldChart14').getContext('2d');
const ldChart14 = new Chart(ctx14, {
  type: 'line',
  data: {
    labels: dataChart2.map(entry => entry.x || 0),
    datasets: [{
        label: 'Round Robin',
        data: dataChart2.map(entry => entry.rb_trq || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Round Robin',
        data: dataChart2.map(entry => entry.wrb_trq || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Least Connection',
        data: dataChart2.map(entry => entry.lc_trq || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Least Connection',
        data: dataChart2.map(entry => entry.wlc_trq || 0) // Tambahkan nilai default jika tidak ada data
      }
    ]
  },
  options: {
    scales: {
      x: {},
      y: {
        // min: 0,
        ticks: {
          padding: 30
        },
      }
    }
  }
});


const ctx15 = document.getElementById('ldChart15').getContext('2d');
const ldChart15 = new Chart(ctx15, {
    type: 'line',
    data: {
        labels: dataChart3.map(entry => entry.x || 0),
        datasets: [{
            label: 'Round Robin',
            data: dataChart3.map(entry => entry.rb_trq || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart3.map(entry => entry.wrb_trq || 0)
        }, {
            label: 'Least Connection',
            data: dataChart3.map(entry => entry.lc_trq || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart3.map(entry => entry.wlc_trq || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});

var data_pengukuran_chart16;

if (typeof dataChart4a !== 'undefined'){

data_pengukuran_chart16 = [
  ...dataChart4a.map(entry => ({ x: entry.x, lb: entry.lb_trq, nlb_trq: entry.nlb_trq })),
  { x: '', lb: 0, nlb_trq: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  ...dataChart4b.map(entry => ({ x: entry.x, lb: entry.lb_trq, nlb_trq: entry.nlb_trq })),
  { x: '', lb: 0, nlb_trq: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  ...dataChart4c.map(entry => ({ x: entry.x, lb: entry.lb_trq, nlb_trq: entry.nlb_trq })),
];

} else {

data_pengukuran_chart16 = [
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '', net: 0, cogs: 0}, // Menambahkan baris kosong untuk memisahkan grup
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '', net: 0, cogs: 0}, // Menambahkan baris kosong untuk memisahkan grup
  // {x: '-', lb: 0, nlb_cn: 0}, 
  // {x: '-', lb: 0, nlb_cn: 0},
  // {x: '-', lb: 0, nlb_cn: 0}
];

}

const ctx16 = document.getElementById('ldChart16').getContext('2d');
const ldChart16 = new Chart(ctx16, {
    type: 'bar',
    data: {
        labels: data_pengukuran_chart16.map(entry => entry.x),
        datasets: [{
            label: 'Web Server with LB',
            data: data_pengukuran_chart16.map(entry => entry.lb || 0)
        }, {
            label: 'Web Server with No LB',
            data: data_pengukuran_chart16.map(entry => entry.nlb_trq || 0)
        }]
    },
    options: {
        indexAxis: 'x',
        scales: {
            x: {
                grouped: true, // Mengelompokkan label
                // display: false,
            },
            y: {
                // min: 0, // Nilai minimum sumbu y
                // max: 35, // Nilai maksimum sumbu y
                ticks: {
                    // padding: 30, // Tambahkan padding di sini
                    // stepSize: 10,
                },
            }
        }
    }
});

// chart untuk parameter Time Testing

const ctx17 = document.getElementById('ldChart17').getContext('2d');
const ldChart17 = new Chart(ctx17, {
    type: 'line',
    data: {
        labels: dataChart1.map(entry => entry.x || 0),
        datasets: [{
            label: 'Round Robin',
            data: dataChart1.map(entry => entry.rb_tt || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart1.map(entry => entry.wrb_tt || 0)
        }, {
            label: 'Least Connection',
            data: dataChart1.map(entry => entry.lc_tt || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart1.map(entry => entry.wlc_tt || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});


const ctx18 = document.getElementById('ldChart18').getContext('2d');
const ldChart18 = new Chart(ctx18, {
  type: 'line',
  data: {
    labels: dataChart2.map(entry => entry.x || 0),
    datasets: [{
        label: 'Round Robin',
        data: dataChart2.map(entry => entry.rb_tt || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Round Robin',
        data: dataChart2.map(entry => entry.wrb_tt || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Least Connection',
        data: dataChart2.map(entry => entry.lc_tt || 0) // Tambahkan nilai default jika tidak ada data
      },
      {
        label: 'Weight Least Connection',
        data: dataChart2.map(entry => entry.wlc_tt || 0) // Tambahkan nilai default jika tidak ada data
      }
    ]
  },
  options: {
    scales: {
      x: {},
      y: {
        // min: 0,
        ticks: {
          padding: 30
        },
      }
    }
  }
});


const ctx19 = document.getElementById('ldChart19').getContext('2d');
const ldChart19 = new Chart(ctx19, {
    type: 'line',
    data: {
        labels: dataChart3.map(entry => entry.x || 0),
        datasets: [{
            label: 'Round Robin',
            data: dataChart3.map(entry => entry.rb_tt || 0)
        }, {
            label: 'Weight Round Robin',
            data: dataChart3.map(entry => entry.wrb_tt || 0)
        }, {
            label: 'Least Connection',
            data: dataChart3.map(entry => entry.lc_tt || 0)
        }, {
            label: 'Weight Least Connection',
            data: dataChart3.map(entry => entry.wlc_tt || 0)
        }]
    },
    options: {
    scales: {
        x: {
            // ticks: {
            //     padding: 10 // Tambahkan padding di sini
            // }
        },
        y: {
            // min: 0, // Nilai minimum sumbu y
            // max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});

var data_pengukuran_chart20;

if (typeof dataChart4a !== 'undefined'){

data_pengukuran_chart20 = [
  ...dataChart4a.map(entry => ({ x: entry.x, lb: entry.lb_tt, nlb_tt: entry.nlb_tt })),
  { x: '', lb: 0, nlb_tt: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  ...dataChart4b.map(entry => ({ x: entry.x, lb: entry.lb_tt, nlb_tt: entry.nlb_tt })),
  { x: '', lb: 0, nlb_tt: 0 }, // Menambahkan baris kosong untuk memisahkan grup
  ...dataChart4c.map(entry => ({ x: entry.x, lb: entry.lb_tt, nlb_tt: entry.nlb_tt })),
];

} else {

data_pengukuran_chart20 = [];

}

const ctx20 = document.getElementById('ldChart20').getContext('2d');
const ldChart20 = new Chart(ctx20, {
    type: 'bar',
    data: {
        labels: data_pengukuran_chart20.map(entry => entry.x),
        datasets: [{
            label: 'Web Server with LB',
            data: data_pengukuran_chart20.map(entry => entry.lb || 0)
        }, {
            label: 'Web Server with No LB',
            data: data_pengukuran_chart20.map(entry => entry.nlb_tt || 0)
        }]
    },
    options: {
        indexAxis: 'x',
        scales: {
            x: {
                grouped: true, // Mengelompokkan label
                // display: false,
            },
            y: {
                // min: 0, // Nilai minimum sumbu y
                // max: 35, // Nilai maksimum sumbu y
                ticks: {
                    // padding: 30, // Tambahkan padding di sini
                    // stepSize: 10,
                },
            }
        }
    }
});


//bagian untuk membuat tabel hasil analisa
function createTable(dataArray) {
    // Membuat elemen tabel
    const table = document.createElement('table');
    table.classList.add('w-full', 'text-sm', 'text-left', 'text-gray-500', 'dark:text-gray-400');

    // Membuat header tabel
    const thead = document.createElement('thead');
    thead.classList.add('text-xs', 'text-gray-700', 'uppercase', 'bg-gray-50', 'dark:bg-gray-700', 'dark:text-white');

    const headerRow = document.createElement('tr');
    const headers = [
        'Value',
        'Connection Time',
        'Value',
        'Transfer Rate',
        'Value',
        'Request per Second',
        'Value',
        'Time per Request',
        'Value',
        'Time Taken',
        'Concurrent',
        'Req Conn'
    ];

    headers.forEach(headerText => {
        const cell = document.createElement('th');
        cell.classList.add('px-6', 'py-3');
        cell.textContent = headerText;
        headerRow.appendChild(cell);
    });

    thead.appendChild(headerRow);
    table.appendChild(thead);

    // Membuat body tabel
    const tbody = document.createElement('tbody');
    dataArray.forEach(dataItem => {
        const row = document.createElement('tr');
        row.classList.add('odd:bg-white', 'odd:dark:bg-gray-900', 'even:bg-gray-50', 'even:dark:bg-gray-900', 'border-b', 'dark:border-gray-700');
        
        const properties = [
            dataItem.lb_cn, dataItem.algoritmaLB_cn,
            dataItem.lb_tr, dataItem.algoritmaLB_tr,
            dataItem.lb_rs, dataItem.algoritmaLB_rs,
            dataItem.lb_trq, dataItem.algoritmaLB_trq,
            dataItem.lb_tt, dataItem.algoritmaLB_tt,
            dataItem.req, dataItem.conn
        ];

        properties.forEach(value => {
            const cell = document.createElement('td');
            cell.classList.add('px-6', 'py-4');
            cell.textContent = value;
            row.appendChild(cell);
        });

        tbody.appendChild(row);
    });

    table.appendChild(tbody);

    // Menambahkan tabel ke container yang memiliki ID 'table-container'
    const container = document.getElementById('table-container');
    if (container) {
        container.appendChild(table);
    } else {
        console.error('Container with ID "table-container" not found.');
    }
}

// Menggunakan fungsi untuk membuat tabel dari data
const dataArray1 = hasildata1;
const dataArray2 = hasildata2;
const dataArray3 = hasildata3;

// Tambahkan tabel ke halaman dengan data dari hasildata1, hasildata2, dan hasildata3
createTable(dataArray1);
createTable(dataArray2);
createTable(dataArray3);

// Fungsi untuk menghitung frekuensi kemunculan algoritma di dataArray
function countAlgorithms(dataArray) {
    // Objek untuk menyimpan frekuensi kemunculan setiap algoritma
    const algorithmFrequency = {};

    // Iterasi melalui dataArray
    dataArray.forEach(dataItem => {
        // Array algoritma yang ingin dihitung
        const algorithms = [
            dataItem.algoritmaLB_cn,
            dataItem.algoritmaLB_tr,
            dataItem.algoritmaLB_rs,
            dataItem.algoritmaLB_trq,
            dataItem.algoritmaLB_tt
        ];

        // Hitung frekuensi kemunculan setiap algoritma
        algorithms.forEach(algorithm => {
            if (algorithm in algorithmFrequency) {
                algorithmFrequency[algorithm]++;
            } else {
                algorithmFrequency[algorithm] = 1;
            }
        });
    });

    return algorithmFrequency;
}

// Menggabungkan hasil penghitungan dari hasildata1, hasildata2, dan hasildata3
// program untuk menenetukan performa algortima terbaik
function combineAlgorithmFrequencies(frequency1, frequency2, frequency3) {
    const combinedFrequency = { ...frequency1 };

    // Tambahkan frekuensi dari frequency2 ke combinedFrequency
    for (const [algorithm, count] of Object.entries(frequency2)) {
        if (algorithm in combinedFrequency) {
            combinedFrequency[algorithm] += count;
        } else {
            combinedFrequency[algorithm] = count;
        }
    }

    // Tambahkan frekuensi dari frequency3 ke combinedFrequency
    for (const [algorithm, count] of Object.entries(frequency3)) {
        if (algorithm in combinedFrequency) {
            combinedFrequency[algorithm] += count;
        } else {
            combinedFrequency[algorithm] = count;
        }
    }

    return combinedFrequency;
}

// Menentukan algoritma mana yang paling banyak digunakan berdasarkan frekuensi
function determineMostUsedAlgorithm(frequency) {
    let mostUsedAlgorithm = '';
    let maxFrequency = 0;

    // Iterasi melalui objek frekuensi untuk menentukan algoritma yang paling banyak digunakan
    for (const [algorithm, count] of Object.entries(frequency)) {
        if (count > maxFrequency) {
            maxFrequency = count;
            mostUsedAlgorithm = algorithm;
        }
    }

    return mostUsedAlgorithm;
}

// Menghitung frekuensi kemunculan algoritma di setiap dataArray
const frequency1 = countAlgorithms(hasildata1);
const frequency2 = countAlgorithms(hasildata2);
const frequency3 = countAlgorithms(hasildata3);

// Menggabungkan hasil penghitungan dari frequency1, frequency2, dan frequency3
const combinedFrequency = combineAlgorithmFrequencies(frequency1, frequency2, frequency3);

// Menentukan algoritma yang paling banyak digunakan
const mostUsedAlgorithm = determineMostUsedAlgorithm(combinedFrequency);

// Menampilkan hasil
console.log('Algoritma yang paling banyak digunakan:', mostUsedAlgorithm);

// Menentukan elemen HTML dengan id 'bestPerformance'
const bestPerformanceElement = document.getElementById('bestPerformance');

// Menampilkan mostUsedAlgorithm, atau '-' jika kosong
if (bestPerformanceElement) {
    bestPerformanceElement.textContent = mostUsedAlgorithm || '-';
} else {
    console.error('Element with ID "bestPerformance" not found.');
}


</script>

{{-- <script>
  // Fungsi untuk merefresh halaman
  function refreshPage() {
      location.reload(); // Merefresh halaman
  }

  // Set interval untuk memanggil fungsi refreshPage setiap 2 menit (120.000 milidetik)
  setInterval(refreshPage, 10000);
</script> --}}

@endpush

@endsection