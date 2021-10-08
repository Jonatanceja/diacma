<section>
    <x-layout.swiper>
        <?php $images = $page->gallery()->toFiles();
                        foreach($images as $image): ?>  
            <div class="swiper-slide">
                <div class="bg-cover bg-center h-screen flex items-center relative" style="background-image: url({{ $image->url() }})">
                    <div class="bg-black absolute bg-opacity-20 h-full w-full z-0"></div>
                    <div class="container mx-auto p-12 md:p-0 z-40">
                        <div class="w-full space-y-6 text-center text-white">
                            <h1 class="text-6xl uppercase font-bold">{{ $image->heading() }}</h1>
                            <h2 class="text-3xl font-bold">{{ $image->sub() }}</h2>
                            <div class="h-1 w-56 bg-yellow-500 mx-auto"></div>
                            <p class="w-2/3 mx-auto">{{ $image->text() }}</p>
                            @if ($image->boton()->isNotEmpty())
                            <div class="flex justify-center md:justify-start">
                                <a href="{{ $image->enlace() }}">
                                    <div>{{ $image->boton() }}</div>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </x-layout.swiper>
    
</section>