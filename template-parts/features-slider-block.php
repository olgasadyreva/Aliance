<!-- основной блок слайдера -->
<div class="swiper header-features-slider <?= $slider_style; ?>">
  <!-- обертка слайдера -->
  <ul class="swiper-wrapper header-features">
    <!-- слайды -->
    <li class="swiper-slide header-features-item">
      <svg class="header-features-svg">
        <use xlink:href="img/sprite.svg#time"></use>
      </svg>
      <p class="header-features-text">Непрерывная работа c&nbsp;2017 года</p>
    </li>
    <li class="swiper-slide header-features-item">
      <svg class="header-features-svg">
        <use xlink:href="img/sprite.svg#certificate"></use>
      </svg>
      <p class="header-features-text">Вся продукция сертифицирована</p>
    </li>
    <li class="swiper-slide header-features-item">
      <svg class="header-features-svg">
        <use xlink:href="img/sprite.svg#person"></use>
      </svg>
      <p class="header-features-text">
        Контроль качества на всех этапах
      </p>
    </li>
    <li class="swiper-slide header-features-item">
      <svg class="header-features-svg">
        <use xlink:href="img/sprite.svg#delivery"></use>
      </svg>
      <p class="header-features-text">
        Возможны поставки по&nbsp;всей России
      </p>
    </li>
    <li class="swiper-slide header-features-item">
      <svg class="header-features-svg">
        <use xlink:href="img/sprite.svg#speed"></use>
      </svg>
      <p class="header-features-text">Оперативное производство</p>
    </li>
  </ul>

  <!-- кнопки навигации вперед.назад -->
  <div class="features-buttons primary-buttons-wrapper">
    <div class="features-button-prev primary-button-prev">
      <svg>
        <use xlink:href="img/sprite.svg#arrow-prev"></use>
      </svg>
    </div>
    <div class="features-button-next primary-button-next">
      <svg>
        <use xlink:href="img/sprite.svg#arrow-next"></use>
      </svg>
    </div>
  </div>
</div>
