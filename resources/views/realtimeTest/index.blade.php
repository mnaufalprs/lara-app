@extends('layouts/main')

@push('cs')
<style>
    .button-disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }
</style>
@endpush

@section('mainClass')

<div class="w-full max-w-full mt-0 mb-6 md:mb-0">
    <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border dark:bg-gray-800 mb-4">

        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Realtime Testing Web Server</h2>
            <form id="testingForm" action="/realtimeTest" method="post">
                @csrf
                @php
                    $statusConnect = $input_livetest ? $input_livetest->status_connect : 0;
                @endphp
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="server_address" class="block mb-2 text-sm flex items-center font-medium text-gray-900 dark:text-white">Server Address<button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button">
                            <svg class="w-4 h-4 ms-1 text-gray-400 hover:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 24"><path fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h0m9-4a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
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

                        <input type="text" name="server_address" id="server_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('server_address') is-invalid @enderror" placeholder="192.168.x.x OR domain.com" required="" value="{{ $statusConnect == 1 ? $input_livetest->server_address : '' }}" @if($statusConnect == 1) readonly @endif>
                        @error('server_address')
                                <div class="alert alert-danger" style="font-size: 12px; color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="request_count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Request Count</label>
                        <input type="number" name="request_count" id="request_count" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="concurrent" required="" value="{{ $statusConnect == 1 ? $input_livetest->request_count : '' }}" @if($statusConnect == 1) readonly @endif>
                    </div>
                    <div class="w-full">
                        <label for="connection_count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Connection Count</label>
                        <input type="number" name="connection_count" id="connection_count" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="2999" required="" value="{{ $statusConnect == 1 ? $input_livetest->connection_count : '' }}" @if($statusConnect == 1) readonly @endif>
                    </div>
                    {{-- <div>
                        <label for="category_server" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Server</label>
                        <select name="category_server" id="category_server" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="Load Balance">Load Balance</option>
                            <option value="No Load Balance">No Load Balance</option>
                        </select>
                    </div> --}}
                    {{-- <div class="w-full" style="visibility: hidden"> --}}
                    <div class="w-full" style="">
                        <label for="user_id_live" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Id</label>
                        <div type="number" name="user_id_live" id="user_id_live" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">{{ $dataUserId }}</div>
                    </div>
                </div>

                <!-- Start button -->
                <button id="startButton" type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 mr-2 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800 @if($statusConnect == 1) button-disabled @endif" @if($statusConnect == 1) disabled @endif>Start Testing</button>
                

                <!-- Stop button -->
                <button id="stopButton" type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 mr-2 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800 @if($statusConnect == 0) button-disabled @endif" @if($statusConnect == 0) disabled @endif>Stop Testing</button>

                @if($statusConnect == 0)
                    <input type="hidden" id="status_connect" value="1" name="status_connect">
                @else
                    <input type="hidden" id="status_connect" value="0" name="status_connect">
                @endif

                <div class="inline-flex items-center py-2.5">
                    <a href="/realtimeAnalytic" class="inline-flex items-center py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        View Testing
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>

<script>
const socket = io.connect('http://localhost:3000');

// Ambil nilai $dataUserId dari elemen HTML
const dataUserIdElement = document.getElementById('user_id_live');
const dataUserId = dataUserIdElement ? dataUserIdElement.textContent : '';

// Kirim dataUserId ke server Socket.IO saat halaman dimuat
socket.emit('sendDataUserId', dataUserId);

// Tambahkan listener untuk mengonfirmasi penerimaan data di server
socket.on('dataUserIdAcknowledged', () => {
    console.log('Data user ID telah dikirim ke server dan diakui.');
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('testingForm').addEventListener('submit', function(event) {
            var startButton = document.getElementById('startButton');
            var stopButton = document.getElementById('stopButton');

            if (!startButton.classList.contains('button-disabled') || !stopButton.classList.contains('button-disabled')) {
                // Lanjutkan pengiriman formulir hanya jika salah satu tombol aktif
            } else {
                event.preventDefault(); // Mencegah pengiriman formulir jika keduanya dinonaktifkan
            }
        });
    });
</script>

@endpush


@endsection



