<footer class="footer">
  <section class="footer__section">
    <div class="footer__container _container">
      <div class="footer__left">
        <p class="footer__text">
          <?php the_field('copy'); ?>
        </p>
        <a
          href="<?php the_field('privacy_policy'); ?>"
          class="footer__link"
          target="_blank">Privacy policy</a>
      </div>
      <div class="footer__center">
        <a
          href="<?php the_field('facebook-link'); ?>"
          class="footer__link"
          class="footer__social-link"
          target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/image/facebook.svg" alt="Facebook" />
        </a>
        <a
          href="<?php the_field('x-link'); ?>"
          class="footer__link"
          class="footer__social-link"
          target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/image/twitter.svg" alt="x" />
        </a>
        <a
          href="<?php the_field('vk-link'); ?>"
          class="footer__link"
          class="footer__social-link"
          target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/image/vk.svg" alt="VK" />
        </a>
      </div>
      <div class="footer__right">
        <p class="footer__phone"><?php the_field('phone'); ?></p>
        <p class="footer__messengers">WhatsApp | Viber | Telegram</p>
        <p class="footer__email"><?php the_field('email-link'); ?></p>
      </div>

    </div>
  </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>