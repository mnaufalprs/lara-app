<div style="height: 300px !important;">
    <div>
        <canvas id="myChart"></canvas>
    </div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    {{-- <livewire:livewire-column-chart --}}
        {{-- key="{{ $columnChartModel->reactiveKey() }}" --}}
        {{-- :column-chart-model="$columnChartModel" --}}
    {{-- /> --}}
    {{-- <livewire:scripts /> --}}
    {{-- @livewireChartsScripts --}}
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
        <script>
            const ctx = document.getElementById('myChart');
          
            new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                  label: '# of Votes',
                  data: [12, 19, 3, 5, 2, 3],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          </script>
    @endpush
</div>



