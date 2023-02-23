<x-app-layout pagetitle="Tour agency" class="bg-slate-50">
{{--  Hero section--}}
 <div class="w-100 lg:flex">
   <div class="lg:w-7/12">
     <img src="{{url('img/heroimage.jpg')}}" alt="heroleft" height="600">
   </div>
   <div class="lg:w-5/12 bg-slate-700">
     <div class="p-8 mb-6">
       <h1 class="mb-6 text-left text-blue-300 text-2xl lg:text-4xl font-bold">
         Посетете българските туристически забележителности
       </h1>
       <p class="text-gray-300">
         Предлагаме пътуване до най-добрите места за посещение в България.
         Прегледайте нашият каталог с оферти и резервирайте вашата мечтана екскурзия!

       </p>
     </div>
     <div class="flex justify-center space-x-4 p-8">
       <button class="button-danger px-8 py-4 tracking-wide">
         виж местата
       </button>
       <button class="button-danger-inline_light px-8 py-4 tracking-wide">
         вземи оферта
       </button>
     </div>
   </div>
 </div>
{{-- Section Popular Tour Package--}}
  <div class="max-w-6xl m-auto mt-16 p-6">
{{--    Title--}}
    <div class="mb-12">
      <h1 class="mb-2 font-bold text-gray-800 text-2xl lg:text-3xl">
        Популярни туристически пакети
      </h1>
      <p class="max-w-3xl text-gray-600">
        Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus.
        Suspendissendt blandit interdum.
        Sed pellentesque at nunc eget consectetur.
      </p>
    </div>
{{--    Packages cards--}}
    <div class="flex space-x-4">
{{--      Card--}}
      <div class="flex justify-center">
        <div
            class="block max-w-sm rounded-lg bg-white shadow-lg dark:bg-neutral-700">
          <a href="#!">
            <img
                class="rounded-t-lg"
                src="{{url('img/baba-vida.jpg')}}"
                alt="" />
          </a>
          <div class="p-6">
{{--              Date--}}
            <div class="mb-2 text-sm text-gray-400 flex items-center space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
              </svg>
              <span>05.03.2023 - 07.03.2023</span>
            </div>
{{--           Content--}}
            <div>
              <h5
                  class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                Два дни около Видин
              </h5>
              <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
              <div class="flex justify-between items-center">
                <button
                    type="button"
                    class="button-info"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                  резервирай
                </button>
                <div class="text-gray-800">
                  <span class="font-bold">Топ цена:</span><span class="text-red-500 text-2xl"> 55.90лв</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <div
            class="block max-w-sm rounded-lg bg-white shadow-lg dark:bg-neutral-700">
          <a href="#!">
            <img
                class="rounded-t-lg w-100"
                src="{{url('img/carevec.jpg')}}"
                alt="" />
          </a>
          <div class="p-6">
            {{--              Date--}}
            <div class="mb-2 text-sm text-gray-400 flex items-center space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
              </svg>
              <span>05.03.2023 - 07.03.2023</span>
            </div>
            {{--           Content--}}
            <div>
              <h5
                  class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                Три дни в градът на царете
              </h5>
              <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
              <div class="flex justify-between items-center">
                <button
                    type="button"
                    class="button-info"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                  резервирай
                </button>
                <div class="text-gray-800">
                  <span class="font-bold">Топ цена:</span><span class="text-red-500 text-2xl"> 69.90лв</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <div
            class="block max-w-sm rounded-lg bg-white shadow-lg dark:bg-neutral-700">
          <a href="#!">
            <img
                class="rounded-t-lg"
                src="{{url('img/bscali.jpg')}}"
                alt="" />
          </a>
          <div class="p-6">
            {{--              Date--}}
            <div class="mb-2 text-sm text-gray-400 flex items-center space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
              </svg>
              <span>05.03.2023 - 07.03.2023</span>
            </div>
            {{--           Content--}}
            <div>
              <h5
                  class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                Белоградчишки скали - чудесата на прродата
              </h5>
              <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
              <div class="flex justify-between items-center">
                <button
                    type="button"
                    class="button-info"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                  резервирай
                </button>
                <div class="text-gray-800">
                  <span class="font-bold">Топ цена:</span><span class="text-red-500 text-2xl"> 60.90лв</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</x-app-layout>
