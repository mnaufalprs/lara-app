@extends('layouts/main')

@section('mainClass')

<div class="w-full max-w-full mt-0 mb-6 md:mb-0">
    <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border h-auto dark:bg-gray-800 mb-4">
       
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Load Balance Testing Web Server</h2>
            <form action="/loadTest" method="post">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        
                        <label for="server_address" class="block mb-2 text-sm flex items-center font-medium text-gray-900 dark:text-white">Server Address<button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button">
    
                            <svg class="w-4 h-4 ms-1 text-gray-400 hover:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 24"><path fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h0m9-4a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                              
                            {{-- <svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> --}}
                        
                        </button></label>
                        <div data-popover id="popover-description" role="tooltip" class="absolute z-50 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <h3 class="font-semibold text-gray-900 dark:text-white">IP Address v4</h3>
                                <p>you can use address IPv4 in your Application for this testing, for example 103.120.225.1, 192.168.100.50, etc.</p>
                                <h3 class="font-semibold text-gray-900 dark:text-white">Domain Name System (DNS)</h3>
                                <p>you can use address Domain Name System (DNS) in your Application for this testing, for example detik.com, polban.ac.id, etc.</p>
                                <a href="https://www.biznetgio.com/news/apa-itu-dns-pengertian-fungsi-cara-kerja-dan-teknologi-anycast-dns" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg></a>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
    
                        <input type="text" name="server_address" id="server_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('server_address') is-invalid @enderror" placeholder="192.168.x.x OR domain.com" required="" value="{{ old('server_address') }}">
                        @error('server_address')
                                <div class="alert alert-danger" style="font-size: 12px; color: red;">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="w-full">
                        <label for="request_count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Request Count</label>
                        <input type="number" name="request_count" id="request_count" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('request_count') is-invalid @enderror" placeholder="concurrent" value="{{ old('request_count') }}">
                        @error('request_count')
                            <div class="alert alert-danger" style="font-size: 12px; color: red;">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="w-full">
                        <label for="connection_count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Connection Count</label>
                        <input type="number" name="connection_count" id="connection_count" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('connection_count') is-invalid @enderror" placeholder="2999" value="{{ old('connection_count') }}">
                        @error('connection_count')
                            <div class="alert alert-danger" style="font-size: 12px; color: red;">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div>
                        <label for="algortima_LB" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Algoritma Load Balance</label>
                        <select id="algortima_LB" name="algortima_LB" onchange="toggleOtherInput(this);" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('algortima_LB') is-invalid @enderror">
                            <option value="" {{ old('algortima_LB') == '' ? 'selected' : '' }}>Select category</option>
                            <option value="round_robin" {{ old('algortima_LB') == 'round_robin' ? 'selected' : '' }}>Round Robin</option>
                            <option value="weight_round_robin" {{ old('algortima_LB') == 'weight_round_robin' ? 'selected' : '' }}>Weight Round Robin</option>
                            <option value="least_connection" {{ old('algortima_LB') == 'least_connection' ? 'selected' : '' }}>Least Connection</option>
                            <option value="weight_least_connection" {{ old('algortima_LB') == 'weight_least_connection' ? 'selected' : '' }}>Weight Least Connection</option>
                            <option value="no_load_balancer" {{ old('algortima_LB') == 'no_load_balancer' ? 'selected' : '' }}>No Load Balancer</option>
                        </select>
                        @error('algortima_LB')
                            <div class="alert alert-danger" style="font-size: 12px; color: red;">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div id="otherInput" style="display: none;">
                        <label for="algortima_LB" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Option</label>
                        <input type="text" id="algortima_LB" name="algoritma_LB" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
            
                    <div>
                        <label for="field_chart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Field Chart</label>
                        <select name="field_chart" id="field_chart" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('field_chart') is-invalid @enderror">
                            <option value="" {{ old('field_chart') == '' ? 'selected' : '' }}>Select Field</option>
                            <option value="field_chart1" {{ old('field_chart') == 'field_chart1' ? 'selected' : '' }}>Field Chart1</option>
                            <option value="field_chart2" {{ old('field_chart') == 'field_chart2' ? 'selected' : '' }}>Field Chart2</option>
                            <option value="field_chart3" {{ old('field_chart') == 'field_chart3' ? 'selected' : '' }}>Field Chart3</option>
                            <option value="field_chart4" {{ old('field_chart') == 'field_chart4' ? 'selected' : '' }}>Field Chart4</option>
                        </select>
                        @error('field_chart')
                            <div class="alert alert-danger" style="font-size: 12px; color: red;">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div>
                        <label for="urutan_pengukuran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urutan Pengukuran</label>
                        <select name="urutan_pengukuran" id="urutan_pengukuran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('urutan_pengukuran') is-invalid @enderror" required="">
                            <option value="" {{ old('urutan_pengukuran') == '' ? 'selected' : '' }}>Select Field</option>
                            <option value="1" {{ old('urutan_pengukuran') == '1' ? 'selected' : '' }}>Pengukuran ke-1</option>
                            <option value="2" {{ old('urutan_pengukuran') == '2' ? 'selected' : '' }}>Pengukuran ke-2</option>
                            <option value="3" {{ old('urutan_pengukuran') == '3' ? 'selected' : '' }}>Pengukuran ke-3</option>
                            {{-- <option value="4" {{ old('urutan_pengukuran') == '4' ? 'selected' : '' }}>Pengukuran ke-4</option> --}}
                        </select>
                        @error('urutan_pengukuran')
                            <div class="alert alert-danger" style="font-size: 12px; color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="w-full" style="visibility: hidden">
                        <label for="user_id_load" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Id</label>
                        <div type="number" name="user_id_load" id="user_id_load" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">{{ $dataUserId }}</div>
                    </div>

                </div>

                <button id="addTestingButton" type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add Testing
                </button>
                <button id="loadingButton" style="display: none;" disabled type="button" class="py-2.5 px-5 me-2 mt-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center">
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
                    </svg>
                    Loading...
                </button>
                <button id="stopTestingButton" style="display: none;" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm text-center mt-1.5">
                    <svg class="w-6 h-6 text-gray-800 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0"/>
                    </svg>
                </button>
                <div class="inline-flex items-center py-2.5">
                    <a href="/loadAnalytic" class="inline-flex items-center py-2.5 px-5 me-2 mb-2 ml-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        View Result
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </form>
        </div>
        
    </div>
