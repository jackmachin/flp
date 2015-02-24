<?php get_header(); ?>

    <div id="top" class="content">
    
      <div class="wrapper">
      
        <div class="container">
    
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
          
              <?php
                // the content (pretty self explanatory huh)
                the_content();
              ?>
              
              </article>

          <?php endwhile; else : ?>

          <?php endif; ?>
          
        </div>
      
      </div>
      
    </div>

<?php get_footer(); ?>
