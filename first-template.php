<?php 

/*
Template Name: 푸터페이지

*/

get_header();

?>
  
  <?php 
    if(have_posts()) : 
      while(have_posts()) : the_post(); ?>
      <article class="post page">
      <h2><?php the_title() ?></h2>

        <div class="info-box">
          <h4>주의해서 읽어보세요.</h4>
        <p>주의사항입니다. 천천히 읽어보세요. 주의사항입니다. 천천히 읽어보세요. 주의사항입니다. 천천히 읽어보세요. 주의사항입니다. 천천히 읽어보세요. </p>
        </div>
        
        <?php the_content(); ?>
      </article>
      <?php
      endwhile;
    else : 
      echo '없다';
    endif;
  ?>
<?php get_footer();?>