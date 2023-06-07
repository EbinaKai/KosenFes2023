<?php get_header(); ?>

<section class="container mb-3">
  <h2><?php the_title();?> </h2>
  
  <!-- <?php if( has_post_thumbnail() ):?>
    <img class="img-fluid mb-4 mx-auto d-block" src="<?php the_post_thumbnail_url(); ?>" alt="サンプル画像">
  <?php endif; ?> -->

  <?php the_content();?>
</section>

<?php get_footer(); ?>