<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modelist
 */

?>

<footer class="footer">
        <div class="footer-logo">
            <img src="<?php the_field('footer-logo') ?>" alt="logo">
        </div>
        <div class="footer-radio">
        <?php the_field('footer-radio') ?>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
