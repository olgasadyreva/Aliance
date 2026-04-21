<section class="section blog">
  <div class="container">
    <?php
    if (!empty($block_title)) {
      echo '<div class="separator"></div>';
      echo '<h2 class="section-title">' . $block_title . '</h2>';
    }
    ?>

    <!-- основной блок слайдера -->
    <div class="swiper blog-slider">
      <!-- обертка слайдера -->
      <div class="swiper-wrapper">
        <!-- слайды -->
        <a href="#" class="swiper-slide blog-card">
          <picture class="blog-card-image">
            <source type="image/webp" srcset="img/blog/blog-photo.webp">
            <source type="image/png" srcset="img/blog/blog-photo.jpg">
            <img src="img/blog/blog-photo.jpg" alt="blog-photo" width="705" height="400">
          </picture>

          <h3 class="blog-card-title">
            Современная методология разработки одухотворила всех причастных
          </h3>

          <p class="blog-card-text">
            Действия представителей оппозиции, превозмогая сложившуюся
            непростую экономическую ситуацию, в равной степени
            предоставлены...
          </p>
        </a>

        <a href="#" class="swiper-slide blog-card">
          <picture class="blog-card-image">
            <source type="image/webp" srcset="img/blog/blog-photo-2.webp">
            <source type="image/png" srcset="img/blog/blog-photo-2.jpg">
            <img src="img/blog/blog-photo-2.jpg" alt="blog-photo-2" width="705" height="400">
          </picture>

          <h3 class="blog-card-title">
            Сложно сказать, почему жизнь прекрасна
          </h3>

          <p class="blog-card-text">
            Сложно сказать, почему элементы политического процесса
            функционально разнесены на независимые элементы. Безусловно,
            высокотехнологичная...
          </p>
        </a>

        <a href="#" class="swiper-slide blog-card">
          <picture class="blog-card-image">
            <source type="image/webp" srcset="img/blog/blog-photo.webp">
            <source type="image/png" srcset="img/blog/blog-photo.jpg">
            <img src="img/blog/blog-photo.jpg" alt="blog-photo" width="705" height="400">
          </picture>

          <h3 class="blog-card-title">
            Современная методология разработки одухотворила всех причастных
          </h3>

          <p class="blog-card-text">
            Действия представителей оппозиции, превозмогая сложившуюся
            непростую экономическую ситуацию, в равной степени
            предоставлены...
          </p>
        </a>
      </div>

      <div class="blog-slider-footer <?= $blog_style; ?>"">
            <a href=" ./blog.php" class="button-link">Весь блог</a>

        <div class="blog-buttons primary-buttons-wrapper">
          <div class="blog-button-prev primary-button-prev">
            <svg>
              <use xlink:href="img/sprite.svg#arrow-prev-steps"></use>
            </svg>
          </div>

          <div class="blog-button-next primary-button-next">
            <svg>
              <use xlink:href="img/sprite.svg#arrow-next-steps"></use>
            </svg>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
