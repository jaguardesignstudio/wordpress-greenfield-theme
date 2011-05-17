</div> <!-- end #content -->

<div id="footer">
  Wordpress-Greenfield-Theme &copy; 2011 Brendon Rapp<br>
  <div id="footer-widgets-box">
    <?php if (function_exists('dynamic_sidebar')) : ?>
      <?php dynamic_sidebar('footer-widgets'); ?>
    <?php endif; ?>
  </div>
</div>

</div> <!-- end #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