</div>


<div class="border-2 border-dashed rounded-lg border-gray-100 dark:border-gray-800 h-auto mb-4">
  
</div>



@push('js')
<script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>

<script>

function toggleOtherInput(selectElement) {
    var otherInput = document.getElementById('otherInput');
    if (selectElement.value === 'Other') {
        otherInput.style.display = 'block';
    } else {
        otherInput.style.display = 'none';
    }
}

const socket = io.connect('http://localhost:3000');

// Ambil nilai $dataUserId dari elemen HTML
const dataUserIdElement = document.getElementById('user_id_load');
const dataUserId = dataUserIdElement ? dataUserIdElement.textContent : '';

// Kirim dataUserId ke server Socket.IO saat halaman dimuat
socket.emit('sendDataUserId', dataUserId);

// Tambahkan listener untuk mengonfirmasi penerimaan data di server
socket.on('dataUserIdAcknowledged', () => {
    console.log('Data user ID telah dikirim ke server dan diakui.');
});

document.addEventListener('DOMContentLoaded', function() {
    // Ambil tombol add testing dan loading
    const addTestingButton = document.getElementById('addTestingButton');
    const loadingButton = document.getElementById('loadingButton');
    const stopTestingButton = document.getElementById('stopTestingButton');

    // Ambil status loading dari localStorage
    const isLoading = localStorage.getItem('isLoading');

    // Atur visibilitas tombol berdasarkan status loading
    if (isLoading === 'true') {
        // Jika sedang loading, tampilkan tombol loading dan sembunyikan tombol add testing
        loadingButton.style.display = 'inline-block';
        stopTestingButton.style.display = 'inline-block';
        addTestingButton.style.display = 'none';
    } else {
        // Jika tidak sedang loading, sembunyikan tombol loading dan tampilkan tombol add testing
        loadingButton.style.display = 'none';
        stopTestingButton.style.display = 'none';
        addTestingButton.style.display = 'inline-block';
    }

    // Tambahkan event listener untuk tombol add testing
    addTestingButton.addEventListener('click', function() {
        // Ketika tombol add testing diklik, set status loading ke true
        localStorage.setItem('isLoading', 'true');
        
        // Tampilkan tombol loading dan sembunyikan tombol add testing
        loadingButton.style.display = 'inline-block';
        addTestingButton.style.display = 'none';
    });

    // Tambahkan event listener untuk tombol stop testing
    stopTestingButton.addEventListener('click', function() {
        // Ketika tombol stop testing diklik, set status loading ke false
        localStorage.setItem('isLoading', 'false');
        
        // Sembunyikan tombol loading dan tampilkan tombol add testing
        loadingButton.style.display = 'none';
        stopTestingButton.style.display = 'none';
        addTestingButton.style.display = 'inline-block';
    });
});

function handleData(type, data) {
    console.log(`Received ${type} data from server:`, data);

    // Simpan data ke localStorage
    localStorage.setItem(type, JSON.stringify(data));

    // Lakukan pengecekan kecocokan data
    const dataloadtest = JSON.parse(localStorage.getItem('dataloadtest'));
    const dataloadtestinp = JSON.parse(localStorage.getItem('dataloadtestinp'));

    if (dataloadtest && dataloadtestinp) {
        // Periksa kecocokan datawbtest dengan datawbtestinp
        const matchFound = checkMatch(dataloadtest, dataloadtestinp);
        
        if (matchFound) {
            // Jika ditemukan kecocokan, hentikan loading
            localStorage.setItem('isLoading', 'false');
            document.getElementById('addTestingButton').style.display = 'inline-block';
            document.getElementById('loadingButton').style.display = 'none';
            document.getElementById('stopTestingButton').style.display = 'none';
        }
    }
}

// Fungsi untuk memeriksa kecocokan datawbtest dengan datawbtestinp
function checkMatch(dataloadtest, dataloadtestinp) {
    for (const loadtest of dataloadtest) {
        for (const loadtestinp of dataloadtestinp) {
            if (
                loadtest.user_id === loadtestinp.user_id &&
                loadtest.server_address === loadtestinp.server_address &&
                loadtest.input_test_id === loadtestinp.test_id
            ) {
                return true; // Kecocokan ditemukan
            }
        }
    }
    return false; // Tidak ada kecocokan
}

// Tambahkan listener untuk datawbtest dan datawbtestinp
socket.on('dataloadtest', (dataloadtest) => {
    handleData('dataloadtest', dataloadtest);
});

socket.on('dataloadtestinp', (dataloadtestinp) => {
    handleData('dataloadtestinp', dataloadtestinp);
});

</script>

@endpush

@endsection



