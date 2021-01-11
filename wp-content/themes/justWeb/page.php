<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 */

get_header();

/* Start the Loop */
?>
        <main class="wrapper">
            <heade class="mainHeader">
                <h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            <!--
            <nav class="navi">
                <ul>
                    <li><a href="index.html" title="Home">Home</a></li>
                    <li><a href="index.html" title="About">About</a></li>
                    <li><a href="index.html" title="Services">Services</a></li>
                    <li><a href="index.html" title="Contact">Contact</a></li>
                </ul>
            </nav>
            -->
            <?php wp_nav_menu(array('theme_location' => 'Main Menu', 'container_class' => 'navi')); ?>
            <section class="mainContent">
                <div class="stickyPosition">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, et! Maiores repellendus enim, aperiam laborum labore corrupti delectus, alias dolorem quae qui pariatur mollitia velit dicta cumque distinctio adipisci soluta?</p>
                </div>
                    <article>
                    <?php if ( have_posts() ) {
                    // Load posts loop.
                    while ( have_posts() ) {
                    the_post();
                    }
                    }
                    ?>
                    <h2><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_content(); ?></p>
                    </article>
            <button type="button" onclick="greetings();">Greetings</button>
            <div class="cssLayout">
                <h6>Lorem:</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore inventore odio a earum. Dolorem, rem pariatur eos impedit dolorum quaerat facilis blanditiis placeat, voluptate molestiae maxime? Veniam excepturi corrupti ab.
                Placeat laboriosam rerum doloribus nesciunt architecto quisquam quis tempora mollitia. Animi pariatur possimus et labore ipsa doloribus alias excepturi, tenetur harum, vitae odit aliquam cumque. Molestias eius adipisci eveniet rerum.
                Velit, labore aliquid magnam dolor ab hic. Nemo, molestiae quia. Odit rem iusto accusamus nemo dicta libero quia beatae non alias. Corporis, et. Doloribus facilis voluptas nostrum nobis aut voluptatem.
                Minima voluptatibus tempore excepturi libero? Laborum ad rem explicabo rerum unde quo cupiditate dolores, incidunt, reiciendis atque ex. Accusamus magnam quibusdam vel saepe perferendis error velit! Illum nulla recusandae ipsa?
                Nihil praesentium officia nulla facere in explicabo nemo commodi ullam eum? Expedita maxime eum esse quis ipsa natus deserunt! Ullam doloremque reprehenderit porro nihil provident quisquam nulla vel illo enim?</p>
                <img src="images/suzukigsxr1000.jpg" style="width: 100%;;"/>
            </div>
            <div class="cssPositions">
                <p><a href="https://www.lipsum.com/" title="Lorem" target="_blank">Lorem</a></p>
            </div>
        </section>
<?php
  get_footer();
?>
