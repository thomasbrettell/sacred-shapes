<?php get_header(); ?>

<section id='intro' data-text='Scroll'>
  <span><h1>SACRED SHAPES</h1></span>
  <canvas id="<?php echo $GENERATED_GRADIENT; ?>" class='gradient-canvas' data-js-darken-top data-transition-in></canvas>
</section>
<section id='home-about'>
  <div>
    <h1>SACRED SHAPES MAKES JEWELRY</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus porro neque eligendi? Ab est possimus fugiat? Error iste temporibus eaque, molestias, sint iure libero quod asperiores optio eos culpa laborum.</p>
  </div>
</section>
<section id='collections'>
  <div id='collections-swiper' class="swiper-container" data-text='Drag'>
    <div class="swiper-pagination"></div>
    <div class="swiper-wrapper">
    <?php 
    $collections = get_terms(
      array(
          'taxonomy' => 'jewellery_collections',
          'hide_empty' => false,
      )
    );

    if ( ! empty( $collections ) && is_array( $collections ) ) {
      foreach ( $collections as $collection ) { ?>
        <div class="swiper-slide" style='background-image: url("<?php echo get_field('main_image', $collection); ?>");'>
          <a href='<?php echo esc_url( get_term_link( $collection ) ) ?>'><?php echo $collection->name ?></a>
          <a><?php echo $collection->description; ?></a>
          <p><?php echo get_field('main_collection_image', $collection); ?></p>
        </div>
      <?php
      }
    } 
    ?>
    </div>
    <!-- <button class="button-next">Next</button>
    <button class="button-prev">Previous</button> -->
  </div>
</section>

<?php get_footer(); ?>