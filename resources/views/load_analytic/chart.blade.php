{{-- @extends('load_analytic/index') --}}

@section("ChartView")

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
                  <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent (Request/sec)</p>
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
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent (Request/sec)</p>
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
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent (Request/sec)</p>
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
          <p class="mt-2 mb-2 font-sans">{{ $request_count_ldchart1 }}, {{ $request_count_ldchart2 }}, {{ $request_count_ldchart3 }} Concurrent (Request/sec)</p>
          {{-- <p class="mb-2 mr-2 ml-2 font-sans">100 Concurrent (Request/sec)</p>
          <p class="mb-2 mr-2 ml-2 font-sans">300 Concurrent (Request/sec)</p> --}}
        </div>
      </div>
    
  </div>
  
  {{-- untuk parameter troughput --}}
  
  <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4 ">
    <div class="flex items-center justify-between">
      <h1 class="mt-2 mb-2 ml-4 font-sans font-semibold">Troughput / Transfer Rate (Kbps)</h1>
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
                  <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent (Request/sec)</p>
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
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent (Request/sec)</p>
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
                <p class="mt-2 mb-2 font-sans">{{ intval($dataLoadtest->request_count) }} Concurrent (Request/sec)</p>
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
          <p class="mt-2 mb-2 font-sans">{{ $request_count_ldchart5 }}, {{ $request_count_ldchart6 }}, {{ $request_count_ldchart7 }} Concurrent (Request/sec)</p>
          {{-- <p class="mb-2 mr-2 ml-2 font-sans">100 Concurrent (Request/sec)</p>
          <p class="mb-2 mr-2 ml-2 font-sans">300 Concurrent (Request/sec)</p> --}}
        </div>
      </div>
    
</div>

@push('js')

<script>
    // // Panggil sendDataToServer saat halaman dimuat dengan nilai yang dipilih secara default
    // window.onload = function() {
    //     const defaultSelectedValue = document.querySelector('input[name="filter-radio"]:checked').value;
    //     sendDataToServer(defaultSelectedValue);
    // };
    
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownItems = document.querySelectorAll('#dropdownRadio input[type="radio"]');
        
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
    
    
</script>

@endpush


@endsection