<? include("../include/header.html") ?>

<!--header end-->
<main id="main">
  <div id="mainVisual">
    <ul class="swiper-wrapper">
      <li class="visual01 swiper-slide"></li>
      <li class="visual02 swiper-slide"></li>
      <li class="visual03 swiper-slide"></li>
    </ul>
    <div class="slogan">
      <p class="main">return to forest</p>
      <p class="sub">숲으로 돌아가는 종이, 네오포레</p>
      <a href=""> 브랜드 스토리 자세히 보기<span class="material-icons">east</span> </a>
      <div class="pagination"></div>
    </div>
  </div>
  <!--mainVisual end-->

  <article id="product">
    <div class="titleBox">
      <h2>네오포레의<br />다양한 제품을 만나보세요.</h2>
      <p>무림은 최고의 기술로 생활의 가치를 더하고 있습니다.</p>
    </div>
    <div class="list">
      <ul class="swiper-wrapper">
        <li class="swiper-slide">
          <img src="../img/slide_img_1.png" alt="슬라이드 이미지" />
          <a href="#">
            네오포레 CUP
            <span class="material-icons"> east </span>
          </a>
        </li>
        <li class="swiper-slide">
          <img src="../img/slide_img_2.png" alt="슬라이드 이미지" />
          <a href="#">
            네오포레 STRAW
            <span class="material-icons"> east </span>
          </a>
        </li>
        <li class="swiper-slide">
          <img src="../img/slide_img_3.png" alt="슬라이드 이미지" />
          <a href="#">
            네오포레 완충재
            <span class="material-icons"> east </span>
          </a>
        </li>
        <li class="swiper-slide">
          <img src="../img/slide_img_4.png" alt="슬라이드 이미지" />
          <a href="#">
            네오포레 FLEX
            <span class="material-icons"> east </span>
          </a>
        </li>
        <li class="swiper-slide">
          <img src="../img/slide_img_5.png" alt="슬라이드 이미지" />
          <a href="#">
            펄프 몰드
            <span class="material-icons"> east </span>
          </a>
        </li>
        <li class="swiper-slide">
          <img src="../img/slide_img_6.png" alt="슬라이드 이미지" />
          <a href="#">
            바이오플라스틱
            <span class="material-icons"> east </span>
          </a>
        </li>
      </ul>
    </div>
    <div class="btns">
      <button class="btn prev">
        <span class="material-icons"> navigate_before </span>
      </button>
      <button class="btn next">
        <span class="material-icons"> navigate_next </span>
      </button>
    </div>
    <div class="scroll"></div>
  </article>
  <!--product end-->
  <!--이미지가 중요한 의미가 있으면 img태그,
  이미지 안써도 되는 부분, 이미지가 자주 바뀌는 부분이면 백그라운드-->
  <article id="news">
    <div class="titleBox">
      <h2 class="title">네오포레의<br />다양한 소식을 만나보세요.</h2>
      <p>무림은 최고의 기술로 생활에 가치를 더하고 있습니다.</p>
    </div>

    <ul class="itemList swiper-wrapper">
      <li class="item swiper-slide">
        <a href="https://neoforet.co.kr/pr/media/view?seq=38&page=1">
          <div class="textBox">
            <p class="newsTitle">탈 플라스틱 종이컵 '네오포레' 개발</p>
            <p class="date">2021.11.04</p>
            <p class="article">무림의 친환경 경영 및 플라스틱을 대체하는 '네오포레' 시리즈 (출처: 단디뉴스)</p>
          </div>
        </a>
      </li>
      <li class="item swiper-slide">
        <a href="https://neoforet.co.kr/pr/media/view?seq=37&page=1">
          <div class="textBox">
            <p class="newsTitle">'무림, 한솔만 A등급', 제지업계, ESG경영 '양극화' 심화</p>
            <p class="date">2021.10.29</p>
            <p class="article">'2021년 ESG평가'서 무림, 한솔 A등급, 중소형 제지사 C등급 (출처: 머니투데이)</p>
          </div>
        </a>
      </li>
      <li class="item swiper-slide">
        <a href="https://neoforet.co.kr/pr/media/view?seq=36&page=1">
          <div class="textBox">
            <p class="newsTitle">친환경 가치 담은 '종이 빨대' 찾는 기업 늘었다</p>
            <p class="date">2021.10.08</p>
            <p class="article">무림, 종이 빨대 부착용 비닐도 친환경 종이로 개발 (출처:아시아경제)</p>
          </div>
        </a>
      </li>
    </ul>

    <div class="btns center">
      <a href="#" class="btn"><span>네오포레 소식 더보기</span></a>
    </div>
  </article>
  <!--news end-->
  <div id="cs">
    <div class="online">
      <a href="#">
        <div class="text">
          <p class="title">온라인 문의</p>
          <p class="content">궁금하신 사항을 문의하실 수 있습니다.</p>
        </div>
        <button>문의하기<span class="material-icons">east</span></button>
      </a>
    </div>
    <div class="manager">
      <a href="#">
        <div class="text">
          <p class="title">담당자 정보</p>
          <p class="content">업무 담당자를 확인하실 수 있습니다.</p>
        </div>
        <button>정보확인<span class="material-icons">east</span></button>
      </a>
    </div>
  </div>
</main>
<!--main end-->
<? include("../include/footer.html") ?>
