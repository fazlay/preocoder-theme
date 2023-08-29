<?php
/*

* This template for displaying Header

*/

?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div id="header_area" class="<?php echo get_theme_mod('ali_menu_sttings') ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <a href="<?php echo home_url() ?>"> <img src="<?php echo get_theme_mod('ali_logo'); ?>" /> </a>
                </div>
                <div class="col-md-9">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'menu_id' => 'nav',
                    ))
                    ?>
                </div>
            </div>
        </div>
    </div>