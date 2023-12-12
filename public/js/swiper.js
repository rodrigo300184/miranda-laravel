const roomsSwiper = new Swiper(".rooms-swiper", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-btn-next",
    prevEl: ".swiper-btn-prev",
  },
  breakpoints: {
    1000: {
      initialSlide: 1,
    },
  },
});

const facilitiesSwiper = new Swiper(".facilities-swiper", {
  direction: "horizontal",
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 30,
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    1000: {
      centeredSlides: false,
      slidesPerView: 3,
      grid: {
        fill: "row",
        rows: 2,
      },
    },
  },
  // If we need pagination
  pagination: {
    el: "#facilities-swiper-pagination",
    clickable: true,
  },
});

const menuSwiper = new Swiper(".menu-swiper", {
  spaceBetween: 20,
  grid: {
    fill: "row",
    rows: 3,
  },
  breakpoints: {
    1000: {
      spaceBetween: 20,
      centeredSlides: false,
      slidesPerView: 2,
      grid: {
        fill: "row",
        rows: 3,
      },
    },
  },
  navigation: {
    nextEl: ".menu-swiper-btn-next",
    prevEl: ".menu-swiper-btn-prev",
  },
  autoplay: {
    delay: 5000,
  },
});

const foodImageSwiper = new Swiper(".food-images-swiper", {
  slidesPerView: 1,
  spaceBetween: 25,
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    1000: {
      slidesPerView: 3,
    },
  },
  // If we need pagination
  pagination: {
    el: "#food-swiper-pagination",
    clickable: true,
  },
});

const factsSwiper = new Swiper(".facts-swiper", {
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 16,
  autoplay: {
    delay: 2000,
  },
  breakpoints: {
    1000: {
      loop: false,
      slidesPerView: 3,
    },
  },
  // If we need pagination
  pagination: {
    el: ".facts-swiper-pagination",
    clickable: true,
  },
});

const roomsPageSwiper = new Swiper(".rooms-page-swiper", {
  spaceBetween: 16,
  slidesPerView: 1,
  grid: {
    fill: "row",
    rows: 7,
  },
  pagination: {
    el: ".rooms-page-swiper-pagination",
    clickable: true,
    renderBullet(index) {
      return `<span class="swiper-pagination-bullet swiper-pagination-bullet--square">${
        index + 1
      }</span>`;
    },
  },
  breakpoints: {
    1000: {
      slidesPerView: 3,
      spaceBetween: 16,
      grid: {
        fill: "row",
        rows: 4,
      },
    },
  },
  navigation: {
    nextEl: ".rooms-page-swiper__button--next ",
    prevEl: ".rooms-page-swiper__button--prev ",
  },
});

const roomsRelatedSwiper = new Swiper(".rooms-related-swiper", {
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    1000: {
      slidesPerView: 3,
    },
  },
  navigation: {
    nextEl: ".rooms-related-swiper-btn-next",
    prevEl: ".rooms-related-swiper-btn-prev",
  },
});
