<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 */

?>
        <footer class="mainFooter">
            <p>Copyright &#169; <script>document.write(getCurrentYear());</script></p>
            <?php wp_nav_menu(array('theme_location' => 'Social Menu', 'container_class' => 'socialConnect')); ?>
        </footer>
<?php wp_footer(); ?>

</body>
</html>
