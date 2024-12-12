@extends('layouts.admin')

@section('title', '')

@push('skrip')
    
@endpush

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6 text-blueGray-700">Dashboard</h1>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-blueGray-400 uppercase font-bold text-xs mb-2">Total Mitra</h3>
            <div class="flex justify-between items-center">
                <span class="text-xl font-bold text-blueGray-700">42</span>
                <span class="text-emerald-500">+15%</span>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-blueGray-400 uppercase font-bold text-xs mb-2">Produk Aktif</h3>
            <div class="flex justify-between items-center">
                <span class="text-xl font-bold text-blueGray-700">18</span>
                <span class="text-orange-500">+5%</span>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-blueGray-400 uppercase font-bold text-xs mb-2">Artikel Terbit</h3>
            <div class="flex justify-between items-center">
                <span class="text-xl font-bold text-blueGray-700">76</span>
                <span class="text-emerald-500">+22%</span>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-blueGray-400 uppercase font-bold text-xs mb-2">Pengunjung</h3>
            <div class="flex justify-between items-center">
                <span class="text-xl font-bold text-blueGray-700">5,362</span>
                <span class="text-red-500">-2%</span>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-lg font-bold mb-4 text-blueGray-700">Mitra Terbaru</h2>
            <ul>
                <li class="border-b py-2 flex justify-between items-center">
                    <span>PT Inovasi Sejahtera</span>
                    <span class="text-sm text-blueGray-500">2 hari yang lalu</span>
                </li>
                <li class="border-b py-2 flex justify-between items-center">
                    <span>CV Digital Mandiri</span>
                    <span class="text-sm text-blueGray-500">5 hari yang lalu</span>
                </li>
                <li class="py-2 flex justify-between items-center">
                    <span>Koperasi Berkah</span>
                    <span class="text-sm text-blueGray-500">1 minggu yang lalu</span>
                </li>
            </ul>
        </div>

        <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-lg font-bold mb-4 text-blueGray-700">Artikel Terbaru</h2>
            <ul>
                <li class="border-b py-2 flex justify-between items-center">
                    <span>Strategi Bisnis 2024</span>
                    <span class="text-sm text-blueGray-500">1 hari yang lalu</span>
                </li>
                <li class="border-b py-2 flex justify-between items-center">
                    <span>Kolaborasi Mitra Sukses</span>
                    <span class="text-sm text-blueGray-500">3 hari yang lalu</span>
                </li>
                <li class="py-2 flex justify-between items-center">
                    <span>Inovasi Talenta SDM</span>
                    <span class="text-sm text-blueGray-500">1 minggu yang lalu</span>
                </li>
            </ul>
        </div>
    </div>
</div>







