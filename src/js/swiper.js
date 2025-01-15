import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const homeBanner = new Swiper('#home-banner', {
    autoplay: true,
    pagination: {
        el: ".banner-swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "<div></div></span>";
        },
      },
});