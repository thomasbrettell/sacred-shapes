<?php get_header(); ?>

<section id='gallery'>
  <div class='grid'>
  <?php 
  $jewelry_posts = new WP_Query(array(
      "posts_per_page" => -1,
      "post_type" => "jewellery",
  ));

  while($jewelry_posts->have_posts()) {
    $jewelry_posts->the_post();
    ?>

    <div class='grid-cell' hover style='background-image: url("<?php echo get_field('jewelry_image'); ?>")'></div>

    <?php
  }
  ?> 
  </div>
</section>

<?php get_footer(); ?>