<?php /* Template name: Home */ ?>
<?php get_header('front-page'); ?>
<?php include_once 'forms/questions-service-home-page-form.php'; ?>
<?php include_once 'forms/questions-course-home-page-form.php'; ?>
<?php include_once 'forms/custom-page-form-home-page.php'; ?>


<?php $first_content = get_field('apg_first_home_template_content'); ?>
    <div id="wrapper" class="fr-widget fr-container fid-621f2e05389429f3542a0a6e  fr_wrapper "
         data-id="621f2e05389429f3542a0a6e">
    <div id="first_slide" class="fr-widget fr-container fid-61f9340ee45c30b6a846e96c fr_first_slide "
         data-id="61f9340ee45c30b6a846e96c">
        <div id="hd4_container" class="fr-widget fr-container fid-61f9340ee45c30b6a846e972 fr_hd4_container fr-having-animation animated fadeIn
            " data-id="61f9340ee45c30b6a846e972" data-fr-animation="fadeIn" data-fr-animation-duration="1.5s"
             data-fr-animation-delay="0s">
            <div id="text_11"
                 class="fr-widget fr-text fr-wf fr-richtext fid-61f9340ee45c30b6a846e978 fr_text_11 fr_text_dark_right "
                 data-id="61f9340ee45c30b6a846e978">
                <div class="fr-text">
                    <h1><?php echo $first_content['apg_title']; ?></h1>
                </div>
            </div>
            <div id="text_425"
                 class="fr-widget fr-text fr-wf fr-richtext fid-620b8a1af776be1568b50e53 fr_text_dark_right fr_text_425 "
                 data-id="620b8a1af776be1568b50e53">
                <div class="fr-text">
                    <p><?php echo $first_content['apg_subtitle']; ?></p>
                </div>
            </div>
            <?php
            include('classes/ApgTrainingMenuWalker.php');
            wp_nav_menu(
                [
                    'theme_location' => 'training_menu',
                    'container' => 'div',
                    'container_id' => 'container_48',
                    'container_class' => 'fr-widget fr-container fid-61fda7df434844b07b0d2d09 fr_container_48 ',
                    'depth' => 1,
                    'items_wrap' => '<div class="fr-widget fr-container fr_container_49">%3$s</div>',
                    'walker' => new ApgTrainingMenuWalker
                ]
            );
            ?>
        </div>
    </div>
<?php $courses = get_field('apg_courses_section'); ?>
    <div id="courses" class="fr-widget fr-container fid-61fcf2838d5f56e8d3cbaf12  fr_courses "
         data-id="61fcf2838d5f56e8d3cbaf12">
        <div id="text_56" class="fr-widget fr-text fr-wf fr-richtext fid-61f935ece45c30b6a846ec32    fr_text_56 fr_text_bright_center
        " data-id="61f935ece45c30b6a846ec32">
            <div class="fr-text">
                <h2><?php echo($courses['apg_title']); ?></h2>
            </div>
        </div>
        <div id="container_52" class="fr-widget fr-container fid-620ba5fcf776be1568b50e60 fr_container_52 " data-id="620ba5fcf776be1568b50e60">
            <div id="gry4_4_column_grid" class="fr-widget fr-grid fid-61f935ece45c30b6a846ec34 fr_gry4_4_column_grid " data-id="61f935ece45c30b6a846ec34">
                <?php apgut_getCourses() ;?>
            </div>
        </div>
        <div id="container_53" class="fr-widget fr-container fid-620ba743f776be1568b50e64 fr_container_53 "
             data-id="620ba743f776be1568b50e64">
            <a id="button9" class="fr-widget fr-text fr-wf fid-620ba82ff776be1568b50e97  fr_button9
                fr-link " data-id="620ba82ff776be1568b50e97" href="<?php echo($courses['apg_link_all_courses']); ?>">
                <div class="fr-text">
                    <?php pll_e("apg_see_others_course"); ?>
                </div>
            </a>
            <a id="button4_7" class="fr-widget fr-text fr-wf fid-620ba833f776be1568b50ea3 fr_button4_7"
               data-id="620ba833f776be1568b50ea3">
                <div class="fr-text">
                    <?php pll_e("ask_question"); ?>
                </div>
                <script>
                    (function (window, document, $) {
                        'use strict';
                        $(this).click(function (event) {
                            $('#popup_bg_home_course').css('display', 'flex')
                        })
                    }).call(document.getElementsByClassName('fr_button4_7')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));

                </script>
            </a>
        </div>
    </div>
