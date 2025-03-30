<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
  <main class="wrap">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          Logo
        </div>
        <div class="col-10 text-end">
          Navigation
        </div>
      </div>
