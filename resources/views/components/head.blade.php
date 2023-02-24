@props(['image', 'title', 'link'])
<div>
  <nav class="text-center p-10 w-full mb-10 sm:mb-24"
       style="background: url({{$image}}); height: 200px; background-position: center"
  >
    <h2 class="text-5xl font-bold text-white text-center mb-3 sm:mb-4">{{$title}}</h2>
    <ol class="list-reset flex justify-center items-center text-lg">
      <li>
        <a href="#"
           class="text-white transition duration-150 ease-in-out hover:text-gray-200 focus:text-gray-300 active:text-gray-400"
        >Начало
        </a>
      </li>
      <li>
        <span class="mx-2 text-[#ff4838] flex">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
               stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"/>
          </svg>
        </span>
      </li>
      <li>
        <a href="#"
           class="text-white transition duration-150 ease-in-out hover:text-gray-200 focus:text-gray-300 active:text-gray-400"
        >
          {{$link}}
        </a>
      </li>
    </ol>
  </nav>
</div>
