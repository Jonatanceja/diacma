@extends('layouts.default')
@section('content')

<section>
    <div><div class="h-20 md:h-36"></div></div>
    <div class="container px-10 md:px-0 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center py-24">
        <div class="wow fadeInRight">
            @if ($image = $page->photo()->toFile())
            <img class="w-full" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
             @endif
        </div>
        <div class="space-y-5 clear-left wow fadeInLeft">
            <h2 class="text-9xl text-yellow-500 font-bold">{{ $page->super() }}</h2>
            <h3 class="text-2xl font-light text-gray-900">{{ $page->headline() }}</h3>
            <x-layout.divider class="my-3"/>
            <x-text.regular>{!! $page->text()->kti() !!}</x-text.regular>
        </div>
    </div>
    
</section>
<section class="w-full md:w-1/2 mx-auto pb-12 md:pb-24 px-5">
    <div class="wow fadeInUp">
        <x-headings.h3>Contáctanos</x-headings.h3> 
        <x-layout.divider class="my-3"/>
        <div>
            <?php snippet('formbuilder'); ?>
        </div>
    </div>
</section>

@endsection