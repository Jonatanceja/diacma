<div class="swiper-container slider">
    <div class="swiper-wrapper">
      {{ $slot }}
    </div>

</div>


@push('styles')
<link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />  
@endpush
@push('scripts')
<script src="/js/swiper.js"></script>
<script>
  var sliderThumbnail = new Swiper('.slider-thumbnail', {
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

var slider = new Swiper('.slider', {
    effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
   delay: 10000,
  },
  thumbs: {
    swiper: sliderThumbnail
  }
});
</script>
@endpush
