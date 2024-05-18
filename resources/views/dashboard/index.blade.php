@extends('layouts/main')

@section('mainClass')

<div class="warren-landing">

  <div class="welcome-row dark:bg-gray-800">
    <div class="welcome-block dark:bg-gray-800">
      <div class="welcome-copy dark:bg-gray-800">
        <h1 class="dark:text-white">
          Welcome to NavApp Application Monitoring
        </h1>
        <p class="text-reject dark:text-gray-300">
          NavApp is an application used to measure the performance of an application, especially a web application in a browser environment that uses a web server for communication between client and server. This application offers convenience for users with 3 measurement features and analysis of measurement results.
        </p>
      </div>
      <div class="font-size-1">
        <div class="text-reject text-uppercases dark:text-gray-300">Nav App</div>
        <div class="padding-top-8 flex items-center">
          <a href="" class="flex items-center text-[rgb(50,153,254)]">
              <span class="mr-2"> <!-- Tambahkan kelas untuk memberikan margin ke kanan -->
                  <svg class="w-[18px] h-[18px] text-[rgb(50,153,254)]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/>
                  </svg>
              </span>
              Documentation
          </a>
        </div>
        <div class="padding-top-8 flex items-center">
          <a href="" class="flex items-center text-[rgb(50,153,254)]">
              <span class="mr-2"> <!-- Tambahkan kelas untuk memberikan margin ke kanan -->
                <svg class="w-[18px] h-[18px] text-[rgb(50,153,254)]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/>
                </svg>                
              </span>
              Manage Application
          </a>
        </div>
      </div>
    </div>
    <div class="balancer-banner default-banner cursor-pointer dark:bg-gray-800">
      <div>
        <span></span>
        <h2 class="dark:text-white">Embrace the Elegance of Darkness</h2>
        <p>Dark theme now available</p>
        {{-- <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
          <svg id="theme-toggle-dark-icon2" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
          <svg id="theme-toggle-light-icon2" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </button> --}}
      </div>
    </div>
  </div>

  <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-5">
    <div class="flex items-center justify-between dark:bg-gray-800">
      <h1 class="mt-2 mb-2 ml-4 font-sans text-xl dark:text-white">Start new Services Application!</h1>
    </div>
  </div>

  <div class="start-service border-2 border-black/12.5 rounded-lg border-gray-100 dark:border-gray-800 h-96 mb-4">

    <ul class="flex flex-col p-4 md:p-0 mt-4 font-small border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700 text-sm mb-4 justify-between">
      <div class="flex items-center dark:bg-gray-800">
          <li>
              <a class="menu-tabs menu-tabs--selected dark:text-white" data-target="#monitoring-services"><p>Monitoring Services</p></a>
          </li>
          <li>
              <a class="menu-tabs dark:text-white" data-target="#testing-services">Testing Services</a>
          </li>
          <li>
              <a class="menu-tabs dark:text-white" data-target="#manage-services">Manage Services</a>
          </li>
      </div>
      <button id="dropdownNavbarLink" class="flex items-center justify-between w-full py-2 px-3 text-blue-custom text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:text-white">
          More Details <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
      </button>
    </ul>


    {{-- konten untuk monitoring services --}}
    <div id="monitoring-services" class="content-section dark:bg-gray-800" style="display: none;">

      <div class="flex flex-wrap -mx-3 dark:bg-gray-800">
          <!-- card1 -->
          <div class="flex-wrap-1 w-full max-w-full px-1 mb-4 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/3 dark:bg-gray-800">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                <div class="px-3 text-left basis-1/4">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                        {{-- <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-2m-2.2-4A3 3 0 0 0 19 8a3 3 0 0 0-5.2-2M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg> --}}
                        <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1M5 12h14M5 12a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1m-2 3h.01M14 15h.01M17 9h.01M14 9h.01"/>
                        </svg>                      
                    </div>
                </div>
                <div class="label-m flex-none w-2/4 max-w-full">
                    <h2 class="dark:text-white">Web Server Analytic</h2>
                    <p class="dark:text-gray-300">Network</p>
                </div>
                <div class="flex-none w-1/4 max-w-full px-3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl">
                    <a href="/webAnalytic">
                      <svg class="w-[30px] h-[30px] ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                      </svg>  
                    </a>           
                  </div>
                </div>
                </div>
            </div>
            </div>
          </div>
        
          <!-- card2 -->
          <div class="flex-wrap-1 w-full max-w-full px-1 mb-4 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/3">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                <div class="px-3 text-left basis-1/4">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                        <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M7.926 10.898 15 7.727m-7.074 5.39L15 16.29M8 12a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm12 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm0-11a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                        </svg>                      
                    </div>
                </div>
                <div class="label-m flex-none w-2/4 max-w-full">
                    <h2 class="dark:text-white">LoadBalance Analytic</h2>
                    <p class="dark:text-gray-300">Network</p>
                </div>
                <div class="flex-none w-1/4 max-w-full px-3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl">
                    <a href="/loadAnalytic">
                      <svg class="w-[30px] h-[30px] ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                      </svg>  
                    </a>           
                  </div>
                </div>
                </div>
            </div>
            </div>
          </div>
        
          <!-- card3 -->
          <div class="flex-wrap-1 w-full max-w-full px-1 mb-4 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/3">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                <div class="px-3 text-left basis-1/4">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                    <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5"/>
                    </svg>                  
                    </div>
                </div>
                <div class="label-m flex-none w-2/4 max-w-full">
                    <h2 class="dark:text-white">Realtime Analytic</h2>
                    <p class="dark:text-gray-300">Network</p>
                </div>
                <div class="flex-none w-1/4 max-w-full px-3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl">
                    <a href="/realtimeAnalytic">
                      <svg class="w-[30px] h-[30px] ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                      </svg> 
                    </a>            
                  </div>
                </div>
                </div>
            </div>
            </div>
          </div>
      </div>

      <div class="jumbotron-model-all">
          <div class="jumbotron-model max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a>
                <img class="jumbotron-model-img rounded-t-lg" src="/img/web-analytic.png" alt="" />
            </a>
            <div class="p-5">
                <p class="font-label dark:text-gray-300">Network</p>
                <h1 class="dark:text-white">Web Server Analytic</h1>
                <p class="font-size dark:text-gray-300">This feature is used to display WebTest measurement data in the form of a table with several parameters in it.</p>
                <a href="/webAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                    View Monitoring
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                        <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
          </div>

          <div class="jumbotron-model max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a>
                <img class="jumbotron-model-img rounded-t-lg" src="/img/load-analytic.png" alt="" />
            </a>
            <div class="p-5">
                <p class="font-label dark:text-gray-300">Network</p>
                <h1 class="dark:text-white">Load Balance Analytic</h1>
                <p class="font-size dark:text-gray-300">This feature displays LoadTest measurement data to analyze the performance of the Load Balancing algorithm and is displayed in graphical form.</p>
                <a href="/loadAnalytic" class="dark:bg-gray-800 inline-flex items-center py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                    View Monitoring
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                        <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
          </div>

          <div class="jumbotron-model max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a>
                <img class="jumbotron-model-img rounded-t-lg" src="/img/realtime-analytic.png" alt="" />
            </a>
            <div class="p-5">
                <p class="font-label dark:text-gray-300">Network</p>
                <h1 class="dark:text-white">Realtime Analytic</h1>
                <p class="font-size dark:text-gray-300">This feature displays the RealtimeTest measurement data and displays it as a realtime graph.</p>
                <a href="/realtimeAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                    View Monitoring
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                        <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
          </div>
      </div>

      <div id="controls-carousel" class="relative w-full" data-carousel="static">
          <!-- Carousel wrapper -->
          <div class="relative h-60 overflow-hidden rounded-lg md:h-64">
              <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  {{-- <img src="/img/profile.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                  <div class="jumbotron-model-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="jumbotron-model-img-1 rounded-t-lg" src="/img/web-analytic.png" alt="" />
                    </a>
                    <div class="p-5">
                        <p class="font-label dark:text-gray-300">Network</p>
                        <h1 class="dark:text-white">Web Server Analytic</h1>
                        <p class="font-size dark:text-gray-300">This feature is used to display WebTest measurement data in the form of a table with several parameters in it.</p>
                        <a href="/webAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                            View Monitoring
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                                <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                  </div>
                </div>
              <!-- Item 2 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                  {{-- <img src="/img/profile.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                  <div class="jumbotron-model-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="jumbotron-model-img-1 rounded-t-lg" src="/img/load-analytic.png" alt="" />
                    </a>
                    <div class="p-5">
                        <p class="font-label dark:text-gray-300">Network</p>
                        <h1 class="dark:text-white">Load Balance Analytic</h1>
                        <p class="font-size dark:text-gray-300">This feature displays LoadTest measurement data to analyze the performance of the Load Balancing algorithm and is displayed in graphical form.</p>
                        <a href="/loadAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                            View Monitoring
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                                <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                  </div>
                </div>
              <!-- Item 3 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  {{-- <img src="/img/profile.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                  <div class="jumbotron-model-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="jumbotron-model-img-1 rounded-t-lg" src="/img/realtime-analytic.png" alt="" />
                    </a>
                    <div class="p-5">
                        <p class="font-label dark:text-gray-300">Network</p>
                        <h1 class="dark:text-white">Realtime Analytic</h1>
                        <p class="font-size dark:text-gray-300">This feature displays the RealtimeTest measurement data and displays it as a realtime graph.</p>
                        <a href="/realtimeAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                            View Monitoring
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                                <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                  </div>
              </div>
          </div>
          <!-- Slider controls -->
          <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-blue dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="rgb(50, 153, 254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-blue dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="rgb(50, 153, 254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
      </div>
      

    
    </div>


    {{-- konten untuk testing services --}}
    <div id="testing-services" class="content-section" style="display: none;">
    <div class="flex flex-wrap -mx-3">
      <!-- card1 -->
      <div class="flex-wrap-1 w-full max-w-full px-2 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/3">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
          <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
              <div class="px-3 text-left basis-1/4">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                    <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.005 11.19V12l6.998 4.042L19 12v-.81M5 16.15v.81L11.997 21l6.998-4.042v-.81M12.003 3 5.005 7.042l6.998 4.042L19 7.042 12.003 3Z"/>
                    </svg>                                      
                  </div>
              </div>
              <div class="label-m flex-none w-2/4 max-w-full">
                  <h2 class="dark:text-white">Web Server Testing</h2>
                  <p class="dark:text-gray-300">Network</p>
              </div>
              <div class="flex-none w-1/4 max-w-full px-3">
                <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl">
                  <a href="/webTest">
                    <svg class="w-[30px] h-[30px] ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                    </svg>  
                  </a>           
                </div>
              </div>
              </div>
          </div>
          </div>
      </div>
      
      <!-- card2 -->
      <div class="flex-wrap-1 w-full max-w-full px-2 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/3">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
          <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
              <div class="px-3 text-left basis-1/4">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                      <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H4m0 0v4m0-4 5 5m7-5h4m0 0v4m0-4-5 5M8 20H4m0 0v-4m0 4 5-5m7 5h4m0 0v-4m0 4-5-5"/>
                      </svg>                         
                  </div>
              </div>
              <div class="label-m flex-none w-2/4 max-w-full">
                  <h2 class="dark:text-white">Load Balance Testing</h2>
                  <p class="dark:text-gray-300">Network</p>
              </div>
              <div class="flex-none w-1/4 max-w-full px-3">
                <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl">
                  <a href="/loadTest">
                    <svg class="w-[30px] h-[30px] ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                    </svg>                   
                  </a>           
                </div>
              </div>
              </div>
          </div>
          </div>
      </div>
      
      <!-- card3 -->
      <div class="flex-wrap-1 w-full max-w-full px-2 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/3">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border dark:bg-gray-600">
          <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
              <div class="px-3 text-left basis-1/4">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-500 to-blue-400">
                    <svg class="w-[30px] h-[30px] text-gray-800 text-white ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M8.6 5.2A1 1 0 0 0 7 6v12a1 1 0 0 0 1.6.8l8-6a1 1 0 0 0 0-1.6l-8-6Z" clip-rule="evenodd"/>
                    </svg>                                    
                  </div>
              </div>
              <div class="label-m flex-none w-2/4 max-w-full">
                  <h2 class="dark:text-white">Realtime Testing</h2>
                  <p class="dark:text-gray-300">Network</p>
              </div>
              <div class="flex-none w-1/4 max-w-full px-3">
                <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl">
                  <a href="/realtimeTest">
                    <svg class="w-[30px] h-[30px] ml-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                    </svg> 
                  </a>            
                </div>
              </div>
              </div>
          </div>
          </div>
      </div>
    </div>

    <div class="jumbotron-model-all">
      <div class="jumbotron-model max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a>
            <img class="jumbotron-model-img rounded-t-lg" src="/img/web-test.png" alt="" />
        </a>
        <div class="p-5">
            <p class="font-label dark:text-gray-300">Network</p>
            <h1 class="dark:text-white">Web Server Testing</h1>
            <p class="font-size dark:text-gray-300">This feature is used to measure the application to be tested with several parameters generated.</p>
            <a href="/webAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                Create New Testing
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                    <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>

      <div class="jumbotron-model max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a>
            <img class="jumbotron-model-img rounded-t-lg" src="/img/load-test.png" alt="" />
        </a>
        <div class="p-5">
            <p class="font-label dark:text-gray-300">Network</p>
            <h1 class="dark:text-white">Load Balance Testing</h1>
            <p class="font-size dark:text-gray-300">This feature is used to measure the application and is specifically for analyzing the load balance algorithm used.</p>
            <a href="/loadAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                Create New Testing
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                    <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>

      <div class="jumbotron-model max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a>
            <img class="jumbotron-model-img rounded-t-lg" src="/img/realtime-test.png" alt="" />
        </a>
        <div class="p-5">
            <p class="font-label dark:text-gray-300">Network</p>
            <h1 class="dark:text-white">Realtime Testing</h1>
            <p class="font-size dark:text-gray-300">This feature is used to measure the application and the measurement is done continuously(realtime).</p>
            <a href="/realtimeAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                Create New Testing
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                    <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>
    </div>

    <div id="controls-carousel2" class="relative w-full" data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="relative h-60 overflow-hidden rounded-lg md:h-64">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              {{-- <img src="/img/profile.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
              <div class="jumbotron-model-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a>
                    <img class="jumbotron-model-img-1 rounded-t-lg" src="/img/web-test.png" alt="" />
                </a>
                <div class="p-5">
                    <p class="font-label dark:text-gray-300">Network</p>
                    <h1 class="dark:text-white">Web Server Testing</h1>
                    <p class="font-size dark:text-gray-300">This feature is used to measure the application to be tested with several parameters generated.</p>
                    <a href="/webTest" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                        Create New Testing
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                            <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
              </div>
            </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
              {{-- <img src="/img/profile.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
              <div class="jumbotron-model-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a>
                    <img class="jumbotron-model-img-1 rounded-t-lg" src="/img/load-test.png" alt="" />
                </a>
                <div class="p-5">
                    <p class="font-label dark:text-gray-300">Network</p>
                    <h1 class="dark:text-white">Load Balance Testing</h1>
                    <p class="font-size dark:text-gray-300">This feature is used to measure the application and is specifically for analyzing the load balance algorithm used.</p>
                    <a href="/loadTest" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                        Create New Testing
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                            <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
              </div>
            </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              {{-- <img src="/img/profile.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
              <div class="jumbotron-model-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a>
                    <img class="jumbotron-model-img-1 rounded-t-lg" src="/img/realtime-test.png" alt="" />
                </a>
                <div class="p-5">
                    <p class="font-label dark:text-gray-300">Network</p>
                    <h1 class="dark:text-white">Realtime Testing</h1>
                    <p class="font-size dark:text-gray-300">This feature is used to measure the application and the measurement is done continuously(realtime).</p>
                    <a href="/realtimeAnalytic" class="dark:bg-gray-800 inline-flex items-center mt-2 py-1 text-blue-custom text-xs font-medium text-center text-blue rounded-lg hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-100 dark:bg-blue-100 dark:hover:bg-blue-100 dark:focus:ring-blue-100">
                        Create New Testing
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 5">
                            <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
              </div>
          </div>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-blue dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="rgb(50, 153, 254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-blue dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="rgb(50, 153, 254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
    </div>

    </div>

    {{-- konten untuk Manage services --}}
    <div id="manage-services" class="content-section" style="display: none;">
    <div class="flex flex-wrap -mx-3 mb-4">


    </div>
    </div>

  </div>

  



</div>


<script>

// Fungsi untuk mengatur tampilan berdasarkan ukuran layar
function handleScreenSizeChange(mediaQuery) {
    // Periksa apakah dropdown dalam mode "Less Details"
    const dropdownMode = document.getElementById('dropdownNavbarLink').innerText.includes('Less Details');
    
    // Jika ukuran layar di bawah 1100px dan dropdown dalam posisi "Less Details"
    if (mediaQuery.matches && dropdownMode) {
        // Tampilkan controls-carousel dan sembunyikan jumbotron-model-all
        // document.querySelector('#monitoring-services .jumbotron-model-all').style.display = 'none';
        document.querySelector('#controls-carousel').style.display = 'block';
        document.querySelectorAll('#monitoring-services .jumbotron-model').forEach(el => el.style.display = 'none');

        document.querySelector('#controls-carousel2').style.display = 'block';
        document.querySelectorAll('#testing-services .jumbotron-model').forEach(el => el.style.display = 'none');
        // document.querySelectorAll('#controls-carousel').forEach(el => el.style.display = 'block');
    } else {
        // Jika ukuran layar di atas 1100px dan dropdown dalam posisi "More Details"
        // Tampilkan jumbotron-model-all dan sembunyikan controls-carousel
        // document.querySelector('#monitoring-services .jumbotron-model-all').style.display = 'block';
        document.querySelector('#controls-carousel').style.display = 'none';
        document.querySelector('#controls-carousel2').style.display = 'none';
        // document.querySelectorAll('#monitoring-services .jumbotron-model').forEach(el => el.style.display = 'block');
        // document.querySelectorAll('#controls-carousel').forEach(el => el.style.display = 'none');
    }
    
}

// Inisialisasi media query untuk ukuran layar di bawah 1100px
const mediaQuery = window.matchMedia('(max-width: 1200px)');

// Menjalankan fungsi handleScreenSizeChange saat pertama kali dijalankan
handleScreenSizeChange(mediaQuery);

// Menambahkan event listener untuk mendengarkan perubahan ukuran layar
mediaQuery.addEventListener('change', handleScreenSizeChange);

// Fungsi untuk mengatur tampilan berdasarkan ukuran layar
function handleScreenSizeChange2(mediaQuery2) {
    // Periksa apakah dropdown dalam mode "Less Details"
    const dropdownMode2 = document.getElementById('dropdownNavbarLink').innerText.includes('Less Details');
    
    // Jika ukuran layar di bawah 1100px dan dropdown dalam posisi "Less Details"
    if (mediaQuery2.matches && dropdownMode2) {
        // Tampilkan controls-carousel dan sembunyikan jumbotron-model-all
        // document.querySelector('#monitoring-services .jumbotron-model-all').style.display = 'none';
        document.querySelector('#controls-carousel').style.display = 'none';
        document.querySelectorAll('#monitoring-services .jumbotron-model').forEach(el => el.style.display = 'block');

        document.querySelector('#controls-carousel2').style.display = 'none';
        document.querySelectorAll('#testing-services .jumbotron-model').forEach(el => el.style.display = 'block');
        // document.querySelectorAll('#controls-carousel').forEach(el => el.style.display = 'block');
    }
    
}

// Inisialisasi media query untuk ukuran layar di bawah 1100px
const mediaQuery2 = window.matchMedia('(min-width: 1199px)');

// Menjalankan fungsi handleScreenSizeChange saat pertama kali dijalankan
handleScreenSizeChange2(mediaQuery2);

// Menambahkan event listener untuk mendengarkan perubahan ukuran layar
mediaQuery2.addEventListener('change', handleScreenSizeChange2);

// Fungsi untuk mengatur tab dan konten yang ditampilkan
function displayContent(tab, contentToDisplay) {
    // Hapus kelas aktif dari semua tab
    document.querySelectorAll('.menu-tabs').forEach(t => {
        t.classList.remove('menu-tabs--selected');
    });
    // Tambahkan kelas aktif pada tab yang dipilih
    tab.classList.add('menu-tabs--selected');
    // Sembunyikan semua konten
    document.querySelectorAll('.content-section').forEach(section => {
        section.style.display = 'none';
    });
    // Tampilkan konten yang sesuai
    contentToDisplay.style.display = 'block';

    // Setelah memilih tab, periksa ukuran layar dan setel tampilan
    handleScreenSizeChange(mediaQuery);
    handleScreenSizeChange2(mediaQuery2);
}

// Tambahkan event listener untuk setiap tab
document.querySelectorAll('.menu-tabs').forEach(tab => {
    tab.addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah tindakan default dari tautan
        
        // Tentukan target konten yang akan ditampilkan berdasarkan tab yang dipilih
        const target = this.getAttribute('data-target');
        const contentSection = document.querySelector(target);
        
        // Pastikan konten section ditemukan
        if (contentSection) {
            // Periksa apakah tombol dropdown dalam mode "More Details" atau "Less Details"
            const dropdownMode = document.getElementById('dropdownNavbarLink').innerText.includes('Less Details');
            
            // Jika dropdown dalam mode "Less Details" dan tab "Monitoring Services" aktif, tampilkan konten jumbotron
            if (dropdownMode && target === '#monitoring-services') {
                document.querySelectorAll('#monitoring-services .flex-wrap-1').forEach(el => el.style.display = 'none');
                document.querySelectorAll('#monitoring-services .jumbotron-model').forEach(el => el.style.display = 'block');
                // document.querySelectorAll('#monitoring-services .jumbotron-model-1').forEach(el => el.style.display = 'block');
            } else if (target === '#monitoring-services') {
                // Jika dropdown dalam mode "More Details" dan tab "Monitoring Services" aktif, tampilkan bagian monitoring
                document.querySelectorAll('#monitoring-services .flex-wrap-1').forEach(el => el.style.display = 'block');
                document.querySelectorAll('#monitoring-services .jumbotron-model').forEach(el => el.style.display = 'none');
                // document.querySelectorAll('#monitoring-services .jumbotron-model-1').forEach(el => el.style.display = 'none');
            } 
            if (dropdownMode && target === '#testing-services') {
                // Jika dropdown dalam mode "Less Details" dan tab "Testing Services" aktif, tampilkan bagian testing
                document.querySelectorAll('#testing-services .flex-wrap-1').forEach(el => el.style.display = 'none');
                document.querySelectorAll('#testing-services .jumbotron-model').forEach(el => el.style.display = 'block');
            } else if (target === '#testing-services') {
                // Jika dropdown dalam mode "More Details" dan tab "Testing Services" aktif, tampilkan bagian testing
                document.querySelectorAll('#testing-services .flex-wrap-1').forEach(el => el.style.display = 'block');
                document.querySelectorAll('#testing-services .jumbotron-model').forEach(el => el.style.display = 'none');
            }

            // Tampilkan konten yang sesuai dengan tab yang dipilih
            displayContent(this, contentSection);
        }
    });
});

// Kondisi awal: tampilkan tab dan konten "Monitoring Services" dalam mode "More Details"
document.querySelector('.menu-tabs[data-target="#monitoring-services"]').classList.add('menu-tabs--selected');
document.querySelector('#monitoring-services').style.display = 'block';
document.querySelector('#monitoring-services .flex-wrap-1').style.display = 'block';
document.querySelectorAll('#monitoring-services .jumbotron-model').forEach(el => el.style.display = 'none');
// document.querySelectorAll('#controls-carousel .jumbotron-model-1').forEach(el => el.style.display = 'none');
document.querySelector('#controls-carousel').style.display = 'none';
// Dapatkan elemen tombol berdasarkan ID
const dropdownButton = document.getElementById('dropdownNavbarLink');

// Variabel untuk melacak apakah tombol dalam mode "More Details" atau "Less Details"
let isMoreDetails = true;

// Fungsi untuk mengubah tombol dropdown dan konten sesuai dengan mode
function toggleDropdown() {
    // Bergantian antara mode "More Details" dan "Less Details"
    if (isMoreDetails) {
        // Ubah tombol menjadi "Less Details"
        dropdownButton.innerHTML = `
            Less Details
            <svg class="w-[18px] h-[18px] ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 26 26">
                <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m5 15 7-7 7 7"/>
            </svg>
        `;
        
        // Sembunyikan bagian monitoring dan tampilkan jumbotron model di konten monitoring services
        document.querySelectorAll('#monitoring-services .flex-wrap-1').forEach(el => el.style.display = 'none');
        document.querySelectorAll('#monitoring-services .jumbotron-model').forEach(el => el.style.display = 'block');
        // document.querySelectorAll('#monitoring-services .jumbotron-model-1').forEach(el => el.style.display = 'block');

        // Sembunyikan bagian testing dan tampilkan jumbotron model di konten testing services
        document.querySelectorAll('#testing-services .flex-wrap-1').forEach(el => el.style.display = 'none');
        document.querySelectorAll('#testing-services .jumbotron-model').forEach(el => el.style.display = 'block');
    } else {
        // Ubah tombol menjadi "More Details"
        dropdownButton.innerHTML = `
            More Details
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="rgb(50,153,254)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        `;
        
        // Sembunyikan jumbotron model dan tampilkan bagian monitoring di konten monitoring services
        document.querySelectorAll('#monitoring-services .flex-wrap-1').forEach(el => el.style.display = 'block');
        document.querySelectorAll('#monitoring-services .jumbotron-model').forEach(el => el.style.display = 'none');
        // document.querySelectorAll('#monitoring-services .jumbotron-model-1').forEach(el => el.style.display = 'none');

        // Sembunyikan bagian testing dan tampilkan jumbotron model di konten testing services
        document.querySelectorAll('#testing-services .flex-wrap-1').forEach(el => el.style.display = 'block');
        document.querySelectorAll('#testing-services .jumbotron-model').forEach(el => el.style.display = 'none');
    }
    
    // Beralih mode
    isMoreDetails = !isMoreDetails;

    // Perbarui tampilan berdasarkan kondisi dropdown
    handleScreenSizeChange(mediaQuery);
}

// Tambahkan event listener untuk tombol dropdown
dropdownButton.addEventListener('click', toggleDropdown);

</script>



@endsection



