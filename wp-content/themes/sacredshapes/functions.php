<?php

// Get files
function theme_files() {
  wp_enqueue_style('inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap', false );
  wp_enqueue_style('ogg', get_theme_file_uri('/css/ogg/ogg.css'));
  wp_enqueue_style('swiper', get_theme_file_uri('/css/swiper.css'));
  wp_enqueue_style('wp-form-styles', get_theme_file_uri('/css/wp-form-styles/wp-form-styles.css'));
  wp_enqueue_style('styles', get_theme_file_uri('/css/styles/styles.css'));
  wp_enqueue_script('gradient-canvas', get_theme_file_uri('/js/gradient-canvas.js'), NULL, '1.0', true);
  wp_enqueue_script('bundle', get_theme_file_uri('/dist/bundle.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');


// Disable admin bar
add_filter('show_admin_bar', '__return_false');


// Register custom post types
function register_custom_post_types() {

  register_post_type('jewellery', array(
    'hierarchical' => true,
    "show_in_rest" => true,
    'show_in_rest' => true,
    "rewrite" => array("slug" => "jewellery"),
    'public' => true,
    'labels' => array(
      "name" => "Jewellery",
      "add_new_item" => "Add New Jewellery",
      "edit_item" => "Edit Jewellery",
      "all_items" => "All Jewellery",
      "singular_name" => "Jewellery",
    )
  ));
}
add_action("init", "register_custom_post_types");

function register_post_type_taxonomy() {
  register_taxonomy(
      'jewellery_collections',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
      'jewellery',             // post type name
      array(
          'hierarchical' => true,
          'label' => 'Collections', // display name
          'query_var' => true,
          'rewrite' => array(
              'slug' => 'collections',    // This controls the base slug that will display before each term
          ),
          'show_admin_column' => true,
          'labels' => array(
            "add_new_item" => "Add New Collection"
          )
      )
  );
}
add_action( 'init', 'register_post_type_taxonomy');


function prefix_disabled_gutenberg($current_status, $post_type) {
  if($post_type === 'jewellery') return false;
  return $current_status;
}
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);


// Generate the homepage canvas colour
function select_canvas_gradient($rand_number) {
  switch ($rand_number) {
    case 1:
      return 'multi-gradient';
      break;
    case 2:
      return 'red-gradient';
      break;
    case 3:
      return 'green-gradient';
      break;
    case 4:
      return 'blue-gradient';
      break;
    case 5:
      return 'purple-gradient';
      break;
    default:
  }
}
$GENERATED_GRADIENT = select_canvas_gradient(rand(1, 5));


function additional_settings_section() {  
  add_settings_section(  
      'additional_settings', // Section ID 
      'Additional Settings', // Section Title
      'additional_settings_options_callback', // Callback
      'general' // What Page?  This makes the section show up on the General Settings Page
  );

  add_settings_field( // Option 1
      'phone_number', // Option ID
      'Phone number', // Label
      'additional_settings_callback', // !important - This is where the args go!
      'general', // Page it will be displayed (General Settings)
      'additional_settings', // Name of our section
      array( // The $args
          'phone_number' // Should match Option ID
      )  
  ); 

  add_settings_field( // Option 1
    'address', // Option ID
    'Address', // Label
    'additional_settings_callback', // !important - This is where the args go!
    'general', // Page it will be displayed (General Settings)
    'additional_settings', // Name of our section
    array( // The $args
        'address' // Should match Option ID
    )   
  ); 

  register_setting('general','phone_number', 'esc_attr');
  register_setting('general','address', 'esc_attr');
}

function additional_settings_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

add_action('admin_init', 'additional_settings_section');  
