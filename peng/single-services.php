<?php get_header(); ?>
<?php include 'forms/single-pages-forms/service/service-form-top.php'; ?>
<?php include 'forms/single-pages-forms/service/service-form-bottom-register.php'; ?>
<?php include 'forms/single-pages-forms/service/service-form-bottom-apply.php'; ?>
    <div id="hero_solid_bg__video__text_right"
         class="fr-widget fr-container fid-621c7ea966db03310568ab9a fr_hero_solid_bg__video__text_right_4 "
         data-id="621c7ea966db03310568ab9a">
        <div id="hd5_content_4" class="fr-widget fr-container fid-621c7ea966db03310568abe3 fr_hd5_content_4 "
             data-id="621c7ea966db03310568abe3">
            <div id="grid_2" class="fr-widget fr-grid fid-621c7ea966db03310568abe9 fr_grid_2 "
                 data-id="621c7ea966db03310568abe9">
                <div id="vimeo_video_2" class="fr-widget fr-video fr-wf fid-621c7ea966db03310568abf4 fr_vimeo_video_2 "
                     data-id="621c7ea966db03310568abf4">
                    <?php $thumbnail = get_the_post_thumbnail_url(get_the_ID(), [421, 230]); ?>
                    <div class="fr-video-inner">
                        <?php if (!empty(get_field('apg_video', get_the_ID()))) : ?>
                            <iframe src="<?= get_field('apg_video', get_the_ID()); ?>" width="500" height="281"
                                    frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                    allowfullscreen=""></iframe>
                        <?php elseif ($thumbnail) : ?>
                            <img style="height: 230px" src="<?= $thumbnail; ?>"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="container_22" class="fr-widget fr-container fid-621c7ea966db03310568abf6 fr_container_22 "
                     data-id="621c7ea966db03310568abf6">
                    <div id="text_174" class="fr-widget fr-text fr-wf fr-richtext fid-621c7ea966db03310568abff fr_text_bright_left fr_text_174 fr-having-animation animated fadeInDown
                      " data-id="621c7ea966db03310568abff" data-fr-animation="fadeInDown"
                         data-fr-animation-duration="1.5s"
                         data-fr-animation-delay="0s">
                        <div class="fr-text">
                            <h1><?php the_title() ?></h1>
                        </div>
                    </div>
                    <a id="text_173"
                       class="fr-widget fr-text fr-wf fid-621c7ea966db03310568ac01 fr_button_fill_black fr_text_173 fr-link fr-having-animation animated fadeInUp"
                       href="#"
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
                                    $('#popup_bg_single_page_service_top').css('display', 'flex')
                                })
                            }).call(document.getElementsByClassName('fr_text_173')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="text_heading__2_columns__anchors"
         class="fr-widget fr-container fid-621c7ea966db03310568ab9c fr_text_heading__2_columns__anchors "
         data-id="621c7ea966db03310568ab9c">
        <div id="text_62"
             class="fr-widget fr-text fr-wf fr-richtext fid-621c7ea966db03310568ac1a fr_text_large_dark_center fr_text_62 "
             data-id="621c7ea966db03310568ac1a">
            <div class="fr-text">
                <p><?php echo get_field('apg_content_title'); ?></p>
            </div>
        </div>
        <div id="c14_container" class="fr-widget fr-container fid-621c7ea966db03310568ac16 fr_c14_container "
             data-id="621c7ea966db03310568ac16">
            <?php if( get_field('apg_service_time_plan') ): ?>
                <div id="container_89" class="fr-widget fr-container fid-623bfccf82d82fabad44fe8f fr_container_89 "
                    data-id="623bfccf82d82fabad44fe8f">
                    <div id="c14_line_two_4" class="fr-widget fr-container fid-623bfe5182d82fabad44fe93 fr_c14_line_two_4 "
                        data-id="623bfe5182d82fabad44fe93">
                    </div>
                    <div id="text_64"
                        class="fr-widget fr-text fr-wf fr-richtext fid-621c7ea966db03310568ac53 fr_text_dark_left fr_text_64 "
                        data-id="621c7ea966db03310568ac53">
                        <div class="fr-text">
                            <?php echo the_field('apg_service_time_plan'); ?>
                        </div>
                    </div>
                </div>
            <?php endif ;?>
            <div id="c14_text" class="fr-widget fr-container fid-621c7ea966db03310568ac3a fr_c14_text "
                 data-id="621c7ea966db03310568ac3a">
                <div id="c14_line_two" class="fr-widget fr-container fid-621c7ea966db03310568ac51 fr_c14_line_two "
                     data-id="621c7ea966db03310568ac51">
                </div>
                <div  id="text_624"
                           class="fr-widget fr-text fr-wf fr-richtext fid-6242ecf322691b99b3f3976e    fr_text_dark_left fr_text_624">
                    <div class="fr-text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div id="container_95" class="fr-widget fr-container fid-623c3aa382301952ab651249 fr_container_95 "
                     data-id="623c3aa382301952ab651249">
                    <a id="text_490" class="fr-widget fr-text fr-wf fid-623c3a0082301952ab651233 fr_button_fill_black fr_text_490 fr-link fr-having-animation animated fadeInUp
                          " data-id="623c3a0082301952ab651233" href="#"
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
                                    $('#popup_bg_single_page_service_bottom_register').css('display', 'flex')
                                })
                            }).call(document.getElementsByClassName('fr_text_490')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </a>

                    <a id="text_491"
                       class="fr-widget fr-text fr-wf fid-623c3a2d82301952ab65123b fr_text_491 fr_btn_stretched fr-link fr-having-animation animated fadeInUp "
                       data-id="623c3a2d82301952ab65123b" href="#"
                       data-fr-popup-align="center"
                       data-fr-animation="fadeInUp"
                       data-fr-animation-duration="1.5s"
                       data-fr-animation-delay="0.5s">
                        <div class="fr-text">
                            <?php pll_e("apply_for_consultation"); ?>
                        </div>
                        <script>
                            (function (window, document, $) {
                                'use strict';
                                $(this).click(function (event) {
                                    event.preventDefault()
                                    $('#popup_bg_single_page_service_bottom_apply').css('display', 'flex')
                                })
                            }).call(document.getElementsByClassName('fr_text_491')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $show_hide_lecture_service_information = get_field('apg_service_lecture_information_hide_or_show'); ?>
<?php $service_lecturer = get_field('apg_service_lecturer_information'); ?>
<?php if ($show_hide_lecture_service_information === true) : ?>
    <div id="container_96" class="fr-widget fr-container fid-623c3d8d10beb0a255f1b304    fr_container_96 "
         data-id="623c3d8d10beb0a255f1b304">
        <div id="lecturer" class="fr-widget fr-container fid-621c7ea966db03310568ac9d    fr_lecturer "
             data-id="621c7ea966db03310568ac9d">
            <div id="text_85"
                 class="fr-widget fr-text fr-wf fr-richtext fid-621c7ea966db03310568aca1    fr_text_bright_center fr_text_85 "
                 data-id="621c7ea966db03310568aca1">
                <div class="fr-text">
                    <h2><?php echo $service_lecturer['apg_title']; ?></h2>
                </div>
            </div>
            <div id="grid_17" class="fr-widget   fr-grid fid-621c7ea966db03310568aca3    fr_grid_17 "
                 data-id="621c7ea966db03310568aca3">
                <div id="container_50"
                     class="fr-widget fr-container fid-621c7ea966db03310568acb9    fr_container_50 "
                     data-id="621c7ea966db03310568acb9">
                    <div id="image_2" class="fr-widget fr-img fid-621c7ea966db03310568acbf    fr_image_2 "
                         data-id="621c7ea966db03310568acbf">
                        <img src="<?php echo $service_lecturer['apg_lecture_image']; ?>"/>
                    </div>
                    <div id="text_block_6" class="fr-widget fr-text fr-wf fr-richtext fid-621c7ea966db03310568acd5    fr_bright_heading fr_text_block_6
                        " data-id="621c7ea966db03310568acd5">
                        <div class="fr-text">
                            <h2><?php echo $service_lecturer['apg_lecture_name']; ?></h2>
                        </div>
                    </div>
                </div>
                <div id="container_51"
                     class="fr-widget fr-container fid-621c7ea966db03310568acbb    fr_container_51 "
                     data-id="621c7ea966db03310568acbb">
                    <div id="text_block_5" class="fr-widget fr-text fr-wf fr-richtext fid-621c7ea966db03310568acd1    fr_text_532 fr_text_bright
                    " data-id="621c7ea966db03310568acd1">
                        <div class="fr-text">
                            <p><?php echo $service_lecturer['apg_title_script']; ?></p>
                        </div>
                    </div>
                    <a id="linkedin_square_icon"
                       class="fr-widget fr-svg fid-621c7ea966db03310568acd3    fr_linkedin_square_icon fr-link  "
                       data-id="621c7ea966db03310568acd3"
                       href="<?php echo $service_lecturer['apg_affiliate_link']; ?>"
                       data-fr-popup-align="center" target="_blank">
                        <div class="fr-svg-inner">
                            <svg width="1536" height="1536" viewBox="128 128 1536 1536"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M365 1414h231v-694h-231v694zm246-908q-1-52-36-86t-93-34-94.5 34-36.5 86q0 51 35.5 85.5t92.5 34.5h1q59 0 95-34.5t36-85.5zm585 908h231v-398q0-154-73-233t-193-79q-136 0-209 117h2v-101h-231q3 66 0 694h231v-388q0-38 7-56 15-35 45-59.5t74-24.5q116 0 116 157v371zm468-998v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path>
                            </svg>
                        </div>
                    </a>
                    <div id="text_block_6" class="fr-widget fr-text fr-wf fr-richtext fid-621c7ea966db03310568acd5    fr_bright_heading fr_text_block_6
                        " data-id="621c7ea966db03310568acd5">
                        <div class="fr-text">
                            <h4><?php pll_e("apg_lecture_experience"); ?></h4>
                        </div>
                    </div>
                    <div id="grid_18" class="fr-widget   fr-grid fid-621c7ea966db03310568acd7 fr_grid_18 ">
                        <?php
                        if (is_array(($service_lecturer['apg_lecture_experience']))) :
                            $item_count = count($service_lecturer['apg_lecture_experience']);
                            $item_count_mod = $item_count % 2;

                            $half_array_count = ($item_count - $item_count_mod) / 2;

                            $start_with = 0;

                            for ($i = 0; $i < 2; $i++) :
                                if ($i == 0) {
                                    $column_count = $half_array_count + $item_count_mod;
                                } else {
                                    $start_with = $column_count;
                                    $column_count = $half_array_count;
                                }

                                ?>
                                <div id="html"
                                     class="fr-widget fr-html fr-wf fid-621c7ea966db03310568acff    fr_html "
                                     data-id="621c7ea966db03310568acff">
                                    <style>
                                        .apg-company {
                                            display: block;
                                        }
                                    </style>
                                    <ul>
                                        <?php for ($key = 0; $key < $column_count; $key++) :
                                            $item = $service_lecturer['apg_lecture_experience'][$start_with + $key];
                                            ?>
                                            <li>
                                                <b class="apg-company"><?php echo $item['apg_workplace']; ?></b><?php echo $item['apg_experience_length']; ?>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            <?php
                            endfor;
                        endif;
                        ?>
                    </div>
                    <div id="text_block_8"
                         class="fr-widget fr-text fr-wf fr-richtext fid-621c7ea966db03310568acd9    fr_bright_heading fr_text_block_8 "
                         data-id="621c7ea966db03310568acd9">
                        <div class="fr-text">
                            <h4><?php pll_e("apg_lecture_achievements"); ?></h4>
                        </div>
                    </div>
                    <div class="fr-widget   fr-grid fid-621c7ea966db03310568acdb    fr_grid_19 ">
                        <?php
                        if (is_array(($service_lecturer['apg_achievements']))) :
                            $item_count = count($service_lecturer['apg_achievements']);
                            $item_count_mod = $item_count % 2;

                            $half_array_count = ($item_count - $item_count_mod) / 2;

                            $start_with = 0;

                            for ($i = 0; $i < 2; $i++) :
                                if ($i == 0) {
                                    $column_count = $half_array_count + $item_count_mod;
                                } else {
                                    $start_with = $column_count;
                                    $column_count = $half_array_count;
                                }
                                ?>
                                <div class="fr-widget fr-html fr-wf fid-621c7ea966db03310568ad1a    fr_html_3 ">
                                    <style>
                                        .apg-company {
                                            display: block;
                                        }
                                    </style>
                                    <ul>
                                        <?php for ($key = 0; $key < $column_count; $key++) :
                                            $item = $service_lecturer['apg_achievements'][$start_with + $key];
                                            ?>
                                            <li><?php echo $item['apg_lecture_experience_achievements']; ?></li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            <?php
                            endfor;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
    </div>
<?php get_footer(); ?>