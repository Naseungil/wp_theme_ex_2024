<?php get_header()?>


<div id="content" class="two-thirds">
  
<div class="widget-container">	
    <h3 class="widget-title">최근 공지</h3>
    <?php
      query_posts( array(
        'category_name'  => 'works',
        'posts_per_page' => 3
      ) );
    ?>
    <ul>
      <?php
        // The Loop
        while ( have_posts() ) : the_post();
      ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail( array( 50, 50));
              }
            ?>
          </a>
        </li>
      <?php
        endwhile;
      ?>
    </ul>
    <?php  wp_reset_query(); ?>
  </div><!-- .widget-container -->



    
</div><!-- #content-->
    
<?php get_sidebar(); ?>

<?php get_footer()?>