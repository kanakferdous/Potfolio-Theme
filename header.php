<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php echo esc_attr(bloginfo('charset')) ?>">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="<?php echo esc_attr(bloginfo('name')) ?>">
<meta content="" name="<?php echo esc_attr(bloginfo('description')) ?>">
<?php wp_head(); ?>
</head>
<body>
<!--==========================
Header
============================-->
<header id="header">
<div class="container-fluid">
    <div id="logo" class="pull-left">
    <h1><a href="#intro" class="scrollto"><?php echo esc_attr(bloginfo('name')) ?></a></h1>
    </div>
    <nav id="nav-menu-container">
    <?php 
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-menu',
        ) );
    ?>
    </nav>
</div>
</header>