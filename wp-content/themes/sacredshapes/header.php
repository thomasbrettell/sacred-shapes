<?php
//  $generated_gradient = select_canvas_gradient(rand(1, 3));
global $GENERATED_GRADIENT;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SACRED SHAPES</title>
  <?php wp_head(); ?>
  <script>
    var generated_gradient = '<?php echo $GENERATED_GRADIENT; ?>'
  </script>
</head>

<body class='css-transitions-only-after-page-load <?php echo is_front_page() ? 'home' : ''; ?>'>

<div id='pointer'>
  <span></span>
  <svg class='arrow top' id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.56 9.19"><defs><style>.svg-arrow{fill:none;stroke:white;stroke-miterlimit:10;stroke-width:2px;}</style></defs><polyline class="svg-arrow" points="0.71 8.48 7.78 1.41 14.85 8.48"/></svg>
  <svg class='arrow right' id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.13 14.85"><defs><style>.svg-arrow{fill:none;stroke:white;stroke-miterlimit:10;stroke-width:2px;}</style></defs><polyline class="svg-arrow" points="0.35 0.35 7.42 7.42 0.35 14.5"/></svg>
  <svg class='arrow bottom' id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.85 8.13"><defs><style>.svg-arrow{fill:none;stroke:white;stroke-miterlimit:10;stroke-width:2px;}</style></defs><polyline class="svg-arrow" points="14.5 0.35 7.42 7.42 0.35 0.35"/></svg>
  <svg class='arrow left' id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.13 14.85"><defs><style>.svg-arrow{fill:none;stroke:white;stroke-miterlimit:10;stroke-width:2px;}</style></defs><polyline class="svg-arrow" points="7.78 14.5 0.71 7.42 7.78 0.35"/></svg>
</div>

<div id='modal-overlay'></div>

<header>
  <div class='inner'>
    <div id="mobile-menu-toggler" hover>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <a class='logo <?php echo is_front_page() ? 'hidden' : ''; ?>' hover href='/'>
      SACRED SHAPES
    </a>
  </div>

  <div class='mobile-menu'>
    <div><a hover href='/gallery' data-bind='green'>GALLERY</a></div>
    <div><a hover href='/about' data-bind='blue'>ABOUT</a></div>
    <div><a hover href='/contact' data-bind='yellow'>CONTACT</a></div>
  </div>
</header>

<nav class='right'>
  <div class='inner'>
    <a hover href='/about'>ABOUT</a>
  </div>
</nav>
<nav class='bottom'>
  <div class='inner'>
    <a hover href='/contact'>CONTACT</a>
  </div>
</nav>
<nav class='left'>
  <div class='inner'>
    <a hover href='/gallery'>GALLERY</a>
  </div>
</nav>

<main class='main-wrapper'>
  <div class='scroll-container'>