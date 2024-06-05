<!DOCTYPE html>
<html lang="en">
<head>
    @vite("resources/css/app.css")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SipCafé - PW</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrQkTy0K3AOT5+RYCM9K+W2miL9XDf4z6kX3n/E9Y5D4V9W0jHHP4oK59D9zFkUe0k6jQy0R8F9tbw4gFQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .theme-toggle {
            cursor: pointer;
        }

        .kaushan-script-regular {
            font-family: "Kaushan Script", cursive;
            font-weight: 400;
            font-style: normal;
        }

        #linha {
  width: 100%;
  border-bottom: 12px solid #006D84;
}
    </style>
</head>
<body class="bg-gray-200 dark:bg-gray-900">

<nav class="bg-rose-600 border-gray-200 dark:bg-orange-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="../../img/sipCafeLogoo.png" class="h-14" alt="Flowbite Logo" />
        <span class="self-center text-2xl text-white font-semibold whitespace-nowrap dark:text-white kaushan-script-regular">SipCafé</span>
    </a>
    <div class="flex items-center md:hidden">
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-700 dark:text-white dark:hover:bg-orange-600 dark:focus:ring-orange-700" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="hidden w-full md:flex md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-rose-600 dark:bg-orange-600 md:dark:bg-orange-600 dark:border-gray-700 ml-auto">
        <li>
          <a href="/home" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-slate-900 md:p-0 dark:text-white md:dark:text-slate-900" aria-current="page">Início</a>
        </li>
        <li>
          <a href="/sobreNos" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-slate-900 md:p-0 dark:text-white md:dark:hover:text-slate-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sobre Nós</a>
        </li>
        <li>
          <a href="/contato" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-slate-900 md:p-0 dark:text-white md:dark:hover:text-slate-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contato</a>
        </li>
      </ul>
       <!--botao da troca de tema-->
       <div class="flex items-center ml-4">
        <button class="theme-toggle inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-rose-500 focus:outline-none focus:ring-2 focus:ring-rose-700 dark:text-gray-400 dark:hover:bg-orange-500  dark:focus:ring-orange-700" aria-label="Toggle theme">
          <span class="sr-only">Toggle theme</span>
          <i class="fas fa-sun hidden"></i>
          <i class="fas fa-moon"></i>
        </button>
      </div>
    </div>
  </div>
</nav>

<!--config da troca de tema-->
<script>
    const themeToggleBtn = document.querySelector('.theme-toggle');
    const sunIcon = themeToggleBtn.querySelector('.fa-sun');
    const moonIcon = themeToggleBtn.querySelector('.fa-moon');

    function toggleIcons() {
        sunIcon.classList.toggle('hidden');
        moonIcon.classList.toggle('hidden');
    }

    themeToggleBtn.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        if (document.documentElement.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        } else {
            localStorage.setItem('theme', 'light');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        }
    });

    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
        sunIcon.classList.remove('hidden');
        moonIcon.classList.add('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        sunIcon.classList.add('hidden');
        moonIcon.classList.remove('hidden');
    }
</script>

<!--gif header-->
<div id="default-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden square-lg md:h-96">
         <!-- Item 1 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="https://i.pinimg.com/originals/26/34/9a/26349ad0bc9fe428a52d721fffd9d3b5.gif" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>  
    </div>
</div>

<!--divisor da pagina-->
<div id="linha">
</div>
    
