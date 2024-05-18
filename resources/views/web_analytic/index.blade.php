@extends('layouts/main')

@section('mainClass')

<div class="flex flex-wrap -mx-3 mb-4">
<!-- card1 -->
<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
    <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
        <div class="flex-none w-2/3 max-w-full px-3">
            <div>
            <p class="mb-1 font-sans font-semibold leading-normal text-sm dark:text-white">Server address</p>
            <p class="mb-0 font-bold dark:text-gray-300" style="font-size: 0.785rem;">
                @if(isset($data_wbtest[0]['server_address']))
                    {{ $data_wbtest[0]['server_address'] }}
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
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
    <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
        <div class="flex-none w-2/3 max-w-full px-3">
            <div>
            <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:text-white">Connection Time</p>
            <h5 class="mb-0 font-bold dark:text-gray-300">
                @if(isset($data_wbtest[0]['connection_time']))
                    {{ $data_wbtest[0]['connection_time'] }} ms
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
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- card3 -->
<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
    <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
        <div class="flex-none w-2/3 max-w-full px-3">
            <div>
            <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:text-white">Transfer Rate</p>
            <h5 class="mb-0 font-bold dark:text-gray-300">
                @if(isset($data_wbtest[0]['transfer_rate']))
                    {{ $data_wbtest[0]['transfer_rate'] }} Kbps
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
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11v5m0 0 2-2m-2 2-2-2M3 6v1c0 .6.4 1 1 1h16c.6 0 1-.4 1-1V6c0-.6-.4-1-1-1H4a1 1 0 0 0-1 1Zm2 2v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V8H5Z"/>
            </svg>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- card4 -->
<div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
    <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
        <div class="flex-none w-2/3 max-w-full px-3">
            <div>
            <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:text-white">Request Loss</p>
            <h5 class="mb-0 font-bold dark:text-gray-300">
            @if(isset($data_wbtest[0]['request_loss']))
                    {{ $data_wbtest[0]['request_loss'] }} %
                    <span class="leading-normal text-sm font-weight-bolder text-lime-500 ml-2">+55%</span>
            @else
                - 
            @endif
            </h5>
            </div>
        </div>
        <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
            {{-- <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i> --}}
            <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
            </svg>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

{{-- Tabel data pengukuran --}}
<div class="w-full max-w-full mt-0 mb-6 md:mb-0">
    <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border dark:bg-gray-800 mb-4">
    {{-- <div
    class="border-2 rounded-lg border-gray-10 dark:border-gray-600 h-109 mb-4"
    > --}}
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg md:p-4">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <div>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                        </svg>
                    Last 30 days
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last day</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 7 days</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 30 days</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last month</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last year</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- search table --}}
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
            <form action="/webAnalytic">
                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" name="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Server Hostname" value="{{ request('table-search') }}">
            </form>
            </div>
        </div>
        <table class="w-full z-40 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-x text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    {{-- <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th> --}}
                    <th scope="col" class="px-4 py-3">
                        Server Hostname
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time Testing
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Time Taken for Test (s)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Request per Second 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time per Request (ms)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Transfer Rate (Kbps)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Connection Time (ms)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Request Loss (%)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="z-50">
                @foreach( $data_wbtest as $row )
                    <tr class="bg-white border-b z-40 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        {{-- <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td> --}}
                        <th scope="row" class="px-4 py-4 z-40 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $row["server_address"]; ?>
                        </th>
                        <td class="px-6 py-4" style="font-size: 11px;">
                            <?= $row["created_at"]; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $row["time_taken"]; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $row["request_second"]; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $row["time_request"]; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $row["transfer_rate"]; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $row["connection_time"]; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $row["request_loss"]; ?>
                        </td>
                        <td class="action-column px-6 py-4">
                            <button data-popover-target="popover-top <?= $row["id"]; ?>" data-popover-placement="top" type="button" class="text-white bg-gradient-to-tl from-purple-500 to-blue-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-6 h-6 text-gray-800 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>                              
                            </button>
                        
                            <div data-popover id="popover-top <?= $row["id"]; ?>" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Other Information</h3>
                                </div>
                                <div class="px-3 py-2">
                                    <p>Request Count: {{ $row->input_wbtest->request_count }} req/s</p>
                                    <p>Connection Count: {{ $row->input_wbtest->connection_count }}</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                        
                            <!-- Form for Delete -->
                            <form action="{{ route('webAnalytic.destroy', ['webAnalytic' => $row->id]) }}" method="POST" class="inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" onclick="return confirm('You can delete data, are you sure?')" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm text-center mt-1.5">
                                    <svg class="w-6 h-6 text-gray-800 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
        </ul>
        </nav> --}}
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-end pt-4" aria-label="Table navigation">
        {{ $data_wbtest->links() }}
        </nav>
    </div>

    {{-- </div> --}}

    </div>
</div>
{{-- end tabel data pengukuran --}}


@endsection