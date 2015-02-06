<?php get_header(); ?>

    <div id="top" class="content">
    
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
          <?php
            // the content (pretty self explanatory huh)
            the_content();
          ?>

      <?php endwhile; else : ?>

      <?php endif; ?>
      
    </div>

<?php get_footer(); ?>
