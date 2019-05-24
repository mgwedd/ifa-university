<?php
    get_header();

    while(have_posts()) {
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
        <?php 
            $theParent = wp_get_post_parent_id(get_the_ID());
            // if the parent id val isn't 0 (which means it has no parent)... then, render the breadcrumbs
            if ($theParent) { ?>
                <div class="metabox metabox--position-up metabox--with-home-link">
                    <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
                </div>
            <?php }
        ?>

    <?php 
    // $testArray tells us whether the current page has children, making it a parent. 
    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));
    // if the page is a parent, then display a sidebar nav of children. Otherwise, don't render one.
    if ($theParent or $testArray) { ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php 
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }
          // the conditional helps us handle both parents and children pages.
          wp_list_pages(array(
            'title_li' => NULL, 
            'child_of' => $findChildrenOf
          ));
        ?>
      </ul>
    </div>
      <?php } ?>  

    <div class="generic-content">
        <?php the_content() ?>
    </div>

  </div>

    <?php }

    get_footer();
?>