<?php
/*
    This is the template for the header

    @package starttheme
*/
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<div class="container-fluid">
    <header class="main-head" style="background-image: url('<?php echo get_header_image(); ?>');">
        <div class="table">
            <div class="tr">
                <div class="td">
                    <h1 class="main-title"><?php bloginfo('name'); ?></h1>
                    <p class="main-desc"><?php bloginfo('description');?></p>
                    <a href="#" class="btn main-btn">Hire Me!</a>
                </div>
            </div>
        </div>
    </header>
</div>
