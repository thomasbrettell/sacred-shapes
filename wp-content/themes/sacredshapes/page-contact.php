<?php get_header(); ?>

<section id='contact'>
  <div class='wrapper'>
    <div class='side'>
      <div class='row'><span>EMAIL</span><a><?php  echo bloginfo('admin_email'); ?></a></div>
      <div class='row'><span>PHONE</span><a><?php  echo get_option('phone_number'); ?></a></div>
      <div class='row'><span>ADDRESS</span><a><?php  echo get_option('address'); ?></a></div>
      <div class='row'><span>INSTAGRAM</span><a>@sacredshapes</a></div>
    </div>
    <div class='side'>
      <?php echo do_shortcode('[wpforms id="9"]');?>
    </div>
  </div>
</section>

<?php get_footer(); ?>