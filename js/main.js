//swiper-wrapper의 부모 이름 적어야 함. id, class 둘 중 암거나
const mainVisualSlider = new Swiper("#mainVisual", {
  autoplay: {
    delay: 2000, //머무르는 시간
    disableOnInteraction: false,
  },
  speed: 1000, //넘어가는 시간
  effect: "fade",
  loop: true,
  pagination: {
    el: "#mainVisual .pagination",
    type: "bullets",
    clickable: true,
  },
});
