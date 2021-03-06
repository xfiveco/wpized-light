<?php
/**
 * X5: Footer
 *
 * Remember to always include the wp_footer() call before the </body> tag
 *
 * @package WordPress
 * @subpackage X5
 */
?>

<footer id="footer">
  <p id="copyrights">
    &copy; <?php echo intval( date( 'Y' ) ) . ' ' . esc_html( get_bloginfo( 'name' ) ); ?>
  </p>
</footer>

<?php
// do not remove
wp_footer();
?>

</body>
</html>
