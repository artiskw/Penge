<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="<?=pll_current_language(); ?>">

<head>
    <title><?php bloginfo('name'); ?><?php echo get_the_title() !== '' ? ' - ' . get_the_title() : ' - ' . single_cat_title(); ?></title>
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Pange">
    <meta name="DC.language" scheme="ISO639-1" content="<?=pll_current_language(); ?>">    
    <meta property="og:site_name" content="Pange">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
    var fonts = {
        "Montserrat": {
            "family": "Montserrat",
            "source": "google",
            "subsets": [
                "latin",
                "latin-ext",
                "vietnamese"
            ],
            "variants": [
                "100",
                "100italic",
                "200",
                "200italic",
                "300",
                "300italic",
                "500",
                "500italic",
                "600",
                "600italic",
                "700",
                "700italic",
                "800",
                "800italic",
                "900",
                "900italic",
                "italic",
                "regular"
            ]
        },
        "Roboto": {
            "family": "Roboto",
            "source": "google",
            "subsets": [
                "cyrillic",
                "cyrillic-ext",
                "greek",
                "greek-ext",
                "latin",
                "latin-ext",
                "vietnamese"
            ],
            "variants": [
                "100",
                "100italic",
                "300",
                "300italic",
                "500",
                "500italic",
                "700",
                "700italic",
                "900",
                "900italic",
                "italic",
                "regular"
            ]
        }
    };
    </script>
    <?php wp_head(); ?>
    <script type="text/javascript" src='//use.typekit.net/previewkits/pk-v1.js'></script>
    <script type="text/javascript">
    jQuery(function() {
        // Initialize TypeKit Preview API.
        window.TypekitPreview.setup({
            'auth_id': 'frnt',
            'auth_token': "sLJb61KU88xihVYFVTNxDoyPuk%2B6DZgZpNw6Z13hOoOHcfVIpZMiTdBM54opd19jlLpOeRq1WKtPpcyf2zmkWA%3D%3D"
        });
    });
    </script>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
</head>
<body>
    <div class="b-content hide-footer">
        <div id="language_nav_2" class="fr-widget fr-container fid-622fa108c7447e42bd025ba1 fr_language_nav_2" data-id="621f2485389429f3542a0a37">
            <div id="container_68" class="fr-widget fr-container fid-621f26da389429f3542a0a5b fr_container_68" data-id="621f26da389429f3542a0a5b">
                <?php
                    include('classes/ApgTopMenuWalker.php');
                    wp_nav_menu(
                        [
                            'theme_location' => 'top_menu',
                            'container' => 'p',
                            'container_id' => 'my_nav',
                            'depth' => 1,
                            'items_wrap' => '%3$s',
                            'walker' => new ApgTopMenuWalker
                        ]
                    );
                ?>
            </div>
        </div>
        <div id="nav_with_logo" class="fr-widget fr-container fid-622fa108c7447e42bd025ba3 fr_nav_with_logo_7 " data-id="61f93592e45c30b6a846ebc0">
            <div id="navigation_dark_with_logo_7" class="fr-widget fr-navigation fr-navigation-active fid-61f93592e45c30b6a846ebc4 fr_navigation_dark_with_logo_7 " data-id="61f93592e45c30b6a846ebc4">
                <a id="logo_7" class="fr-widget fr-img fid-61f93592e45c30b6a846ebca fr_logo_2 fr-link" data-id="61f93592e45c30b6a846ebca" href="<?php echo get_site_url(); ?>" data-fr-popup-align="center"> 
                <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                    <?php $image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
                    <img src="<?php echo $image[0]; ?>" />
                    <script>
                        (function(window, document, $){
                            'use strict';
                            const logo_element = $(this);
                            $(window).scroll(function() {
                                var scroll = $(window).scrollTop();
                                if (scroll >= 100) {
                                    logo_element.css("max-width", "6em");
                                } else if (scroll < 80) {
                                    logo_element.css("max-width", "");
                                }
                            });
                        }).call(document.getElementsByClassName('fr_logo_2')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                    </script>
                </a>
                <div id="mobile_toggle_2"
                     class="fr-widget fr-navigation-toggle fid-61f93592e45c30b6a846ebcc fr_mobile_toggle_2 "
                     data-id="61f93592e45c30b6a846ebcc">
                    <div id="hamburger_icon_2"
                         class="fr-widget fr-svg fid-61f93592e45c30b6a846ebd8 fr_hamburger_icon_2 "
                         data-id="61f93592e45c30b6a846ebd8">
                        <div class="fr-svg-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <path d="M12 20h40v2H12zM12 32h40v2H12zM12 44h40v2H12z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div id="items_2" class="fr-widget fr-container fid-61f93592e45c30b6a846ebce fr_items_2">
                    <?php
                    include('classes/ApgPrimaryMenuWalker.php');
                    wp_nav_menu(
                        [
                            'theme_location' => 'primary_menu',
                            'container' => 'p',
                            'container_id' => 'my_nav',
                            'depth' => 1,
                            'items_wrap' => '%3$s',
                            'walker' => new ApgPrimaryMenuWalker
                        ]
                    );
                    ?>
                </div>
            </div>
            <script>
            (function(window, document, $) {
                'use strict';
                const header = $(this);
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 100) {
                        header.css("background", "#fff");
                        header.css("border-bottom", "1px solid #003000");
                    } else {
                        header.css("background", "transparent");
                        header.css("border-bottom", "0");
                    }
                });
            }).call(document.getElementsByClassName('fr_nav_with_logo_2')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
            </script>
        </div>