<section class="shadow-lg" style="padding: 3%;">
    <!-- Introdução do site grid das bolinhas -->
    <div class="grid gap-x-1 gap-y-4 grid-cols-5 ">
            <div> <!--  bolinha 1 -->
                <div class="h-30 bg-transparent flex items-center justify-center">
                <!-- centering icon  cafe 1-->
                    <div class="w-24 h-24 bg-rose-600 rounded-full flex items-center justify-center dark:bg-orange-600">
                       <svg height="70px" width="100px" fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 580" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect x="166.957" y="38.957" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="200.348" y="72.348" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="166.957" y="105.739" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="200.348" y="139.13" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="267.13" y="105.739" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="300.522" y="72.348" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="300.522" y="139.13" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="100.174" y="72.348" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="66.783" y="105.739" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="100.174" y="139.13" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <polygon points="478.609,272.696 478.609,239.304 411.826,239.304 411.826,205.913 0,205.913 0,406.261 33.391,406.261 33.391,239.304 378.435,239.304 378.435,406.261 478.609,406.261 478.609,372.87 411.826,372.87 411.826,272.696 "></polygon> </g> </g> <g> <g> <rect x="478.609" y="272.696" width="33.391" height="100.174"></rect> </g> </g> <g> <g> <rect x="33.391" y="406.261" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="66.783" y="439.652" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="100.174" y="473.043" width="211.478" height="33.391"></rect> </g> </g> <g> <g> <rect x="311.652" y="439.652" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="345.043" y="406.261" width="33.391" height="33.391"></rect> </g> </g> <g> <g> <rect x="200.348" y="5.565" width="33.391" height="33.391"></rect> </g> </g> </g></svg>
                    </div>
                <!-- end centering icon -->
                </div>
            </div> <!-- fim bolinha 1 -->
            <div><!--  bolinha 2 -->
                <div> 
                    <div class="h-30 bg-transparent flex items-center justify-center">
                        <!-- centering icon  cafe 2-->
                        <div class="w-24 h-24 bg-rose-600 rounded-full flex items-center justify-center dark:bg-orange-600">
                       <svg height=80px" width="80px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 350" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#dfd7bf;" d="M20.04,117.98c0,24.954,51.523,52.687,125.414,52.687c73.956,0,125.414-27.798,125.414-52.687 s-51.523-52.687-125.414-52.687S20.04,93.091,20.04,117.98z"></path> <path style="fill:#FFFFFF;" d="M174.675,100.526c-11.507,0-19.782,2.909-23.402,5.495l0,0c-3.491,2.457-8.016,2.457-11.507,0 c-3.556-2.521-11.83-5.495-23.402-5.495c-13.059,0-21.333,3.62-24.113,5.947c5.624,6.271,28.768,18.554,53.269,28.251 c24.372-9.826,47.386-22.109,53.269-28.251C195.814,104.146,187.604,100.526,174.675,100.526z"></path> <path style="fill:#00050a;" d="M174.675,80.485c-11.055,0-21.269,2.069-29.156,5.818c-7.887-3.685-18.166-5.818-29.156-5.818 c-25.988,0-44.8,10.99-44.8,26.117c0,14.093,23.725,30.19,70.4,48.162c2.78,0.905,5.107,0.84,7.176,0 c46.675-18.166,70.335-34.392,70.335-48.162C219.475,91.54,200.663,80.485,174.675,80.485z M92.251,106.473 c2.78-2.327,11.119-5.947,24.113-5.947c11.507,0,19.782,2.909,23.402,5.495c3.491,2.457,8.016,2.457,11.507,0l0,0 c3.556-2.521,11.83-5.495,23.402-5.495c12.929,0,21.269,3.556,24.048,5.947c-5.883,6.271-28.897,18.554-53.269,28.251 C120.954,125.091,97.875,112.679,92.251,106.473z"></path> <path style="fill:#FFFFFF;" d="M145.519,190.708c-51.846,0-96.453-12.929-122.182-32.776 c12.929,78.028,62.772,136.404,122.182,136.404s109.253-58.311,122.182-136.404C241.972,177.778,197.301,190.708,145.519,190.708z"></path> <path style="fill:#00050a;" d="M315.281,108.025c-8.986,0-17.325,2.521-24.501,6.853c-3.168-39.24-65.81-69.624-145.261-69.624 C63.935,45.253,0,77.253,0,117.98c0,108.283,65.228,196.267,145.455,196.267c33.487,0,64.323-15.386,88.889-41.115 c42.796-1.228,71.564-21.01,88.242-37.818c23.208-23.273,37.042-54.303,36.913-83.071 C359.564,127.871,339.717,108.025,315.281,108.025z M145.519,294.271c-59.41,0-109.253-58.311-122.182-136.404 c25.729,19.846,70.335,32.776,122.182,32.776s96.453-12.929,122.182-32.776C254.707,235.96,204.865,294.271,145.519,294.271z M270.933,117.98c0,24.954-51.523,52.687-125.414,52.687c-73.956,0-125.414-27.798-125.414-52.687s51.523-52.687,125.414-52.687 S270.933,93.091,270.933,117.98z M308.493,221.285c-11.572,11.572-30.061,24.954-56.436,29.931 c19.265-28.057,32.517-63.612,37.042-102.982C291.232,137.116,302.481,128,315.216,128c13.382,0,24.372,10.925,24.372,24.372 C339.717,175.58,327.758,202.021,308.493,221.285z"></path> <path style="fill:#bec3c5;" d="M145.519,190.708c-38.465,0-73.05-7.111-98.78-18.941c15.127,59.216,54.238,102.529,98.78,102.529 s83.588-43.378,98.78-102.529C218.505,183.596,184.048,190.708,145.519,190.708z"></path> </g></svg>
                        </div>
                    <!-- end centering icon -->
                    </div>
                </div>
            </div> <!--fim  bolinha 2 -->
            <div><!--  bolinha 3 -->
                <div> 
                    <div class="h-30 bg-transparent flex items-center justify-center">
                        <!-- centering icon  cafe 2-->
                        <div class="w-24 h-24 bg-rose-600 rounded-full flex items-center justify-center dark:bg-orange-600">
                           <svg height="70px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(1 1)"> <g> <path style="fill:#ffffff;" d="M420.973,195.267H397.08c4.267,0,8.533,4.267,7.68,10.24L387.693,426.52 c0,5.12-3.413,8.533-7.68,8.533h20.48c5.12,0,8.533-3.413,9.387-8.533l20.48-221.013 C430.36,199.533,426.093,195.267,420.973,195.267"></path> <path style="fill:#ffffff;" d="M371.48,434.2l-4.267,60.587c0,4.267-3.413,7.68-6.827,7.68h18.773c4.267,0,8.533-3.413,8.533-7.68 l5.973-60.587H371.48z"></path> <polygon style="fill:#ffffff;" points="392.813,127 387.693,195.267 411.587,195.267 418.413,127 "></polygon> <path style="fill:#ffffff;" d="M444.013,75.8h-25.6c5.12,0,8.533,3.413,8.533,8.533v34.133c0,5.12-3.413,8.533-8.533,8.533h25.6 c5.12,0,8.533-3.413,8.533-8.533V84.333C452.547,79.213,448.28,75.8,444.013,75.8"></path> <path style="fill:#ffffff;" d="M366.36,10.947c-0.853-2.56-4.267-3.413-6.827-3.413h-20.48c1.707,0,4.267,0.853,5.12,3.413 l38.4,64.853h34.133L366.36,10.947z"></path> </g> <path style="fill:#ffffff;" d="M359.533,425.667L376.6,204.653c0-5.12-3.413-10.24-7.68-10.24H122.307 c-4.267,0-8.533,4.267-7.68,10.24l17.067,221.013c0,5.12,3.413,8.533,7.68,8.533h212.48 C355.267,434.2,358.68,430.787,359.533,425.667"></path> <path style="fill:#FFFFFF;" d="M130.84,425.667l-17.067-221.013c0-5.12,3.413-9.387,8.533-9.387H97.56 c-5.12,0-10.24,4.267-9.387,10.24l20.48,220.16c0.853,5.12,4.267,8.533,9.387,8.533h20.48 C135.107,434.2,131.693,430.787,130.84,425.667"></path> <g> <path style="fill:#c2c2c2;" d="M392.813,195.267H368.92c4.267,0,8.533,4.267,7.68,10.24L359.533,426.52 c0,5.12-3.413,8.533-7.68,8.533h20.48c5.12,0,8.533-3.413,9.387-8.533l20.48-221.013 C402.2,199.533,397.933,195.267,392.813,195.267"></path> <path style="fill:#c2c2c2;" d="M344.173,434.2l-5.12,60.587c0,4.267-3.413,7.68-6.827,7.68H351c4.267,0,8.533-3.413,8.533-7.68 l5.12-60.587H344.173z"></path> <polygon style="fill:#c2c2c2;" points="364.653,127 359.533,195.267 384.28,195.267 390.253,127 "></polygon> </g> <g> <polygon style="fill:#ffffff;" points="367.213,195.267 372.333,127 118.04,127 123.16,195.267 "></polygon> <path style="fill:#ffffff;" d="M141.933,434.2l5.12,60.587c0,4.267,3.413,7.68,6.827,7.68h183.467c3.413,0,6.827-3.413,7.68-7.68 l4.267-60.587H141.933z"></path> </g> <g> <polygon style="fill:#FFFFFF;" points="92.44,127 99.267,195.267 124.013,195.267 118.04,127 "></polygon> <path style="fill:#FFFFFF;" d="M147.053,494.787l-5.12-60.587h-20.48l5.973,60.587c0,4.267,4.267,7.68,8.533,7.68h18.773 C150.467,502.467,147.053,499.053,147.053,494.787"></path> </g> <path style="fill:#ffffff;" d="M390.253,127H100.12c-5.12,0-8.533-3.413-8.533-8.533V84.333c0-5.12,3.413-8.533,8.533-8.533 h290.133c5.12,0,8.533,3.413,8.533,8.533v34.133C398.787,123.587,395.373,127,390.253,127"></path> <path style="fill:#FFFFFF;" d="M91.587,118.467V84.333c0-5.12,3.413-8.533,8.533-8.533h-25.6c-5.12,0-8.533,3.413-8.533,8.533 v34.133c0,5.12,3.413,8.533,8.533,8.533h25.6C95,127,91.587,123.587,91.587,118.467"></path> <path style="fill:#c2c2c2;" d="M415.853,75.8h-25.6c5.12,0,8.533,3.413,8.533,8.533v34.133c0,5.12-3.413,8.533-8.533,8.533h25.6 c5.12,0,8.533-3.413,8.533-8.533V84.333C424.387,79.213,420.973,75.8,415.853,75.8"></path> <path style="fill:#FFFFFF;" d="M185.453,7.533h-20.48c-2.56,0-5.12,0.853-6.827,3.413L107.8,75.8h34.133l38.4-64.853 C181.187,8.387,183.747,7.533,185.453,7.533"></path> <path style="fill:#ffffff;" d="M311.747,7.533h-133.12c-1.707,0-4.267,0.853-5.12,3.413l-38.4,64.853h220.16l-38.4-64.853 C316.013,8.387,314.307,7.533,311.747,7.533"></path> <path style="fill:#c2c2c2;" d="M339.053,10.947c-1.707-2.56-4.267-3.413-7.68-3.413h-20.48c1.707,0,4.267,0.853,5.12,3.413 l38.4,64.853h34.133L339.053,10.947z"></path> <path d="M415.853,135.533H74.52c-9.387,0-17.067-7.68-17.067-17.067V84.333c0-9.387,7.68-17.067,17.067-17.067h341.333 c9.387,0,17.067,7.68,17.067,17.067v34.133C432.92,127.853,425.24,135.533,415.853,135.533z M415.853,118.467V127V118.467 L415.853,118.467z M74.52,84.333v34.133h341.333V84.333H74.52z"></path> <path d="M406.467,84.333H83.907l60.587-78.507C147.907,1.56,153.027-1,158.147-1H333.08c5.12,0,10.24,2.56,13.653,6.827 L406.467,84.333z M118.04,67.267h253.44l-39.253-51.2h-174.08L118.04,67.267z"></path> <path d="M372.333,442.733H118.04c-9.387,0-17.067-6.827-17.92-16.213L79.64,206.36c-0.853-5.12,0.853-9.387,4.267-13.653 c3.413-3.413,8.533-5.973,13.653-5.973h295.253c5.12,0,10.24,1.707,13.653,5.973c3.413,3.413,5.12,8.533,4.267,13.653 l-20.48,220.16C389.4,435.907,381.72,442.733,372.333,442.733z M97.56,203.8L97.56,203.8l19.627,221.013c0,0,0,0.853,0.853,0.853 h253.44c0.853,0,0.853,0,0.853-0.853l0,0l20.48-221.013v0H97.56z"></path> <path d="M399.64,203.8H90.733l-7.68-85.333H407.32L399.64,203.8z M106.093,186.733h277.333l5.12-51.2h-286.72L106.093,186.733z"></path> <path d="M355.267,511h-110.08c-5.12,0-8.533-3.413-8.533-8.533c0-5.12,3.413-8.533,8.533-8.533h110.08l5.12-51.2h-230.4l5.12,51.2 h41.813c5.12,0,8.533,3.413,8.533,8.533c0,5.12-3.413,8.533-8.533,8.533h-41.813c-9.387,0-16.213-6.827-17.067-15.36l-5.973-60.587 c0-2.56,0.853-5.12,2.56-6.827c1.707-1.707,3.413-2.56,5.973-2.56h248.32c2.56,0,4.267,0.853,5.973,2.56 c1.707,1.707,2.56,4.267,2.56,6.827l-5.973,60.587C371.48,504.173,363.8,511,355.267,511z"></path> <path d="M219.587,502.467c0-5.12-3.413-8.533-8.533-8.533c-5.12,0-8.533,3.413-8.533,8.533c0,5.12,3.413,8.533,8.533,8.533 C216.173,511,219.587,507.587,219.587,502.467"></path> <path d="M245.187,442.733c-5.12,0-8.533-3.413-8.533-8.533V195.267c0-5.12,3.413-8.533,8.533-8.533c5.12,0,8.533,3.413,8.533,8.533 V434.2C253.72,439.32,250.307,442.733,245.187,442.733z"></path> <path d="M287.853,442.733L287.853,442.733c-5.12,0-8.533-4.267-8.533-8.533l8.533-238.933c0-5.12,4.267-8.533,8.533-8.533 c5.12,0,8.533,4.267,8.533,8.533L296.387,434.2C296.387,439.32,292.12,442.733,287.853,442.733z"></path> <path d="M339.053,442.733L339.053,442.733c-5.12,0-8.533-4.267-8.533-9.387l17.067-238.933c0-5.12,4.267-8.533,9.387-7.68 c5.12,0,8.533,4.267,7.68,9.387l-17.067,238.933C347.587,439.32,343.32,442.733,339.053,442.733z"></path> <path d="M202.52,442.733c-4.267,0-8.533-3.413-8.533-8.533l-8.533-238.933c0-5.12,3.413-8.533,8.533-8.533s8.533,3.413,8.533,8.533 l8.533,238.933C211.053,438.467,207.64,442.733,202.52,442.733L202.52,442.733z"></path> <path d="M151.32,442.733c-4.267,0-8.533-3.413-8.533-7.68L125.72,196.12c0-5.12,3.413-8.533,7.68-9.387 c5.12,0,8.533,3.413,9.387,7.68l17.067,238.933C159.853,438.467,156.44,442.733,151.32,442.733L151.32,442.733z"></path> </g> </g></svg>
                        </div>
                    <!-- end centering icon -->
                    </div>
                </div>
            </div> <!--fim  bolinha 3 -->
            <div><!--  bolinha 4 -->
                <div> 
                    <div class="h-30 bg-transparent flex items-center justify-center">
                        <!-- centering icon  cafe 2-->
                        <div class="w-24 h-24 bg-rose-600 rounded-full flex items-center justify-center dark:bg-orange-600">
                           <svg height="70px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(1 1)"> <g> <path style="fill:#ffffff;" d="M420.973,195.267H397.08c4.267,0,8.533,4.267,7.68,10.24L387.693,426.52 c0,5.12-3.413,8.533-7.68,8.533h20.48c5.12,0,8.533-3.413,9.387-8.533l20.48-221.013 C430.36,199.533,426.093,195.267,420.973,195.267"></path> <path style="fill:#ffffff;" d="M371.48,434.2l-4.267,60.587c0,4.267-3.413,7.68-6.827,7.68h18.773c4.267,0,8.533-3.413,8.533-7.68 l5.973-60.587H371.48z"></path> <polygon style="fill:#ffffff;" points="392.813,127 387.693,195.267 411.587,195.267 418.413,127 "></polygon> <path style="fill:#ffffff;" d="M444.013,75.8h-25.6c5.12,0,8.533,3.413,8.533,8.533v34.133c0,5.12-3.413,8.533-8.533,8.533h25.6 c5.12,0,8.533-3.413,8.533-8.533V84.333C452.547,79.213,448.28,75.8,444.013,75.8"></path> <path style="fill:#ffffff;" d="M366.36,10.947c-0.853-2.56-4.267-3.413-6.827-3.413h-20.48c1.707,0,4.267,0.853,5.12,3.413 l38.4,64.853h34.133L366.36,10.947z"></path> </g> <path style="fill:#ffffff;" d="M359.533,425.667L376.6,204.653c0-5.12-3.413-10.24-7.68-10.24H122.307 c-4.267,0-8.533,4.267-7.68,10.24l17.067,221.013c0,5.12,3.413,8.533,7.68,8.533h212.48 C355.267,434.2,358.68,430.787,359.533,425.667"></path> <path style="fill:#FFFFFF;" d="M130.84,425.667l-17.067-221.013c0-5.12,3.413-9.387,8.533-9.387H97.56 c-5.12,0-10.24,4.267-9.387,10.24l20.48,220.16c0.853,5.12,4.267,8.533,9.387,8.533h20.48 C135.107,434.2,131.693,430.787,130.84,425.667"></path> <g> <path style="fill:#c2c2c2;" d="M392.813,195.267H368.92c4.267,0,8.533,4.267,7.68,10.24L359.533,426.52 c0,5.12-3.413,8.533-7.68,8.533h20.48c5.12,0,8.533-3.413,9.387-8.533l20.48-221.013 C402.2,199.533,397.933,195.267,392.813,195.267"></path> <path style="fill:#c2c2c2;" d="M344.173,434.2l-5.12,60.587c0,4.267-3.413,7.68-6.827,7.68H351c4.267,0,8.533-3.413,8.533-7.68 l5.12-60.587H344.173z"></path> <polygon style="fill:#c2c2c2;" points="364.653,127 359.533,195.267 384.28,195.267 390.253,127 "></polygon> </g> <g> <polygon style="fill:#ffffff;" points="367.213,195.267 372.333,127 118.04,127 123.16,195.267 "></polygon> <path style="fill:#ffffff;" d="M141.933,434.2l5.12,60.587c0,4.267,3.413,7.68,6.827,7.68h183.467c3.413,0,6.827-3.413,7.68-7.68 l4.267-60.587H141.933z"></path> </g> <g> <polygon style="fill:#FFFFFF;" points="92.44,127 99.267,195.267 124.013,195.267 118.04,127 "></polygon> <path style="fill:#FFFFFF;" d="M147.053,494.787l-5.12-60.587h-20.48l5.973,60.587c0,4.267,4.267,7.68,8.533,7.68h18.773 C150.467,502.467,147.053,499.053,147.053,494.787"></path> </g> <path style="fill:#ffffff;" d="M390.253,127H100.12c-5.12,0-8.533-3.413-8.533-8.533V84.333c0-5.12,3.413-8.533,8.533-8.533 h290.133c5.12,0,8.533,3.413,8.533,8.533v34.133C398.787,123.587,395.373,127,390.253,127"></path> <path style="fill:#FFFFFF;" d="M91.587,118.467V84.333c0-5.12,3.413-8.533,8.533-8.533h-25.6c-5.12,0-8.533,3.413-8.533,8.533 v34.133c0,5.12,3.413,8.533,8.533,8.533h25.6C95,127,91.587,123.587,91.587,118.467"></path> <path style="fill:#c2c2c2;" d="M415.853,75.8h-25.6c5.12,0,8.533,3.413,8.533,8.533v34.133c0,5.12-3.413,8.533-8.533,8.533h25.6 c5.12,0,8.533-3.413,8.533-8.533V84.333C424.387,79.213,420.973,75.8,415.853,75.8"></path> <path style="fill:#FFFFFF;" d="M185.453,7.533h-20.48c-2.56,0-5.12,0.853-6.827,3.413L107.8,75.8h34.133l38.4-64.853 C181.187,8.387,183.747,7.533,185.453,7.533"></path> <path style="fill:#ffffff;" d="M311.747,7.533h-133.12c-1.707,0-4.267,0.853-5.12,3.413l-38.4,64.853h220.16l-38.4-64.853 C316.013,8.387,314.307,7.533,311.747,7.533"></path> <path style="fill:#c2c2c2;" d="M339.053,10.947c-1.707-2.56-4.267-3.413-7.68-3.413h-20.48c1.707,0,4.267,0.853,5.12,3.413 l38.4,64.853h34.133L339.053,10.947z"></path> <path d="M415.853,135.533H74.52c-9.387,0-17.067-7.68-17.067-17.067V84.333c0-9.387,7.68-17.067,17.067-17.067h341.333 c9.387,0,17.067,7.68,17.067,17.067v34.133C432.92,127.853,425.24,135.533,415.853,135.533z M415.853,118.467V127V118.467 L415.853,118.467z M74.52,84.333v34.133h341.333V84.333H74.52z"></path> <path d="M406.467,84.333H83.907l60.587-78.507C147.907,1.56,153.027-1,158.147-1H333.08c5.12,0,10.24,2.56,13.653,6.827 L406.467,84.333z M118.04,67.267h253.44l-39.253-51.2h-174.08L118.04,67.267z"></path> <path d="M372.333,442.733H118.04c-9.387,0-17.067-6.827-17.92-16.213L79.64,206.36c-0.853-5.12,0.853-9.387,4.267-13.653 c3.413-3.413,8.533-5.973,13.653-5.973h295.253c5.12,0,10.24,1.707,13.653,5.973c3.413,3.413,5.12,8.533,4.267,13.653 l-20.48,220.16C389.4,435.907,381.72,442.733,372.333,442.733z M97.56,203.8L97.56,203.8l19.627,221.013c0,0,0,0.853,0.853,0.853 h253.44c0.853,0,0.853,0,0.853-0.853l0,0l20.48-221.013v0H97.56z"></path> <path d="M399.64,203.8H90.733l-7.68-85.333H407.32L399.64,203.8z M106.093,186.733h277.333l5.12-51.2h-286.72L106.093,186.733z"></path> <path d="M355.267,511h-110.08c-5.12,0-8.533-3.413-8.533-8.533c0-5.12,3.413-8.533,8.533-8.533h110.08l5.12-51.2h-230.4l5.12,51.2 h41.813c5.12,0,8.533,3.413,8.533,8.533c0,5.12-3.413,8.533-8.533,8.533h-41.813c-9.387,0-16.213-6.827-17.067-15.36l-5.973-60.587 c0-2.56,0.853-5.12,2.56-6.827c1.707-1.707,3.413-2.56,5.973-2.56h248.32c2.56,0,4.267,0.853,5.973,2.56 c1.707,1.707,2.56,4.267,2.56,6.827l-5.973,60.587C371.48,504.173,363.8,511,355.267,511z"></path> <path d="M219.587,502.467c0-5.12-3.413-8.533-8.533-8.533c-5.12,0-8.533,3.413-8.533,8.533c0,5.12,3.413,8.533,8.533,8.533 C216.173,511,219.587,507.587,219.587,502.467"></path> <path d="M245.187,442.733c-5.12,0-8.533-3.413-8.533-8.533V195.267c0-5.12,3.413-8.533,8.533-8.533c5.12,0,8.533,3.413,8.533,8.533 V434.2C253.72,439.32,250.307,442.733,245.187,442.733z"></path> <path d="M287.853,442.733L287.853,442.733c-5.12,0-8.533-4.267-8.533-8.533l8.533-238.933c0-5.12,4.267-8.533,8.533-8.533 c5.12,0,8.533,4.267,8.533,8.533L296.387,434.2C296.387,439.32,292.12,442.733,287.853,442.733z"></path> <path d="M339.053,442.733L339.053,442.733c-5.12,0-8.533-4.267-8.533-9.387l17.067-238.933c0-5.12,4.267-8.533,9.387-7.68 c5.12,0,8.533,4.267,7.68,9.387l-17.067,238.933C347.587,439.32,343.32,442.733,339.053,442.733z"></path> <path d="M202.52,442.733c-4.267,0-8.533-3.413-8.533-8.533l-8.533-238.933c0-5.12,3.413-8.533,8.533-8.533s8.533,3.413,8.533,8.533 l8.533,238.933C211.053,438.467,207.64,442.733,202.52,442.733L202.52,442.733z"></path> <path d="M151.32,442.733c-4.267,0-8.533-3.413-8.533-7.68L125.72,196.12c0-5.12,3.413-8.533,7.68-9.387 c5.12,0,8.533,3.413,9.387,7.68l17.067,238.933C159.853,438.467,156.44,442.733,151.32,442.733L151.32,442.733z"></path> </g> </g></svg>
                        </div>
                    <!-- end centering icon -->
                    </div>
                </div>
            </div> <!--fim  bolinha 4 -->
            <div><!--  bolinha 5-->
            <div> 
                <div class="h-30 bg-transparent flex items-center justify-center">
                        <!-- centering icon  cafe 3-->
                    <div class="w-24 h-24 bg-rose-600 rounded-full flex items-center justify-center dark:bg-orange-600">
                        <svg height="70px" width="100px" fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect x="111.816" y="459.034" width="282.483" height="52.966"></rect> </g> </g> <g> <g> <polygon points="270.713,123.586 270.713,353.103 335.448,353.103 335.448,388.414 170.667,388.414 170.667,353.103 235.402,353.103 235.402,123.586 111.816,123.586 111.816,423.724 394.299,423.724 394.299,123.586 "></polygon> </g> </g> <g> <g> <path d="M459.034,123.586h-29.425v35.31h29.425v194.207h-29.425v35.31h29.425c19.47,0,35.31-15.84,35.31-35.31V158.897 C494.345,139.426,478.505,123.586,459.034,123.586z"></path> </g> </g> <g> <g> <polygon points="17.655,123.586 76.506,290.33 76.506,123.586 "></polygon> </g> </g> <g> <g> <path d="M275.644,30.119c0.61-2.09,0.953-4.294,0.953-6.578c0-12.98-10.56-23.54-23.54-23.54c-12.98,0-23.54,10.56-23.54,23.54 c0,2.285,0.344,4.488,0.953,6.578c-68.057,4.27-108.738,27.967-117.041,58.157h279.255 C384.383,58.086,343.703,34.389,275.644,30.119z"></path> </g> </g> </g></svg>
                     </div>
                    <!-- end centering icon -->
                    </div>
                </div>
            </div> <!-- fim bolinha 3 -->
    </div>
