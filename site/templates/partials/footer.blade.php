<footer class="bg-gray-900 py-12">
    <div class="container mx-auto block md:flex md:px-0 px-5 space-y-5 md:space-y-0 text-center md:text-left">
        <div class="w-full md:w-2/4">
            <a href="{{ $site->url() }}"><img class="mx-auto md:ml-0" src="/images/logo-2.svg" alt="Logo Diacma"></a>
            <p class="text-gray-400 mt-5 uppercase">{{ $site->nombre() }}</p>
            <div class="flex space-x-4 mt-6">
                <a href="{{ $site->facebook() }}"><x-icons.facebook class="h-8 text-white hover:text-yellow-500 transition duration-300"></x-icons.facebook></a>
                <a href="{{ $site->instagram() }}"><x-icons.instagram class="h-8 text-white hover:text-yellow-500 transition duration-300"></x-icons.instagram></a>
            </div>
            
            
        </div>
        <div class="w-full md:w-1/4 space-y-3">
            <h5 class="text-white font-regular">Navegación</h5>
            <x-layout.divider class="mx-auto md:ml-0"/>
            <ul class="list-reset">
                @foreach ($site->children()->listed() as $subpage)
                    <li>
                        <a class="text-gray-400 hover:text-white transition duration-300" href="{{ $subpage->url() }}">{{ $subpage->title() }}</a>
                    </li>
                @endforeach
                </ul>
        </div>
        <div class="w-full md:w-1/4 space-y-3">
            <h5 class="text-white font-regular">Productos</h5>
            <x-layout.divider class="mx-auto md:ml-0"/>
            <ul class="list-reset">
                @foreach (page('productos')->children()->listed() as $subpage)
                    <li>
                        <a class="text-gray-400 hover:text-white transition duration-300" href="{{ $subpage->url() }}">{{ $subpage->title() }}</a>
                    </li>
                @endforeach
                </ul>
        </div>
    </div>
</footer>
<div class="bg-black py-6 text-center text-gray-500">
    © 2021 <span class="text-yellow-500 font-bold">Diacma.</span> Todos los Derechos reservados
</div>