<div class="relative bg-blue-600 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5
                      class="text-blueGray-400 uppercase font-bold text-xs"
                    >
                      Traffic
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                      350,897
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                    >
                      <i class="far fa-chart-bar"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-emerald-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 3.48%
                  </span>
                  <span class="whitespace-nowrap">
                    Since last month
                  </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5
                      class="text-blueGray-400 uppercase font-bold text-xs"
                    >
                      New users
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                      2,356
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                    >
                      <i class="fas fa-chart-pie"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-red-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 3.48%
                  </span>
                  <span class="whitespace-nowrap"> Since last week </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5
                      class="text-blueGray-400 uppercase font-bold text-xs"
                    >
                      Sales
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                      924
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500"
                    >
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-orange-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 1.10%
                  </span>
                  <span class="whitespace-nowrap"> Since yesterday </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5
                      class="text-blueGray-400 uppercase font-bold text-xs"
                    >
                      Performance
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                      49,65%
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500"
                    >
                      <i class="fas fa-percent"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-emerald-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 12%
                  </span>
                  <span class="whitespace-nowrap">
                    Since last month
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap">
      <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
        <div
          class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700"
        >
          <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
            <div class="flex flex-wrap items-center">
              <div class="relative w-full max-w-full flex-grow flex-1">
                <h6
                  class="uppercase text-blueGray-100 mb-1 text-xs font-semibold"
                >
                  Overview
                </h6>
                <h2 class="text-white text-xl font-semibold">
                  Sales value
                </h2>
              </div>
            </div>
          </div>
          <div class="p-4 flex-auto">
            <!-- Chart -->
            <div class="relative h-350-px">
              <canvas id="line-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full xl:w-4/12 px-4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
        >
          <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
            <div class="flex flex-wrap items-center">
              <div class="relative w-full max-w-full flex-grow flex-1">
                <h6
                  class="uppercase text-blueGray-400 mb-1 text-xs font-semibold"
                >
                  Performance
                </h6>
                <h2 class="text-blueGray-700 text-xl font-semibold">
                  Total orders
                </h2>
              </div>
            </div>
          </div>
          <div class="p-4 flex-auto">
            <!-- Chart -->
            <div class="relative h-350-px">
              <canvas id="bar-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap mt-4">
      <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
        >
          <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
              <div
                class="relative w-full px-4 max-w-full flex-grow flex-1"
              >
                <h3 class="font-semibold text-base text-blueGray-700">
                  Page visits
                </h3>
              </div>
              <div
                class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
              >
                <button
                  class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                  type="button"
                >
                  See all
                </button>
              </div>
            </div>
          </div>
          <div class="block w-full overflow-x-auto">
            <!-- Projects table -->
            <table
              class="items-center w-full bg-transparent border-collapse"
            >
              <thead>
                <tr>
                  <th
                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                  >
                    Page name
                  </th>
                  <th
                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                  >
                    Visitors
                  </th>
                  <th
                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                  >
                    Unique users
                  </th>
                  <th
                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                  >
                    Bounce rate
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    /argon/
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    4,569
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    340
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                    46,53%
                  </td>
                </tr>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    /argon/index.html
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    3,985
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    319
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                    46,53%
                  </td>
                </tr>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    /argon/charts.html
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    3,513
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    294
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                    36,49%
                  </td>
                </tr>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    /argon/tables.html
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    2,050
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    147
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                    50,87%
                  </td>
                </tr>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    /argon/profile.html
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    1,795
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    190
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                    46,53%
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="w-full xl:w-4/12 px-4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
        >
          <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
              <div
                class="relative w-full px-4 max-w-full flex-grow flex-1"
              >
                <h3 class="font-semibold text-base text-blueGray-700">
                  Social traffic
                </h3>
              </div>
              <div
                class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
              >
                <button
                  class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                  type="button"
                >
                  See all
                </button>
              </div>
            </div>
          </div>
          <div class="block w-full overflow-x-auto">
            <!-- Projects table -->
            <table
              class="items-center w-full bg-transparent border-collapse"
            >
              <thead class="thead-light">
                <tr>
                  <th
                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                  >
                    Referral
                  </th>
                  <th
                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                  >
                    Visitors
                  </th>
                  <th
                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"
                  ></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    Facebook
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    1,480
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <div class="flex items-center">
                      <span class="mr-2">60%</span>
                      <div class="relative w-full">
                        <div
                          class="overflow-hidden h-2 text-xs flex rounded bg-red-200"
                        >
                          <div
                            style="width: 60%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    Facebook
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    5,480
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <div class="flex items-center">
                      <span class="mr-2">70%</span>
                      <div class="relative w-full">
                        <div
                          class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200"
                        >
                          <div
                            style="width: 70%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    Google
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    4,807
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <div class="flex items-center">
                      <span class="mr-2">80%</span>
                      <div class="relative w-full">
                        <div
                          class="overflow-hidden h-2 text-xs flex rounded bg-purple-200"
                        >
                          <div
                            style="width: 80%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    Instagram
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    3,678
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <div class="flex items-center">
                      <span class="mr-2">75%</span>
                      <div class="relative w-full">
                        <div
                          class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200"
                        >
                          <div
                            style="width: 75%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                  >
                    twitter
                  </th>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    2,645
                  </td>
                  <td
                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                  >
                    <div class="flex items-center">
                      <span class="mr-2">30%</span>
                      <div class="relative w-full">
                        <div
                          class="overflow-hidden h-2 text-xs flex rounded bg-orange-200"
                        >
                          <div
                            style="width: 30%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <footer class="block py-4">
      <div class="container mx-auto px-4">
        <hr class="mb-4 border-b-1 border-blueGray-200" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4">
            <div
              class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left"
            >
              Copyright © <span id="get-current-year"></span>
              <a
                href="https://www.creative-tim.com?ref=njs-dashboard"
                class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1"
              >
                Creative Tim
              </a>
            </div>
          </div>
          <div class="w-full md:w-8/12 px-4">
            <ul
              class="flex flex-wrap list-none md:justify-end justify-center"
            >
              <li>
                <a
                  href="https://www.creative-tim.com?ref=njs-dashboard"
                  class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                >
                  Creative Tim
                </a>
              </li>
              <li>
                <a
                  href="https://www.creative-tim.com/presentation?ref=njs-dashboard"
                  class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                >
                  About Us
                </a>
              </li>
              <li>
                <a
                  href="http://blog.creative-tim.com?ref=njs-dashboard"
                  class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                >
                  Blog
                </a>
              </li>
              <li>
                <a
                  href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-dashboard"
                  class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                >
                  MIT License
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>


@endsection