</section>


<!--inicio card-->
<section class="bg-gray-100 dark:bg-gray-700" style="padding: 5%;">
    <div class="max-w-6xl mx-auto flex rounded overflow-hidden shadow-lg dark:bg-gray-600"> <!-- Alterado max-w-sm para max-w-4xl e adicionado classe flex -->
        <!-- Imagem à esquerda -->
        <img class="w-1/2" src="https://i.pinimg.com/originals/31/a3/26/31a3262e110f43b340890ac3230ec6b0.gif" alt="gif card"> <!-- Adicionada classe w-1/2 para definir a largura da imagem para metade do contêiner -->

        <!-- Texto à direita -->
        <div class="w-1/2 px-6 py-4"> <!-- Adicionada classe w-1/2 para definir a largura do texto para metade do contêiner -->
            <div class="font-bold text-xl mb-2 dark:text-white">Bem-Vindo ao SipCafé, seu refúgio para apreciadores de café.</div>
            <p class="text-gray-700 text-base dark:text-white">
            No SipCafé, acreditamos que o café vai muito além de uma simples bebida; é um momento de pausa, um ritual diário que desperta os sentidos e promove conexões significativas. 
            </p>
            <div class="pt-4">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Cafeteria</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#cafe</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#apreciadoresDeCafe</span>
            </div>
        </div>
    </div>
