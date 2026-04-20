<section class="section section-light">
  <div class="container">
    <?php
    if (!empty($block_title)) {
      echo '<div class="separator"></div>';
      echo '<h2 class="section-title">' . $block_title . '</h2>';
    }
    ?>

    <!-- основной блок слайдера -->
    <div class="swiper steps-slider">
      <!-- обертка слайдера -->
      <ol class="swiper-wrapper steps">
        <!-- слайды -->
        <li class="swiper-slide steps-item">
          <span class="steps-num">01</span>
          <h3 class="steps-title">Знакомство</h3>
          <p class="steps-text">
            Безусловно, сплочённость команды профессионалов позволяет
            оценить значение форм воздействия.
          </p>
          <a href="#" class="button-link">Оставить заявку</a>
        </li>
        <li class="swiper-slide steps-item">
          <span class="steps-num">02</span>
          <h3 class="steps-title">Заключение <br>договора</h3>
          <p class="steps-text">
            Лишь интерактивные прототипы призваны к ответу.
          </p>
        </li>
        <li class="swiper-slide steps-item">
          <span class="steps-num">03</span>
          <h3 class="steps-title">Производство</h3>
          <p class="steps-text">
            А также стремящиеся вытеснить традиционное производство,
            нанотехнологии функционально разнесены на независимые элементы.
          </p>
        </li>
        <li class="swiper-slide steps-item">
          <span class="steps-num">04</span>
          <h3 class="steps-title">Доставка</h3>
          <p class="steps-text">
            В частности, экономическая повестка сегодняшнего дня говорит о
            возможностях приоритизации разума над эмоциями.
          </p>
        </li>
      </ol>

      <!-- кнопки навигации вперед.назад -->
      <div class="steps-buttons primary-buttons-wrapper">
        <div class="steps-button-prev primary-button-prev">
          <svg>
            <use xlink:href="img/sprite.svg#arrow-prev-steps"></use>
          </svg>
        </div>
        <div class="steps-button-next primary-button-next">
          <svg>
            <use xlink:href="img/sprite.svg#arrow-next-steps"></use>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>
