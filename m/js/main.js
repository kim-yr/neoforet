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

const productVisualSlider = new Swiper("#product .list", {
  speed: 600,
  slidesPerView: 1, //화면에 보여지는 갯수
  // slidesPerGroup: 3, //한번에 넘어가는 갯수
  navigation: {
    prevEl: "#product .prev",
    nextEl: "#product .next",
  },
  scrollbar: {
    el: ".scroll",
    draggable: true,
  },
});

const newsSlider = new Swiper("#news", {
  speed: 600,
  centeredSlides: true,
  spaceBetween: 20,
  slidesPerView: "auto", //화면에 보여지는 갯수, auto는 내가 정한 너비만큼 출력
  // slidesPerGroup: 3, //한번에 넘어가는 갯수
  // navigation: {
  //   prevEl: "#product .prev",
  //   nextEl: "#product .next",
  // },
  // scrollbar: {
  //   el: ".scroll",
  //   draggable: true,
  // },
});

const btnAll = document.querySelector("#header .all");
const gnb = document.querySelector(".gnbWrap");
const btnClose = document.querySelector(".gnbWrap .close");

btnAll.addEventListener("click", () => {
  gnb.classList.add("on");
});
btnClose.addEventListener("click", function () {
  gnb.classList.remove("on");
});
