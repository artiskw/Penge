<?php

global $wp;
$current_url = home_url( $wp->request );
	
if ($current_url === get_site_url() . '/send_email_form') :
	echo "šeit būs formas epasta izsūtīšanas funkcionalitā†e";
	
else :
get_header(); ?>
<?php $footer = get_field('apg_footer', get_option('page_on_front')); ?>

<div id="hero_bg_image_text_left_aligned_2" class="fr-widget fr-container fr_hero_bg_image_text_left_aligned_2">
    <div id="hd3_content_2" class="fr-widget fr-container fr_hd3_content_2">
        <div id="text_646" class="fr-widget fr-text fr-wf fr-richtext fr_text_646 fr_text_center">
            <div class="fr-text">
                <h1><?php pll_e('Error 404: Page not found'); ?></h1>
            </div>
        </div>
    </div>
</div>
<div id="container_196" class="fr-widget fr-container fr_container_196">
    <style>
        #container_56 * {
            color:#2d2d2d !important;
            fill:#2d2d2d !important;
        }
    </style>
    <div id="container_56" class="fr-widget fr-container fid-620bb01bf776be1568b50ee5 fr_container_56 "
             data-id="620bb01bf776be1568b50ee5">
        <div id="uneven_grid" class="fr-widget   fr-grid fid-61f938c6f68726ca7deff979 fr_uneven_grid "
                 data-id="61f938c6f68726ca7deff979">
            <div id="container_43" class="fr-widget fr-container fid-61fd10ac69b8ef7679879cf8 fr_container_43 "
                     data-id="61fd10ac69b8ef7679879cf8">
                    <a id="text_261"
                       class="fr-widget fr-text fr-wf fr-richtext fid-61f938def68726ca7deffa1f fr_text_261 fr_contact_link fr-link "
                       data-id="61f938def68726ca7deffa1f" href="mailto:<?php echo $footer['apg_email_name']; ?>"
                       data-fr-popup-align="center">
                        <div class="fr-text">
                            <p><?php echo $footer['apg_email_name']; ?></p>
                        </div>
                    </a>
                    <a id="text_420"
                       class="fr-widget fr-text fr-wf fr-richtext fid-61fda946434844b07b0d2d45 fr_text_420 fr_contact_link fr-link "
                       data-id="61fda946434844b07b0d2d45" href="tel:+3712000000"
                       target="_blank"
                       data-fr-popup-align="center">
                        <div class="fr-text">
                            <p><?php echo $footer['apg_phone_number']; ?></p>
                        </div>
                    </a>
                </div>
                <div id="container" class="fr-widget fr-container fid-61fd109869b8ef7679879cf3    fr_container "
                     data-id="61fd109869b8ef7679879cf3">
                    <div id="text_402"
                         class="fr-widget fr-text fr-wf fr-richtext fid-61fd10b769b8ef7679879cfc fr_bright_heading fr_text_402 "
                         data-id="61fd10b769b8ef7679879cfc">
                        <div class="fr-text">
                            <h6><?php pll_e("apg_follow_us"); ?></h6>
                        </div>
                    </div>
                    <div id="container_37" class="fr-widget fr-container fid-61f93912f68726ca7deffa57 fr_container_37 "
                         data-id="61f93912f68726ca7deffa57">
                        <div id="wf_soc_icons_3" class="fr-widget fr-grid fid-61f9390ff68726ca7deffa33 fr_wf_soc_icons_3 "
                             data-id="61f9390ff68726ca7deffa33">
                            <?php if (is_array(($footer['apg_icons']))) : ?>
                            <?php foreach ($footer['apg_icons'] as $icons) : ?>
                                <a id="svg_28"
                                   class="fr-widget fr-svg fid-61f9390ff68726ca7deffa41 fr_svg_28 fr-widget-hover-opacity-60 fr-link "
                                   data-id="61f9390ff68726ca7deffa41"
                                   href="<?php echo $icons['apg_link']; ?>"
                                   target="_blank">
                                    <div class="fr-svg-inner">
                                        <?php echo $icons['apg_icon']; ?>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div id="container_49" class="fr-widget fr-container fid-61fdab9e434844b07b0d2d6b fr_container_49 " data-id="61fdab9e434844b07b0d2d6b">
                    <div id="text_401" class="fr-widget fr-text fr-wf fr-richtext fid-61fd108b69b8ef7679879ce8 fr_bright_heading fr_text_401 " data-id="61fd108b69b8ef7679879ce8">
                        <div class="fr-text">
                            <h4><?php pll_e("apg_company_details_title"); ?></h4>
                        </div>
                    </div>
                    <div id="text_419" class="fr-widget fr-text fr-wf fr-richtext fid-61fda90e434844b07b0d2d3b fr-widget fr-text fr-wf fr-richtext fid-623c730342d1ffe4242e722b    fr_text_532 fr_text_bright
    
                                         " data-id="61fda90e434844b07b0d2d3b">
                        <div class="fr-text">
                            <p>
                                <?php pll_e("apg_company_details"); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="text_block_9"
            class="fr-widget fr-text fr-wf fr-richtext fr_text_block_9
            fr_text_dark_center">
                <div class="fr-text">
                    <p><?php pll_e("apg_copyright"); ?></p>
                </div>
            </div>
        </div>

    </div>
<?php endif;?>