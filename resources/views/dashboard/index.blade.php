@extends('layouts/main')

@section('mainClass')

<div class="warren-landing">

  <div class="welcome-row">
    <div class="welcome-block">
      <div class="welcome-copy">
        <h1>
          Welcome to NavApp Application Monitoring
        </h1>
        <p class="text-reject">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis molestias repudiandae dolores, unde tempora perferendis quae enim quisquam tempore accusamus earum, quo mollitia quos ea animi eveniet reprehenderit, voluptatem autem doloremque officiis id nesciunt aspernatur natus. Omnis eius fugit consequatur.
        </p>
      </div>
      <div class="font-size-1">
        <div class="text-reject text-uppercases">Nav App</div>
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
    <div class="balancer-banner default-banner cursor-pointer">
      <div>
        <span></span>
        <h2>Embrace the Elegance of Darkness</h2>
        <p>Dark theme now available</p>
      </div>
    </div>
  </div>

  <div class="grid border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mb-5">
    <div class="flex items-center justify-between">
      <h1 class="mt-2 mb-2 ml-4 font-sans text-xl">Start new Services Application!</h1>
    </div>
  </div>

  <div class="start-service border-2 border-black/12.5 rounded-lg border-gray-100 dark:border-gray-100 h-96 mb-4">

    <ul class="flex flex-col p-4 md:p-0 mt-4 font-small border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700 text-sm">
      <li>
          <a href="#" class="menu-tabs menu-tabs--selected" aria-current="page">Monitoring Services</a>
      </li>
      <li>
          <a href="#" class="menu-tabs menu-tabs--selected">Testing Services</a>
      </li>
      <li>
          <a href="#" class="menu-tabs menu-tabs--selected">Manage Services</a>
      </li>
    </ul>

  </div>



</div>

@endsection



