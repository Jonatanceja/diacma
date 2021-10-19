<header class="w-full fixed z-50">
    <div class="bg-gray-900 items-center hidden md:flex py-4 mx-auto text-xs text-white px-5">
            <div class="w-2/3 flex space-x-3">
                <div class="flex items-center space-x-2">
                    <img class="h-5" src="/images/marker.svg" alt="">
                    <p class="">{{ $site->direccion() }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <img class="h-5" src="/images/mobile.svg" alt="">
                    <p class="">{{ $site->telefono() }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <img class="h-5" src="/images/bell.svg" alt="">
                    <p class="">{{ $site->horario() }}</p>
                </div>
            </div>
            <div class="flex w-1/3 justify-end space-x-4">
                <a href="{{ $site->facebook() }}"><x-icons.facebook class="h-5 text-white hover:text-yellow-500 transition duration-300"></x-icons.facebook></a>
                <a href="{{ $site->instagram() }}"><x-icons.instagram class="h-5 text-white hover:text-yellow-500 transition duration-300"></x-icons.instagram></a>
            </div>

    </div>
    <nav
        class="flex items-center justify-between flex-wrap px-6 py-4 shadow-sm bg-white"
        x-data="{ isOpen: false }"
        @keydown.escape="isOpen = false"
        @click.outside="isOpen = false"
        :class="{ 'shadow-lg bg-bone-light' : isOpen , 'bg-bone-light' : !isOpen}">
        <!--Logo etc-->
        <div class="flex items-center">
          <a class="" href="{{ $site->url() }}"><img class="w-10 md:w-14" src="/images/logo-diacma.svg" alt="{{ $site->title() }}"></a>
        </div>

        <!--Toggle button (hidden on large screens)-->
        <button
          @click="isOpen = !isOpen"
          type="button"
          class="block lg:hidden px-2 text-gray-900 hover:text-gray-600 focus:outline-none"
          :class="{ 'transition transform-180': isOpen }">
          <svg
            class="h-6 w-6 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24">
            <path
              x-show="isOpen"
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path
              x-show="!isOpen"
              fill-rule="evenodd"
              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>

        <!--Menu-->
        <div
          class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
          :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
          x-show.transition="true"
        >

          <div class="flex-1 items-center py-10 lg:py-0">
              <div class="space-y-2">

                <div>
                  <ul class="pt-6 lg:pt-0 list-reset uppercase text-center lg:flex lg:space-x-8 space-y-4 lg:space-y-0 lg:justify-end">
                  @foreach ($site->children()->listed() as $subpage)
                      <li>
                          <a class="inline-block text-gray-800 no-underline hover:text-yellow-500 active:text-indigo-600 transition duration-300" href="{{ $subpage->url() }}" @click="isOpen = false">{{ $subpage->title() }}</a>
                      </li>
                  @endforeach
                  </ul>
                </div>  
              </div>
          </div>
        </div>
      </nav>
</header>