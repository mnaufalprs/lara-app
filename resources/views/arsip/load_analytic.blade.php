{{-- @extends('layouts/main')

@section('mainClass') --}}


<div class="flex flex-wrap -mx-3 mb-4">
    <!-- card1 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-1 font-sans font-semibold leading-normal text-sm">Server address</p>
                <p class="mb-0 font-bold" style="font-size: 0.785rem;">
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
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Best Performance</p>
                <h5 class="mb-0 font-bold">
                  {{-- @if(isset($data_livetest->input_livetest->connection_count))
                    {{ $data_livetest->input_livetest->connection_count }} --}}
                      
                  {{-- @else --}}
                      
                  {{-- @endif --}}
                  
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
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm" style="font-size: 9pt">Performance Indicators</p>
                <h5 class="mb-0 font-bold">
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
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/4 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm mb-1" style="font-size: 8pt">Status Connection</p>
                
                <h5 class="mb-0 font-bold">
                {{-- @if(isset($input_livetest2["status_connect"]) && $input_livetest2["status_connect"] == 1) --}}
                      {{-- {{ $data_livetest->input_livetest->status_connect }} --}}
                      {{-- <span class="bg-green-300 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Running</span> --}}
                {{-- @else --}}
                      {{-- {{ $data_livetest->input_livetest->status_connect }} --}}
                      {{-- <span class="bg-red-300 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Stoped</span> --}}
                {{-- @endif --}}
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

<div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 ">
  <h1 class="mt-2 mb-2 ml-4 font-sans font-semibold">Connection Times (ms)</h1>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-2">

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart1"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">50 Concurrent (Request/sec)</p>
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart2"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">100 Concurrent (Request/sec)</p>
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart3"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">300 Concurrent (Request/sec)</p>
      </div>
    </div>

    <div
        class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border "
    >
      {{-- <h3 class="mt-2 mb-2 ml-2 font-sans font-semibold">Connection Time (ms)</h3> --}}
      <canvas id="ldChart4"></canvas>
      <div class="flex justify-center">
        <p class="mt-2 mb-2 font-sans">50, 100, 300 Concurrent (Request/sec)</p>
        {{-- <p class="mb-2 mr-2 ml-2 font-sans">100 Concurrent (Request/sec)</p>
        <p class="mb-2 mr-2 ml-2 font-sans">300 Concurrent (Request/sec)</p> --}}
      </div>
    </div>
  
</div>

{{-- @if($data_loadtest["field_chart"] == 'field_chart1')
  
@elseif($data_loadtest["field_chart"] == 'field_chart2')

@elseif($data_loadtest["field_chart"] == 'field_chart3')

@elseif($data_loadtest["field_chart"] == 'field_chart4')

@endif --}}

@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

var dataLoadtest = {!! json_encode($dataLoadtests) !!};
console.log(dataLoadtest);

// Mengakses nilai dari field_chart
// const fieldChart = dataLoadtest.field_chart;
// var connectionCount = [];
// connectionCount.push(dataLoadtest.connection_count);
// var connectionCount = dataLoadtest.connection_count;
// var requestCount = dataLoadtest.request_count;
// var algoritmaLB = dataLoadtest.algoritma_LB;
// var connectionTime = dataLoadtest.connection_time;
// console.log(connectionCount);

// console.log("Nilai field_chart:", fieldChart);
// Mengonversi dataLoadtest ke dalam format yang sesuai dengan dataPengukuran1
// console.log("ini adalah data: ", fieldChart);
// dataLoadtest.forEach(entry => {
//     const fieldChart = entry.field_chart;
//     const algoritmaLB = entry.algortima_LB;

//     if (fieldChart == 'field_chart1'){
//       if (algoritmaLB == 'round_robin'){
//           dataPengukuranFromLoadtest1 = dataLoadtest.map(entry => {

//               const connectionCountInt = parseInt(entry.connection_count.split('.')[0]);

//               return {
//                   x: `${connectionCountInt} connection`, // Menggunakan nilai connection_count
//                   rb: parseFloat(entry.connection_time), // Menggunakan contoh nilai lain dari dataLoadtest
//                   // wrb: parseFloat(entry.transfer_rate), // Menggunakan contoh nilai lain dari dataLoadtest
//                   // lc: parseFloat(entry.request_second), // Menggunakan contoh nilai lain dari dataLoadtest
//                   // wlc: parseFloat(entry.request_count) // Menggunakan contoh nilai lain dari dataLoadtest
//               };
//           });
//       }
//       else if (dataLoadtest.algortima_LB == 'weight_round_robin'){

//       }
//       else if (dataLoadtest.algortima_LB == 'least_connection'){

//       }
//       else if (dataLoadtest.algortima_LB == 'weight_least_connection'){

//       }
//   }
//   else if(dataLoadtest.field_chart == 'field_chart2'){

//   }
//   else if(dataLoadtest.field_chart == 'field_chart3'){

//   }
//   else if(dataLoadtest.field_chart == 'field_chart4'){

//   }

// });

let dataPengukuranFromLoadtest1a = [];
let dataPengukuranFromLoadtest2a = [];
let dataPengukuranFromLoadtest3a = [];
let dataPengukuranFromLoadtest4a = [];

dataLoadtest.forEach(entry => { // Gunakan entry untuk setiap objek dalam array

  const fieldChart = entry.field_chart;
  const algoritmaLB = entry.algortima_LB;
  // console.log(algoritmaLB)

  if (fieldChart == 'field_chart2'){
    if (algoritmaLB == 'round_robin'){
      const newData = {
          x: `${parseInt(entry.connection_count.split('.')[0])} connection`,
          rb_cn: parseFloat(entry.connection_time),
          rb_tr: parseFloat(entry.transfer_rate),
          rb_rs: parseFloat(entry.request_second),
          rb_trq: parseFloat(entry.time_request),
          rb_tt: parseFloat(entry.time_taken),
          conn : entry.connection_count,
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
      };

      dataPengukuranFromLoadtest4a.push(newData); // Tambahkan data ke array
      
    }
  }


  // Tambahkan else if lainnya jika diperlukan
});

// Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
// dataPengukuranFromLoadtest1a.sort((a, b) => a.conn - b.conn);
// console.log(dataPengukuranFromLoadtest1a);

// // Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
// dataPengukuranFromLoadtest2a.sort((a, b) => a.conn2 - b.conn2);
// console.log(dataPengukuranFromLoadtest2a);

const dataFixedLoad1 = dataPengukuranFromLoadtest1a.slice(0, 3);
console.log(dataFixedLoad1)
const dataFixedLoad2 = dataPengukuranFromLoadtest2a.slice(0, 3);
console.log(dataFixedLoad2)
const dataFixedLoad3 = dataPengukuranFromLoadtest3a.slice(0, 3);
console.log(dataFixedLoad3)
const dataFixedLoad4 = dataPengukuranFromLoadtest4a.slice(0, 3);
console.log(dataFixedLoad4)

// const dataPengukuranFromLoadtest1 = dataLoadtest.map(entry => {

//     const connectionCountInt = parseInt(entry.connection_count.split('.')[0]);

//     return {
//         x: `${connectionCountInt} connection`, // Menggunakan nilai connection_count
//         rb: parseFloat(entry.connection_time), // Menggunakan contoh nilai lain dari dataLoadtest
//         // wrb: parseFloat(entry.transfer_rate), // Menggunakan contoh nilai lain dari dataLoadtest
//         // lc: parseFloat(entry.request_second), // Menggunakan contoh nilai lain dari dataLoadtest
//         // wlc: parseFloat(entry.request_count) // Menggunakan contoh nilai lain dari dataLoadtest
//     };
// });

//chart untuk connection times
const dataPengukuran1 = [{x: '100 connection', rb: 30, wrb: 15.7, lc: 10.3, wlc: 21.3}, {x: '250 connection', rb: 22, wrb: 24.34, lc: 12.3, wlc: 23.3}, {x: '350 connection', rb: 19, wrb: 21.34, lc: 9.3, wlc: 21.3}];

const ctx = document.getElementById('ldChart1').getContext('2d');
const ldChart1 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['100 connection', '250 connection', '350 connection'],
        datasets: [{
            label: 'Round Robin',
            data: dataPengukuran1.map(entry => entry.rb)
        }, {
            label: 'Weight Round Robin',
            data: dataPengukuran1.map(entry => entry.wrb)
        }, {
            label: 'Least Connection',
            data: dataPengukuran1.map(entry => entry.lc)
        }, {
            label: 'Weight Least Connection',
            data: dataPengukuran1.map(entry => entry.wlc)
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
            min: 0, // Nilai minimum sumbu y
            max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});

// const dataPengukuran2 = [{x: '100 connection', rb: 32, wrb: 15.7, lc: 10.3, wlc: 21.3}, {x: '250 connection', rb: 27, wrb: 24.34, lc: 12.3, wlc: 23.3}, {x: '350 connection', rb: 35, wrb: 21.34, lc: 9.3, wlc: 21.3}];

// const dataPengukuran2 = [...dataFixedLoad1, ...dataFixedLoad2];
// console.log(dataPengukuran2)

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

// Gabungkan nilai objek dengan nilai conn yang sama
const dataChart2 = dataDuplicateConn(dataFixedLoad1, dataFixedLoad2, dataFixedLoad3, dataFixedLoad4);
// Output hasil gabungan
console.log('Merged data:', dataChart2);

// Urutkan dataLoadtest berdasarkan connection_count terkecil ke terbesar
dataChart2.sort((a, b) => a.conn - b.conn);


// Memotong array agar hanya menyertakan tiga elemen pertama
// const fixedData1 = dataPengukuran2.slice(0, 3);
// console.log(fixedData1)

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


const dataPengukuran3 = [{x: '100 connection', rb: 30, wrb: 15.7, lc: 10.3, wlc: 21.3}, {x: '250 connection', rb: 22, wrb: 24.34, lc: 12.3, wlc: 23.3}, {x: '350 connection', rb: 19, wrb: 21.34, lc: 9.3, wlc: 21.3}];

const ctx3 = document.getElementById('ldChart3').getContext('2d');
const ldChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: ['100 connection', '250 connection', '350 connection'],
        datasets: [{
            label: 'Round Robin',
            data: dataPengukuran3.map(entry => entry.rb)
        }, {
            label: 'Weight Round Robin',
            data: dataPengukuran3.map(entry => entry.wrb)
        }, {
            label: 'Least Connection',
            data: dataPengukuran3.map(entry => entry.lc)
        }, {
            label: 'Weight Least Connection',
            data: dataPengukuran3.map(entry => entry.wlc)
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
            min: 0, // Nilai minimum sumbu y
            max: 35, // Nilai maksimum sumbu y
            ticks: {
                padding: 30, // Tambahkan padding di sini
            },
            
        }
        }
    }
});

// const dataPengukuran4 = [{x: '100 connection', lb: 30, nlb: 15.7}, {x: '250 connection', lb: 22, nlb: 24.34}, {x: '350 connection', lb: 19, nlb: 21.34}];

// const ctx4 = document.getElementById('ldChart4').getContext('2d');
// const ldChart4 = new Chart(ctx4, {
//     type: 'line',
//     data: {
//         labels: ['100 connection', '250 connection', '350 connection'],
//         datasets: [{
//             label: 'Web Server with LB',
//             data: dataPengukuran4.map(entry => entry.lb)
//         }, {
//             label: 'Web Server with No LB',
//             data: dataPengukuran4.map(entry => entry.nlb)
//         },]
//     },
//     options: {
//     scales: {
//         x: {
//             // ticks: {
//             //     padding: 10 // Tambahkan padding di sini
//             // }
//         },
//         y: {
//             min: 0, // Nilai minimum sumbu y
//             max: 35, // Nilai maksimum sumbu y
//             ticks: {
//                 padding: 30, // Tambahkan padding di sini
//             },
            
//         }
//         }
//     }
// });
const dataPengukuran4 = [
  {x: '100 connection', net: 30, cogs: 15.7}, 
  {x: '250 connection', net: 22, cogs: 24.34},
  {x: '350 connection', net: 24, cogs: 21.4},
  {x: '', net: 0, cogs: 0}, // Menambahkan baris kosong untuk memisahkan grup
  {x: '100 connection', net: 30, cogs: 15.7}, 
  {x: '250 connection', net: 22, cogs: 24.34},
  {x: '350 connection', net: 24, cogs: 21.4},
  {x: '', net: 0, cogs: 0}, // Menambahkan baris kosong untuk memisahkan grup
  {x: '100 connection', net: 30, cogs: 15.7}, 
  {x: '250 connection', net: 22, cogs: 24.34},
  {x: '350 connection', net: 24, cogs: 21.4}
];

const ctx4 = document.getElementById('ldChart4').getContext('2d');
const ldChart4 = new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: dataPengukuran4.map(entry => entry.x),
        datasets: [{
            label: 'Web Server with LB',
            data: dataPengukuran4.map(entry => entry.net)
        }, {
            label: 'Web Server with No LB',
            data: dataPengukuran4.map(entry => entry.cogs)
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
                min: 0, // Nilai minimum sumbu y
                max: 35, // Nilai maksimum sumbu y
                ticks: {
                    // padding: 30, // Tambahkan padding di sini
                    // stepSize: 10,
                },
            }
        }
    }
});



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