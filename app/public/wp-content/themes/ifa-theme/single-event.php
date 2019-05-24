<!-- name of this file is crucial! It's how WP finds the template for our custom post types -->

<?php 
    get_header(); ?>

    <?php while(have_posts()) {
        the_post(); ?>
        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
            <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title() ?></h1>
            <div class="page-banner__intro">
                <p>Don't forget to replace this with a dynamic custom field later.</p>
            </div>
            </div>  
        </div>

        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <!-- The get_post_type_archive_link('event') function gets the post_type link dynamically, even if it changes-->
                    <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Events Home
                    </a>   
                    <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div>
            <div class="generic-content">
                <?php the_content(); ?>
            </div>
        </div>

    <?php }

    get_footer();
?>