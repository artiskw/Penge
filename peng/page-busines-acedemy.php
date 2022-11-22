<?php /* Template name: Academy */ ?>
<?php get_header(); ?>
<?php include 'forms/questions-page-acedemy-form.php'; ?>
<?php $first_content_academy = get_field('apg_first_academy_template_content'); ?>
    <div id="hero_solid_bg__video__text_right_6" class="fr-widget fr-container fid-62567502a69293235eeb7a3b fr_hero_solid_bg__video__text_right_6">
    <div id="hd5_content_9" class="fr-widget fr-container fid-62567502a69293235eeb7acd fr_hd5_content_9">
        <div id="grid_30" class="fr-widget fr-grid fid-62567502a69293235eeb7ad3 fr_grid_30">
            <div id="vimeo_video_6" class="fr-widget fr-video fr-wf fid-62567502a69293235eeb7ade    fr_vimeo_video_6">
                <div class="fr-video-inner">
                    <?php if (!empty($first_content_academy['apg_video'])) : ?>
                        <iframe src="<?php echo $first_content_academy['apg_video']; ?>" width="500" height="281"
                                frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                allowfullscreen=""></iframe>
                    <?php else : ?>
                        <img style="height: 230px" src="<?php echo $first_content_academy['apg_image']; ?>"/>
                    <?php endif; ?>
                </div>
            </div>
            <div id="container_184" class="fr-widget fr-container fid-62567502a69293235eeb7ae0 fr_container_184">
                <div id="text_643" class="fr-widget fr-text fr-wf fr-richtext fid-62567502a69293235eeb7ae9 fr_text_bright_left fr_text_643 fr-having-animation animated fadeInDown
                        " data-fr-animation="fadeInDown"
                        data-fr-animation-duration="1.5s"
                        data-fr-animation-delay="0s">
                    <div class="fr-text">
                        <h1><?php echo $first_content_academy['apg_title']; ?></h1>
                    </div>
                </div>
                <a id="text_644" class="fr-widget fr-text fr-wf fid-62567502a69293235eeb7aeb fr_button_fill_black fr_text_644 fr-link fr-having-animation animated fadeInUp
                      " data-id="62567502a69293235eeb7aeb" href="#"
                        data-fr-popup-align="center"
                        data-fr-animation="fadeInUp"
                        data-fr-animation-duration="1.5s"
                        data-fr-animation-delay="0.5s">
                    <div class="fr-text">
                        <?php pll_e("apg_button_register_course"); ?>
                    </div>
                    <script>
                        (function (window, document, $) {
                            'use strict';
                            $(this).click(function (event) {
                                event.preventDefault()
                                $('#popup_bg_acedemy_page').css('display', 'flex')
                            })
                        }).call(document.getElementsByClassName('fr_text_644')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                    </script>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="container_197" class="fr-widget fr-container fid-62616ae953fa8d05450bc58d    fr_container_197
    
                                    " data-id="62616ae953fa8d05450bc58d">
    <div id="text_block_61" class="fr-widget fr-text fr-wf fr-richtext fid-62616ae953fa8d05450bc593    fr_text_block_61
    
                                    " data-id="62616ae953fa8d05450bc593">
        <div class="fr-text">
            <?php the_content(); ?>
        </div>

    </div>


</div>
<?php get_footer(); ?>