@extends('layouts/main')

@section('mainClass')

<div class="w-full max-w-full mt-0 mb-6 md:mb-0">
    <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-4">
        {{-- @livewire('chart.index') --}}
        <canvas id="myChart"></canvas>
        
    </div>
</div>
@push('js')
{{-- <script src="/js/app.js"></script> --}}
{{-- <script src="/socket.io/socket.io.min.js"></script> --}}
<script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <script src="/../node_modules/chart.js/dist/chart.umd.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>
{{-- <script>             
    var socket = io();       
</script>  --}}
<script>             
    $(function(){                 
        let socket = io('http://localhost:3000'); 

        socket.on('data', (data) => {
            console.log('Received data from server:', data);
            // Lakukan sesuatu dengan data di sini
        });

        // socket.on('open', () => {
        //     const message = {
        //         type: 'load'
        //     }
        //     socket.send(JSON.stringify(message))
        //     console.log('connected')
        // });

        // socket.on('message', event => {
        //     console.log(JSON.parse(event.data));
        //     // Lakukan sesuatu dengan data yang diterima dari server
        //     // Contoh: memperbarui grafik dengan data baru
        //     // updateLineChart(data);
        // });

        // Menangani event 'data' yang diterima dari server
        // socket.on('data', function(data) {
        //         console.log('Data received from server:', data);
        //         // Lakukan sesuatu dengan data yang diterima dari server
        //         // Contoh: memperbarui grafik dengan data baru
        //         // updateLineChart(data);
        //     });
                
    });             
    // socket.on('connection');         
</script>
<script>
    // const ctx = document.getElementById('myChart');
    
    // new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    //     datasets: [{
    //         label: '# of Votes',
    //         data: [12, 19, 3, 5, 2, 3],
    //         borderWidth: 1
    //     }]
    //     },
    //     options: {
    //     scales: {
    //         y: {
    //         beginAtZero: true
    //         }
    //     }
    //     }
    // });
    
    // const labels = Utils.months({count: 7});
    const chartData = {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
        label: 'My First Dataset',
        data: [65, 59, 80, 81, 56, 55, 40],
        fill: false,
        backgroundColor: '',
        // borderColor: 'rgb(75, 192, 192)',
        borderColor: '',
        tension: 0.1
    }]
    };

    const lineConfig = {
        type: 'line',
        data: chartData,
    };

    const linectx = document.getElementById('myChart');
    const lineChart = new Chart(linectx, lineConfig);
    

    const updateLineChart = (data) => {
        let dataArray = []
        let dateArray = []
        data.map( row => {
            dataArray.push(row.data)
            dateArray.push(row.tanggal)
        })
        chartData.labels = dateArray
        chartData.datasets[0].data = dataArray
        chartData.datasets[0].backgroundColor = 'lightcoral'
        chartData.datasets[0].borderColor = 'lightcoral'
        lineChart.update()
    }

    // io.addEventListeber('open', () => {
    //     const message = {
    //         type = 'load'
    //     }
    //     io.send(JSON.stringify(message))
    // })

    // io.onmessage = event => {
    //     console.log(JSON.parse(event.data))
    // }
</script>
@endpush

@endsection