</section>


<section>
<div class="grid gap-x-8 gap-y-4 grid-cols-4" style="padding: 5%;">
        <div> <!--CARD 1-->
            <div class="max-w-sm rounded overflow-hidden shadow-lg dark:bg-gray-700">
                <img class="w-full" src="https://i.pinimg.com/236x/12/ab/fa/12abfa3d38b33088630a14b944e40aef.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 dark:text-white">Capuccino</div>
                    <p class="text-gray-700 text-base dark:text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                
            </div>
        </div> <!--FIM CARD 1-->

  <div> <!--CARD 2-->
  <div class="max-w-sm rounded overflow-hidden shadow-lg dark:bg-gray-700">
  <img class="w-full" src="https://i.pinimg.com/236x/67/5c/00/675c00103d311e74f708515e442540f9.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2 dark:text-white">Latte</div>
    <p class="text-gray-700 text-base dark:text-white">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
 
</div>
  </div> <!--DIM CARD 2-->

  <div> <!--CARD 3-->
  <div class="max-w-sm rounded overflow-hidden shadow-lg dark:bg-gray-700">
                <img class="w-full" src="https://i.pinimg.com/236x/d2/0c/e6/d20ce6b882f53f35c58738dab963434b.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 dark:text-white">Macchiato</div>
                    <p class="text-gray-700 text-base dark:text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
               
            </div>
  </div> <!--FIM CARD 3-->

  <div> <!--CARD 4-->
  <div class="max-w-sm rounded overflow-hidden shadow-lg dark:bg-gray-700">
                <img class="w-full" src="https://i.pinimg.com/236x/a0/c4/e0/a0c4e0133a53c20407e25836cd8244ec.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 dark:text-white">Americano</div>
                    <p class="text-gray-700 text-base dark:text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                
    </div>
  </div> <!--FIM CARD 4-->
</div>
</section>

<!--INICIO RODAPÉ-->

<footer class="bg-white dark:bg-gray-800">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="/home" class="flex items-center">
                  <img src="../../img/sipCafeLogoo.png" class="h-24 me-3" alt="SipCafé Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white kaushan-script-regular">SipCafé</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">SipCafé</a>. Leticia Pinheiro 3ºDS - manhã
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>






   


</body>
</html>
