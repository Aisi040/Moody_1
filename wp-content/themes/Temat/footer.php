<script>
    if (typeof window.locale === 'undefined') {
        window.locale = 'en_US'; // Anpassa 'en_US' till önskat språk om nödvändigt.
    }
</script>
<footer id="site-footer" class="site-footer" role="contentinfo">
  <div class="footer-container">
    <div class="footer-address">
      <p>400 University Drive Suite 200 Coral Gables, FL 33134 USA</p>
    </div>
    <div class="footer-links">
      <a href="/links">Links</a>
      <a href="/help">Help</a>
    </div>
    <div class="footer-newsletter">
      <form action="<?php echo esc_url(home_url('/')); ?>" method="post">
        <input type="email" name="email" placeholder="Enter Your Email Address" required>
        <input type="submit" value="Subscribe">
      </form>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>
