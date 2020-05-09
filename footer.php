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
            <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/logo-footer.png" alt="logo">
        </div>
        <div class="footer-radio">
            © 2010-2020 Радиоупрявляемый моделизм
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
