</main>
<?php if( is_front_page() ): ?>
  <section class="hero-dogs">
    <img
      src="<?php echo esc_url( 'http://brontedogs.local/wp-content/uploads/2025/06/Group-of-dogs.png' ); ?>"
      alt="Group of dogs"
      class="hero-img"
    >
  </section>
<?php endif; ?>

<footer class="site-footer">

  <div class="footer-floating-card">

    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center gap-4">

      <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
        <span class="brand-main">BRONTË</span>
        <span class="brand-accent">DOGS</span>
      </a>

      <div class="d-flex gap-3 ms-md-auto">
        <a href="/book-a-tour" class="btn btn-success custom-background-color">Book a Tour Today</a>
        <a href="/services" class="btn btn-outline-success">View Our Services</a>
      </div>

    </div>

    <p class="copyright small mb-0 mt-4">
      &copy; 2010 &ndash; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
    </p>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
