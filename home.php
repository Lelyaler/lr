<?php
/*
Template Name: Home

*/
?>

<?php get_header(); ?>
<main class="main">
  <section class="section__header">
    <div class="header__container _container">
      <div class="header__left">
        <h1 class="header__title">
          <?php the_field('title'); ?>
          <div class="header__title-red">
            <?php the_field('title-red'); ?>
          </div>
        </h1>

        <h2 class="header__text">
          <?php the_field('subtitle'); ?>
        </h2>

        <div class="header__buttons">
          <a class="button-red" href="#move-ready">
            GET GUIDE
          </a>
          <a class="header__button-transp" href="#benefits">
            Benefits
          </a>
        </div>
      </div>
    </div>
  </section>
  <article class="about">
    <div class="about__container _container">
      <div class="about__left">
        <h2 class="title-red">Who are we?</h2>
      </div>
      <div class="about__right">
        <span class="subtitle-text">
          <?php the_field('who-about'); ?>
        </span>
      </div>
    </div>
  </article>
  <article class="guide">
    <div class="guide__image">
      <div class="guide__container _container">
        <div class="guide__left">
          <?php the_field('why-choose'); ?>
          <a class="button-red button-down" href="#move-ready">
            DOWNLOAD
          </a>

        </div>
      </div>
    </div>
  </article>
  <article class="benefits" id="benefits">
    <div class="benefits__container _container">
      <h3 class="title-red">Benefits</h3>
      <h4 class="benefits__subtitle subtitle-text">
        After reading the brochure, you will learn:
      </h4>
      <div class="benefits__cards-wrapper">
        <div class="benefits__cards">
          <?php
          global $post;

          $myposts = get_posts([
            'numberposts' => -1,
            'category'    => 2,
          ]);

          if ($myposts) {
            foreach ($myposts as $post) {
              setup_postdata($post);
          ?>
              <div class="card">
                <h1><?php the_title(); ?></h1>
                <span><?php the_content(); ?></span>
              </div>
          <?php }
          }
          wp_reset_postdata(); ?>

        </div>
        <!-- Счетчик слайдов -->
        <div class="slider-counter">
          <span class="current-slide">01</span> / 08
        </div>
        <!-- Кнопки управления слайдером -->
        <div class="slider-controls">
          <button class="prev-slide" title="Previous slide">
            <svg
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M3.828 6.99998H16V8.99998H3.828L9.192 14.364L7.778 15.778L0 7.99998L7.778 0.221985L9.192 1.63598L3.828 6.99998Z"
                fill="white" />
            </svg>
          </button>
          <button class="next-slide" title="Next slide">
            <svg
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.172 9H0V7H12.172L6.808 1.636L8.222 0.222L16 8L8.222 15.778L6.808 14.364L12.172 9Z"
                fill="white" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </article>
  <article class="brochure">
    <div class="brochure__container">
      <div class="brochure__right">
        <picture>
          <source
            srcset="<?php the_field('photo-img'); ?>"
            media="(max-width: 962px)" />
          <source
            srcset="<?php the_field('tablet'); ?>"
            media="(max-width: 1110px)" />


          <img
            class="brochure__image"
            src="<?php the_field('photo-img'); ?>"
            alt="photo" />
        </picture>


      </div>
      <div class="brochure__left">
        <?php the_field('brochure-text'); ?>
      </div>
    </div>
    </div>
  </article>
  <article class="move__ready" id="move-ready">
    <div class="move__ready-container _container">
      <div class="move__ready-right">
        <h2 class="move__ready-title">
          Ready to make your move to Russia?
        </h2>
        <p class="move__ready-subtitle">
          "Ready to make your move to Russia?"<br />Your own
          way to Russia! <span>It's free!</span>
        </p>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="113fe04" title="Контактная форма 1"]'); ?>
  </article>
  <section class="faq__section">
    <div class="faq__container">
      <h2 class="faq__title">FAQ</h2>
      <div class="faq__item"></div>

      <?php
      global $post;

      $myposts = get_posts([
        'numberposts' => -1,
        'category'    => 3,
      ]);

      if ($myposts) {
        foreach ($myposts as $post) {
          setup_postdata($post);
      ?>
          <div class="faq__item">
            <div class="faq__question">
              <?php the_title(); ?>
              <div class="faq__icon">
                <img src="<?php bloginfo('template_url'); ?>/assets/image/arrow.svg" alt="arrow" />
              </div>
            </div>
            <div class="faq__answer">
              <?php the_content(); ?>
            </div>
          </div>
      <?php }
      }
      wp_reset_postdata(); ?>


    </div>
  </section>
  <section class="contact-section">
    <div class="contact-container _container">
      <div class="contact__content">
        <div class="contact-left">
          <h3 class="contact-left__title">
            <?php the_field('title-block'); ?>
          </h3>
          <p class="contact-left__subtitle">
            <?php the_field('subtitle-block'); ?>
          </p>
        </div>
        <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="52562ba" title="contact form 2"]'); ?>

          <div class="form-footer">
            <p>
              By clicking on the button, you consent to the processing
              of<br />
              personal data and agree to the
              <a
                href="<?php the_field('privacy_policy'); ?>"
                target="_blank">privacy policy</a>
            </p>
          </div>
        </div>
      </div>
  </section>
</main>
<?php get_footer(); ?>