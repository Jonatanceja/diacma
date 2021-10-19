<div class="swiper-container slider">
    <div class="swiper-wrapper relative">
      {{ $slot }}
    </div>
    <div class="hidden md:block">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div class="swiper-pagination z-40"></div>
</div>


@push('styles')
<link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />  
@endpush
@push('scripts')
<script src="/js/swiper.js"></script>
<script>
var slider = new Swiper('.slider', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
   delay: 10000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },
});
</script>
@endpush