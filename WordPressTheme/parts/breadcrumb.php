<?php
$class = isset($args['class']) ? $args['class'] : '';
?>
<div class="breadcrumb breadcrumb-margin">


  <div class="breadcrumb__inner <?php echo esc_attr($class); ?>">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
</div>