<?php $services = get_field('apg_services_section'); ?>
    <div id="projects" class="fr-widget fr-container fid-61fcf3fa8d5f56e8d3cbaf16    fr_projects "
         data-id="61fcf3fa8d5f56e8d3cbaf16">
        <div id="text_378"
             class="fr-widget fr-text fr-wf fr-richtext fid-61fa9b10c1999522463df83d    fr_text_bright_center fr_text_378 "
             data-id="61fa9b10c1999522463df83d">
            <div class="fr-text">
                <h2><?php echo $services['apg_title']; ?></h2>
            </div>
        </div>
        <div id="container_54"
             class="fr-widget fr-container fid-620ba98ef776be1568b50eba    fr_container_54 fr-having-animation animated fadeInLeft "
             data-id="620ba98ef776be1568b50eba" data-fr-animation="fadeInLeft" data-fr-animation-duration="1s"
             data-fr-animation-delay="0s">
            <div id="gry4_4_column_grid_2"
                 class="fr-widget   fr-grid fid-61fa9b10c1999522463df83f    fr_gry4_4_column_grid_2 "
                 data-id="61fa9b10c1999522463df83f">
                <?php apgut_getServices() ;?>
            </div>
            <div id="container_55" class="fr-widget fr-container fid-620ba9bbf776be1568b50ebe    fr_container_55 "
                 data-id="620ba9bbf776be1568b50ebe">
                <a id="button9_3" class="fr-widget fr-text fr-wf fid-620ba9e3f776be1568b50ec2  fr_button9_3 fr-link "
                   data-id="620ba9e3f776be1568b50ec2"
                   href="<?php echo($services['apg_link_all_services']); ?>">
                    <div class="fr-text">
                        <?php pll_e("apg_see_others_services"); ?>
                    </div>
                </a>
                <a id="button9_5" class="fr-widget fr-text fr-wf fid-62162d6e35c52e1129633956 fr_button9_5">
                    <div class="fr-text">
                        <?php pll_e("ask_question"); ?>
                    </div>
                    <script>
                        (function (window, document, $) {
                            'use strict';
                            $(this).click(function (event) {
                                $('#popup_bg_home_service').css('display', 'flex')
                            })
                        }).call(document.getElementsByClassName('fr_button9_5')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                    </script>
                </a>
            </div>
        </div>
    </div>
<?php $apg_benefits_section = get_field('apg_benefits_section'); ?>
    <div id="benefits" class="fr-widget fr-container fid-61fcf50a8d5f56e8d3cbaf1e fr_benefits "
         data-id="61fcf50a8d5f56e8d3cbaf1e">
        <div id="group_container_4" class="fr-widget fr-container fid-61f936c5e45c30b6a846eda9 fr_group_container_4 "
             data-id="61f936c5e45c30b6a846eda9">
            <?php if (is_array(($apg_benefits_section['apg_benefits']))) : ?>
                <?php foreach ($apg_benefits_section['apg_benefits'] as $benefits) : ?>
                    <div id="grid_13" class="fr-widget fr-grid fid-61f936c5e45c30b6a846edb3 fr_grid_13 "
                         data-id="61f936c5e45c30b6a846edb3">
                        <div id="image_container_13"
                             class="fr-widget fr-container fid-61f936c5e45c30b6a846edc4 fr_image_container_13 "
                             data-id="61f936c5e45c30b6a846edc4">
                            <div id="volume_up_icon_13"
                                 class="fr-widget fr-svg fid-61f936c5e45c30b6a846edca  fr_volume_up_icon_13 fr_icon_dark "
                                 data-id="61f936c5e45c30b6a846edca">
                                <div class="fr-svg-inner">
                                    <?php echo $benefits['apg_icon']; ?>
                                </div>
                            </div>
                        </div>
                        <div id="container_42"
                             class="fr-widget fr-container fid-61fce951926bd87355c0fe37 fr_container_42 "
                             data-id="61fce951926bd87355c0fe37">
                            <div id="text_385"
                                 class="fr-widget fr-text fr-wf fr-richtext fid-61fce94c926bd87355c0fe2e    fr_text_dark_left fr_text_385 "
                                 data-id="61fce94c926bd87355c0fe2e">
                                <div class="fr-text">
                                    <h5><?php echo $benefits['apg_title']; ?></h5>
                                </div>
                            </div>
                            <div id="text_193"
                                 class="fr-widget fr-text fr-wf fr-richtext fid-61f936c5e45c30b6a846edc6 fr_text_193 fr_text_dark_left "
                                 data-id="61f936c5e45c30b6a846edc6">
                                <div class="fr-text">
                                    <p><?php echo $benefits['apg_script']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
            <?php endif; ?>
        </div>
        <div id="action_container" class="fr-widget fr-container fid-61f936c5e45c30b6a846edab fr_action_container "
             data-id="61f936c5e45c30b6a846edab">
            <div id="container_35" class="fr-widget fr-container fid-61f936c5e45c30b6a846ee3f fr_container_35 "
                 data-id="61f936c5e45c30b6a846ee3f">
                <div id="text_197"
                     class="fr-widget fr-text fr-wf fr-richtext fid-61f936c5e45c30b6a846ee43 fr_text_bright_center fr_text_197 "
                     data-id="61f936c5e45c30b6a846ee43">
                    <div class="fr-text">
                        <h3><?php pll_e("apg_benefits_title"); ?></h3>
                    </div>
                </div>
                <a id="text_198"
                   class="fr-widget fr-text fr-wf fid-61f936c5e45c30b6a846ee45 fr_text_198 fr_button9_7 fr_button_fill_blue_centered fr-link "
                   data-id="61f936c5e45c30b6a846ee45"
                   data-fr-popup-align="center">
                    <div class="fr-text">
                        <?php pll_e("apg_benefits_form_submit"); ?>
                    </div>
                    <script>
                        (function (window, document, $) {
                            'use strict';
                            $(this).click(function (event) {
                                $('#form_home_page').css('display', 'flex')
                            })
                        }).call(document.getElementsByClassName('fr_button9_7')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                    </script>
                </a>
            </div>
        </div>
    </div>
<?php $services_provided_section = get_field('apg_services_provided_section'); ?>
    <div id="services" class="fr-widget fr-container fid-61fcf4848d5f56e8d3cbaf1a fr_services "
         data-id="61fcf4848d5f56e8d3cbaf1a">
        <div id="text_205"
             class="fr-widget fr-text fr-wf fr-richtext fid-61f936b3e45c30b6a846ecf8 fr_text_205 fr_text_dark_center "
             data-id="61f936b3e45c30b6a846ecf8">
            <div class="fr-text">
                <h2><?php echo($services_provided_section['apg_title']); ?> </h2>
            </div>
        </div>
        <div id="gry1_3_column_images_4"
             class="fr-widget fr-grid fid-61f936b3e45c30b6a846ecfa  fr_gry1_3_column_images_4 fr-having-animation animated fadeInUp "
             data-fr-animation="fadeInUp"
             data-fr-animation-duration="1.5s" data-fr-animation-delay="0s">
            <?php if (is_array(($services_provided_section['apg_services_content']))) : ?>
                <?php foreach ($services_provided_section['apg_services_content'] as $services_content) : ?>
                    <div id="gry1_image_one_4"
                         class="fr-widget fr-container fid-61f936b3e45c30b6a846ed2b fr_gry1_image_one_4 "
                         data-id="61f936b3e45c30b6a846ed2b">
                        <div id="container_28"
                             class="fr-widget fr-container fid-61f936b3e45c30b6a846ed35 fr_container_28 "
                             data-id="61f936b3e45c30b6a846ed35">
                            <div id="image_42" class="fr-widget fr-svg fid-61f936b3e45c30b6a846ed3b fr_image_42 fr_icon_dark_center fr-widget-hover-opacity-60
                                    " data-id="61f936b3e45c30b6a846ed3b">
                                <div class="fr-svg-inner">
                                    <?php echo $services_content['apg_icon']; ?>
                                </div>
                            </div>
                        </div>
                        <div id="text_206"
                             class="fr-widget fr-text fr-wf fr-richtext fid-61f936b3e45c30b6a846ed37 fr_text_206 fr_text_accent_center "
                             data-id="61f936b3e45c30b6a846ed37">
                            <div class="fr-text">
                                <h4><?php echo $services_content['apg_title']; ?></h4>
                            </div>
                        </div>
                        <div id="text_386"
                             class="fr-widget fr-text fr-wf fr-richtext fid-61fce9b0926bd87355c0fe3e fr_text_dark_center fr_text_386 "
                             data-id="61fce9b0926bd87355c0fe3e">
                            <div class="fr-text">
                                <p><?php echo $services_content['apg_script']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
            <?php endif; ?>
        </div>
    </div>
    <div id="text__bg_overlay__button"
         class="fr-widget fr-container fid-61fcfc5f8d5f56e8d3cbafc7 fr_text__bg_overlay__button">
        <div id="text_65"
             class="fr-widget fr-text fr-wf fr-richtext fid-61fcfc5f8d5f56e8d3cbafcb    fr_text_bright_center fr_text_65">
            <div class="fr-text">
                <h2><?php pll_e("apg_red_email_field_title"); ?></h2>
            </div>
        </div>
        <a id="button_54"
           class="fr-widget fr-text fr-wf fid-61fcfc5f8d5f56e8d3cbafcd fr_button_54 fr_button_border_white fr-widget-hover-opacity-60 fr-link"
           href="mailto:info@penge.lv?subject=Pieteikums no mājaslapas" data-fr-popup-align="center">
            <div class="fr-text">
                <?php pll_e("apg_red_email_field_submit"); ?>
            </div>
        </a>
    </div>
<?php $show_hide = get_field('apg_our_customers_hide_or_show'); ?>
<?php $customers = get_field('apg_our_customers'); ?>
<?php if ($show_hide === true) : ?>
    <div id="clients" class="fr-widget fr-container fid-61fcf8258d5f56e8d3cbaf22 fr_clients "
         data-id="61fcf8258d5f56e8d3cbaf22">
        <div id="text_28"
             class="fr-widget fr-text fr-wf fr-richtext fid-61f937eae45c30b6a846ee83 fr_text_28 fr_text_large_dark_center "
             data-id="61f937eae45c30b6a846ee83">
            <div class="fr-text">
                <h3><?php echo $customers['apg_title']; ?></h3>
            </div>
        </div>
        <div id="grid" class="fr-widget fr-grid fid-61f937a4e45c30b6a846ee64 fr_grid "
             data-id="61f937a4e45c30b6a846ee64">
            <?php if (is_array(($customers['apg_customer_logo']))) : ?>
                <?php foreach ($customers['apg_customer_logo'] as $customer_logo) : ?>
                    <a href="<?php echo $customer_logo['apg_affilate_link']; ?>" target="_blank" id="image_89"
                       class="fr-widget fr-img fid-61f93866f68726ca7deff965 fr_image_89 fr-link "
                       data-id="61f93866f68726ca7deff965" data-fr-popup-align="center">
                        <img src="<?php echo $customer_logo['apg_logo']; ?>" alt="Customer Logo">
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>