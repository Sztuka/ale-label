<!-- Footer -->
<footer class="footer bg-label-dark text-white pt-5">
  <div class="container">
    <!-- Logo and Contact Info -->
    <div class="row">
      <div class="col-md-6 d-flex align-items-center footer-content">
        <?php 
        $footer_logo = get_field('logo'); 
        if($footer_logo): ?>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url($footer_logo); ?>" alt="Company Logo" class="footer-logo">
          </a>
        <?php endif; ?>
        <div class="contact-info pl-5">
          <p><?php the_field('address_line_1'); ?><br><?php the_field('address_line_2'); ?></p>
          <p>
            <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a><br>
            <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright Stripe -->
  <div class="footer-copyright bg-label-dark text-center py-3">
    &copy; <?php echo date("Y"); ?> Madmassive. All rights reserved.
  </div>
</footer>

<?php wp_footer() ?>

</body>
</html>
