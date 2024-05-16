<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
  </head>
  <body>
    {{-- SIDEBAR --}}
    <div id="mySidebar" class="sidebar fixed left-0 top-0 h-screen bg-[#383838] text-white px-5 py-5">
      <h1 class="text-center text-2xl">
          Aisin Asset Tracking
      </h1>
      <div class="flex pt-12">
          <img src="/image/profile.png" alt="profile" class="w-12 bg-white rounded-full">
            <div class="pl-2">
              <p>User</p>
              <div class="flex items-center">
                <svg width="10" height="10" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1" cy="1" r="1" fill="#10FD52"/>
                  </svg>
                  <p class="pl-2">Online</p>
              </div>
            </div>
        </div>
        <div class="flex bg-[#828282] items-center justify-between rounded px-2 my-4 py-1">
          <input class="bg-[#828282] focus:outline-none" type="text" placeholder="Search...">
          <img src="/image/search.png" alt="search" class="w-6">
        </div>
        <ul class="">
          <li class="mt-10 p-2 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
            <a href="/" class="flex items-center">
              <img class="w-7" src="/image/dashboard.png" alt="dashboard">
                <p class="pl-2">Dashboard</p>
            </a>
          </li>
          <li class="my-4 p-2 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
            <a href="listasset" class="flex">
              <img class="w-7" src="/image/assetdetail.png" alt="assetdetail">
                <p class="pl-2">Assets Details</p>
            </a>
          </li>
          <li class="mt-4 p-2 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
            <a href="#" class="flex items-center reportLink">
              <img class="w-7 mr-2" src="/image/construction.png" alt="construction">
              <div class="flex w-full justify-between">
                <p class="pl-2">Construction in Progress</p>
                <img class="w-7 transform transition duration-300 ease-in-out reportArrow" src="/image/arrow.png" alt="arrow">
              </div>
            </a>
          </li>
          <ul class="reportOptions" style="display: none;">
            <li class="p-1 pl-11 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
              <a href="/cip/request">
                <p>Request CIP Number</p>
              </a>
            </li>
            <li class="p-1 pl-11 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
              <a href="/cip/confimation">
                <p>Confirmation CIP</p>
              </a>
            </li>
            <li class="p-1 pl-11 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
              <a href="cip/outstanding">
                <p>Outstanding CIP</p>
              </a>
            </li>
          </ul>
          <li class="my-4 p-2 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
            <a href="assetlayout" class="flex">
              <img class="w-7" src="/image/assetlayout.png" alt="assetlayout">
                <p class="pl-2">Assets Layout</p>
            </a>
          </li>
          <li class="my-4 p-2 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
            <a href="assetopname" class="flex">
              <img class="w-7" src="/image/assetopname.png" alt="assetopname">
                <p class="pl-2">Assets Opname</p>
            </a>
          </li>
          <li class="mt-4 p-2 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
            <a href="#" class="flex items-center reportLink">
              <img class="w-7 mr-2" src="/image/report.png" alt="report">
              <div class="flex w-full justify-between">
                <p class="pl-2">Report</p>
                <img class="w-7 transform transition duration-300 ease-in-out reportArrow" src="/image/arrow.png" alt="arrow">
              </div>
            </a>
          </li>
          <ul class="reportOptions" style="display: none;">
            <li class="p-1 pl-11 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
              <a href="report/depreciation">
                <p>Depreciation</p>
              </a>
            </li>
            <li class="p-1 pl-11 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
              <a href="">
                <p>Asset Report</p>
              </a>
            </li>
          </ul>
          <li class="my-4 p-2 rounded hover:bg-[#6B6565] focus:bg-[#6B6565] w-full">
            <a href="" class="flex">
              <img class="w-7" src="/image/masterdata.png" alt="masterdata">
                <p class="pl-2">Master Data</p>
            </a>
          </li>
        </ul>
    </div>
    {{-- SIDEBAR --}}
    {{-- SCRIPT --}}
    <script>
        const reportLinks = document.querySelectorAll('.reportLink');
        const reportOptions = document.querySelectorAll('.reportOptions');
        const reportArrows = document.querySelectorAll('.reportArrow');

        reportLinks.forEach((link, index) => {
          link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor tag behavior
            reportOptions[index].style.display = reportOptions[index].style.display === 'none' ? 'block' : 'none';
            reportArrows[index].classList.toggle('rotate-[-90deg]');
          });
        });

        function toggleSidebar() {
          const sidebar = document.getElementById("mySidebar");
          const mainContent = document.querySelector('main');
          if (sidebar.style.display === "none") {
            sidebar.style.display = "block";
            mainContent.classList.add('ml-[280px]');
          } else {
            sidebar.style.display = "none"
            mainContent.classList.remove('ml-[280px]');
          }
        }
      </script>
    {{-- SCRIPT --}}
  </body>
</html>