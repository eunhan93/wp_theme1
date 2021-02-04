<?php get_header();?>
  
  <?php 
    if(have_posts()) : 
      while(have_posts()) : the_post(); ?>
      <article class="post">
      <h2><?php the_title() ?></h2>
        <?php the_content(); ?>
      </article>
      <?php
      endwhile;
    else : 
      echo '없다';
    endif;
  ?>
<?php get_footer();?>