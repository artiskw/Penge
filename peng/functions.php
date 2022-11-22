<?php
//Register style
function apg_register_styles() {
    wp_enqueue_style('base-style', get_stylesheet_directory_uri() . "/css/base.620bd118.css", array(), 'all');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . "/css/style.620bd118.css", array(), 'all');
    //wp_enqueue_style('front-style', get_stylesheet_directory_uri() . "/style.css", array(), 'all');
    wp_enqueue_style('purl',  "//purl.org/dc\/elements/1.1/", array(), 'all');
}

add_action('wp_enqueue_scripts', 'apg_register_styles');

//Register js
function apg_register_scripts() {
    wp_enqueue_script('jquery3', get_stylesheet_directory_uri(). "/assets/gen/jquery3.82fc27b.js", array(), true);
    wp_enqueue_script('waypoints', get_stylesheet_directory_uri(). "/assets/gen/jquery.waypoints.2a5bb99.js", array(), true);
    wp_enqueue_script('magnific-popup', get_stylesheet_directory_uri(). "/assets/gen/jquery.magnific-popup.2a5bb99.js", array(), true);
    wp_enqueue_script('responsive-nav', get_stylesheet_directory_uri(). "/assets/js/responsive-nav.js", array(), true);
    wp_enqueue_script('swiper', get_stylesheet_directory_uri(). "/assets/gen/swiper.2a5bb99.js", array(), true);
    wp_enqueue_script('froont-namespace', get_stylesheet_directory_uri(). "/assets/js/froont-namespace.js", array(), true);
    wp_enqueue_script('polyfills', get_stylesheet_directory_uri(). "/assets/js/polyfills.js", array(), true);
    wp_enqueue_script('external-api', get_stylesheet_directory_uri(). "/assets/js/external-api.js", array(), true);
    wp_enqueue_script('helpers', get_stylesheet_directory_uri(). "/assets/js/helpers.js", array(), true);
    wp_enqueue_script('form-submit', get_stylesheet_directory_uri(). "/assets/js/form-submit.js", array(), true);
    wp_enqueue_script('popup', get_stylesheet_directory_uri(). "/assets/js/popup.js", array(), true);
    wp_enqueue_script('reveal-animation', get_stylesheet_directory_uri(). "/assets/js/reveal-animation.js", array(), true);
    wp_enqueue_script('bg-videos', get_stylesheet_directory_uri(). "/assets/js/bg-videos.js", array(), true);
    wp_enqueue_script('background-parallax', get_stylesheet_directory_uri(). "/assets/js/background-parallax.js", array(), true);
    wp_enqueue_script('grid-gallery', get_stylesheet_directory_uri(). "/assets/js/grid-gallery.js", array(), true);
    wp_enqueue_script('page-script', get_stylesheet_directory_uri(). "/assets/js/page-script.js", array(), true);
    wp_enqueue_script('scroll-effects', get_stylesheet_directory_uri(). "/assets/js/scroll-effects.js", array(), true);
    wp_enqueue_script('webfontloader', get_stylesheet_directory_uri(). "/assets/gen/webfontloader.8a88022.js", array(), true);
    wp_enqueue_script('fontloader', get_template_directory_uri(). "/assets/js/fontloader.js", array(), true);
    wp_enqueue_script('apg_script', get_template_directory_uri(). "/apg_script.js", array(), true, true);
}

add_action('wp_enqueue_scripts', 'apg_register_scripts');

//Theme Support
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Hide admin bar
show_admin_bar(false);

// Register  Menu
if (!function_exists('apg_menu_register')) {

    function apg_menu_register()
    {
        register_nav_menus([
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'top_menu' => __('Top Menu', 'text_domain'),
            'training_menu' => __('Training Menu', 'text_domain'),

        ]);
    }

    add_action('after_setup_theme', 'apg_menu_register', 0);
}

// Languages -> Strings translations
if (function_exists('pll_register_string')) {
    //Home - Course button//
    pll_register_string('SEE ALL COURSES', 'apg_see_others_course', 'Home', false); //1.name 2. String. 3. Group
    pll_register_string('ASK QUESTION', 'ask_question', 'Home', false);
    //Home(Footer) - Copyright//
    pll_register_string('Copyright penge.lv', 'apg_copyright', 'Footer', false);
    //Home - Services button//
    pll_register_string('SEE ALL SERVICES', 'apg_see_others_services', 'Home', true);
    //Home - Benefits section, right container//
    pll_register_string('Penge - your assistant in the financial fields', 'apg_benefits_title', 'Home', true);
    pll_register_string('APPLY', 'apg_benefits_form_submit', 'Home', true);
    //Home - Red email field Home Page//
    pll_register_string('Become our next customer', 'apg_red_email_field_title', 'Home', true);
    pll_register_string('APPLY', 'apg_red_email_field_submit', 'Home', true);
    //Footer//
    pll_register_string('Company Details', 'apg_company_details_title', 'footer', true);
    pll_register_string('Privacy Policy', 'apg_privacy_policy', 'footer', true);


    pll_register_string('Follow us', 'apg_follow_us', 'footer', true);
    //Form input field//
    pll_register_string('Name', 'apg_form_name', 'form', true);
    pll_register_string('Email', 'apg_form_email', 'form', true);
    pll_register_string('Message', 'apg_form_placeholder_message', 'form', true);
    pll_register_string('SEND TO', 'apg_form_submit', 'form', true);
    pll_register_string('Thank you!', 'apg_success_form_submit_title', 'form', true);
    pll_register_string('Form has been successfully sent!', 'apg_success_form_submit', 'form', true);
    pll_register_string('Error', 'apg_error_form_submit_title', 'form', true);
    pll_register_string('There have been an error, while sending the message', 'apg_error_form_submit', 'form', true);

    //Form   All Courses //
    pll_register_string('Send us a request for new courses', 'apg_courses_form_title', 'Form courses', true);
    //Single page lecture Experience and Achievements   //
    pll_register_string('Experience', 'apg_lecture_experience', 'Single page lecture Experience', true);
    pll_register_string('Achievements', 'apg_lecture_achievements', 'Single page lecture Achievements', true);
    //Single page   2 button ->  //
    pll_register_string('REGISTER', 'apg_button_register_course', 'Single page', true);
    pll_register_string('REGISTER', 'apg_button_register_service', 'Single page', true);
    pll_register_string('REGISTER', 'apg_top_button_register_service', 'Single page', true);

    pll_register_string('REGISTER', 'apg_button_register_lang_course', 'Single page', true);
    pll_register_string('APPLY FOR CONSULTATION', 'apply_for_consultation', 'Single page', true);

    //Single page Language
    pll_register_string('APPLY FOR GROUP', 'apply_group_course', 'Single page', true);
    pll_register_string('APPLY FOR INDIVIDUAL COURSE', 'apply_individual_course', 'Single page', true);

    //Form Title
    pll_register_string('Ask a question Archive home course', 'form_title_archive_home_course', '', true);
    pll_register_string('Ask a question Archive home service', 'form_title_archive_home_service', '', true);
    pll_register_string('Ask a question Archive service', 'form_title_archive_service', '', true);
    pll_register_string('Ask a question Archive course', 'form_title_archive_course', '', true);
    pll_register_string('Ask a question Lang', 'form_title_archive_lang', '', true);
    pll_register_string('Ask a question', 'form_title_page_acedemy', '', true);
    //---------single Course----------
    pll_register_string('Ask a question Single top Course', 'form_title_single_course_top', '', true);
    pll_register_string('Ask a question Single bottom Course Register', 'form_title_single_course_bottom_register', '', true);
    pll_register_string('Ask a question Single bottom Course Register Apply', 'form_title_single_course_bottom_apply', '', true);
    //---------single Lang----------
    pll_register_string('Ask a questionSingle top Lang', 'form_title_single_lang_top', '', true);
    pll_register_string('Ask a question Single bottom Lang Register', 'form_title_single_lang_bottom_register', '', true);
    pll_register_string('Ask a question Single bottom Lang Register Apply', 'form_title_single_lang_bottom_apply', '', true);
    //---------single Service----------
    pll_register_string('Ask a question Single top Service', 'form_title_single_service_top', '', true);
    pll_register_string('Ask a question Single bottom Service Register', 'form_title_single_service_bottom_register', '', true);
    pll_register_string('Ask a question Single bottom Service Register Apply', 'form_title_single_service_bottom_apply', '', true);

    pll_register_string(
        'Client name:  %1$s
Client email: %2$s
Client message:
%3$s

form_id: %4$s',
        'apg_email_message',
        'form',
        true
    );
    pll_register_string(
        'Dear  %1$s
Thank you for contacting us. We will get back to you shortly!

You submitted the following message:
%2$s

Regards,
Penge',
        'apg_email_client_message',
        'form',
        true
    );
    pll_register_string(
        'Confirmation: Message was submitted successfully | Penge',
        'apg_email_client_subject',
        'form',
        true
    );

    pll_register_string('Learn in a group', 'apg_form_course_group', 'form', true);
    pll_register_string('Learn individually', 'apg_form_course_individual', 'form', true);
    pll_register_string('For businesses', 'apg_form_course_business', 'form', true);
    pll_register_string('price on agreement', 'apg_form_course_business_price', 'form', true);

    pll_register_string(
        'LLC „Penge”
Reg. Nr. 40203328027
Bank: AS „Swedbank”
Bank code: HABALV22
Bank account.:
LV33HABA0551051112409',
        'apg_company_details',
        'footer',
        true
    );
}

// Courses post type Courses
function create_posttype() {

    register_post_type('courses',
        array(
            'labels' => array(
                'name' => __('Courses'),
                'singular_name' => __('Courses')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'courses'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')

        )

    );
}

add_action('init', 'create_posttype');

// Courses post type Services
function create_posttype_second() {

    register_post_type('services',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Services')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')

        )

    );
}

add_action('init', 'create_posttype_second');

// Courses post type valodas
function create_posttype_third() {

    register_post_type('lang_courses',
        array(
            'labels' => array(
                'name' => __('Lang Courses'),
                'singular_name' => __('Lang Course')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'lang_courses'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')

        )

    );
}

add_action('init', 'create_posttype_third');

//Recent post type 4 Language courses & Courses - Home page
function apgut_getCourses() {

    $number = 0;

    remove_all_filters('posts_orderby');


    $courses = new WP_Query([
        'post_type' => ['courses'],
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'orderby' => 'meta_value',
        'meta_key' => 'apg_date',
        'order' => 'DESC',

    ]);
    if ($courses->have_posts()) {
        while ($courses->have_posts()) {
            $courses->the_post();
            ?>
            <div id="gry<?php echo ++$number; ?>_one" class="fr-widget fr-container fid-61f935ece45c30b6a846ec65 fr_gry4_one fr-having-animation animated fadeInLeft
                 " data-id="61f935ece45c30b6a846ec65" data-fr-animation="fadeInLeft"
                 data-fr-animation-duration="1s"
                 data-fr-animation-delay="0s">
                <?php $thumbnail = get_the_post_thumbnail_url($courses->ID, [350, 350]); ?>
                <?php if (!empty(get_field('apg_video', $courses->ID))) : ?>
                    <div id="gry4_image_three_2"
                         class="fr-widget fr-container fid-61f93632e45c30b6a846ecea fr_gry4_image_three_2">
                        <div id="youtube_video"
                             class="fr-widget fr-video fr-wf fid-61faa598926bd87355c0fe09 fr_youtube_video">
                            <div class="fr-video-inner">
                                <iframe
                                        style="height:230px" src="<?= get_field('apg_video', $courses->ID); ?>"
                                        frameborder="0" allowfullscreen="">
                                </iframe>
                            </div>
                        </div>
                    </div>
                <?php elseif ($thumbnail) : ?>
                    <div class="fr-widget fr-img fid-6225d2ff981f7d847ba25167 fr_image_94 "
                         data-id="6225d2ff981f7d847ba25167">
                        <img class="apg_post_thumbnail" style="height: 230px" src="<?= $thumbnail; ?>"/>
                        <script>
                            (function (window, document, $) {
                                'use strict';
                                $(this)
                                    .find('img')
                                    .css({'height': '100%', 'object-fit': 'cover', 'object-position': 'center'});
                            }).call(document.getElementsByClassName('fr_image_94')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </div>
                <?php endif; ?>
                <div class="fr-widget fr-container fid-61f935ece45c30b6a846ec71    fr_container_24 ">
                    <div class="fr-widget fr-text fr-wf fr-richtext fid-61f935ece45c30b6a846ec77 fr_text_146 fr_text_bright_left ">
                        <div class="fr-text">
                            <h5><?php echo get_field('apg_date', $courses->ID); ?></h5>
                        </div>
                    </div>
                    <a class="fr-widget fr-text fr-wf fr-richtext fid-61fa9c0fd8b6d9a60a2b435e fr_text_383 fr_bright_heading fr-link "
                       data-id="61fa9c0fd8b6d9a60a2b435e" href="<?php echo get_permalink($courses->ID); ?>"
                       data-fr-popup-align="center">
                        <div class="fr-text">
                            <h4><?php the_title($courses->ID); ?></h4>
                        </div>
                    </a>
                    <div class="fr-widget fr-text fr-wf fr-richtext fid-61fa9c74d8b6d9a60a2b436c fr_text_384 fr_paragraph_bright_left">
                        <div class="fr-text">
                            <p><?php echo get_the_excerpt($courses->ID); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    /* Restore original Post Data */
    wp_reset_postdata();
}



$all_custom_queries = [];

function apgut_queryAllCustomPosts ($name = 'courses') {
    global $all_custom_queries;

    if (!array_key_exists($name, $all_custom_queries)) {
        remove_all_filters('posts_orderby');

        $all_custom_queries[$name] = new WP_Query([
            'post_type' => [$name],
            'post_status' => 'publish',
            'posts_per_page' => '-1',
            'orderby' => 'meta_value',
            'meta_key' => 'apg_date',
            'order' => 'DESC',
        ]);

        /* Restore original Post Data */
    }
    $all_custom_queries[$name]->rewind_posts();
    return $all_custom_queries[$name];
}


/**
 * Options display
 */
function apgut_outputCustomPostsAsOptions($name = 'courses', $id = null) {
    $coursesAll = apgut_queryAllCustomPosts($name);
    if ($coursesAll->have_posts()) {
        $counter = 0;
        $selected = '';
        while ($coursesAll->have_posts()) {
            $coursesAll->the_post();

            if ($id == get_the_ID() || ($id == null && $counter == 0)) {
                $selected = 'selected';
            }
            else {
                $selected = '';
            }
            echo '<option value="' . get_the_ID() . '" '. $selected . '>' . get_the_title(get_the_ID()) . '</option>';

            $counter++;
        }
        wp_reset_postdata();
    }
}

//Recent post type (All) Courses - Course page, Template (apmacibas, training)
function apgut_getAllCourses() {
    $number = 0;

    $coursesAll = apgut_queryAllCustomPosts();
    if ($coursesAll->have_posts()) {
        while ($coursesAll->have_posts()) {
            $coursesAll->the_post();
            ?>
            <div id="gry<?php echo ++$number; ?>_one" class="fr-widget fr-container fid-61f935ece45c30b6a846ec65 fr_gry4_one fr-having-animation animated fadeInLeft
                 " data-id="61f935ece45c30b6a846ec65" data-fr-animation="fadeInLeft"
                 data-fr-animation-duration="1s"
                 data-fr-animation-delay="0s">
                <?php $thumbnail = get_the_post_thumbnail_url($coursesAll->ID, [350, 350]); ?>
                <?php if (!empty(get_field('apg_video', $coursesAll->ID))) : ?>
                    <div id="gry4_image_three_2"
                         class="fr-widget fr-container fid-61f93632e45c30b6a846ecea fr_gry4_image_three_2">
                        <div id="youtube_video"
                             class="fr-widget fr-video fr-wf fid-61faa598926bd87355c0fe09 fr_youtube_video">
                            <div class="fr-video-inner">
                                <iframe
                                        style="height:230px" src="<?= get_field('apg_video', $coursesAll->ID); ?>"
                                        frameborder="0" allowfullscreen="">
                                </iframe>
                            </div>
                        </div>
                    </div>
                <?php elseif ($thumbnail) : ?>
                    <div id="image_94" class="fr-widget fr-img fid-6225d2ff981f7d847ba25167 fr_image_94 "
                         data-id="6225d2ff981f7d847ba25167">
                        <img class="apg_post_thumbnail" style="height: 230px" src="<?= $thumbnail; ?>"/>
                        <script>
                            (function (window, document, $) {
                                'use strict';
                                $(this)
                                    .find('img')
                                    .css({'height': '100%', 'object-fit': 'cover', 'object-position': 'center'});
                            }).call(document.getElementsByClassName('fr_image_94')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </div>
                <?php endif; ?>
                <div class="fr-widget fr-container fid-61f935ece45c30b6a846ec71    fr_container_24 ">
                    <div class="fr-widget fr-text fr-wf fr-richtext fid-61f935ece45c30b6a846ec77 fr_text_146 fr_text_bright_left ">
                        <div class="fr-text">
                            <h5><?php echo get_field('apg_date', $coursesAll->ID); ?></h5>
                        </div>
                    </div>
                    <a id="text_436"
                       class="fr-widget fr-text fr-wf fr-richtext fid-621c7f0766db03310568aee5 fr_text_436 fr_dark_heading fr-link  "
                       data-id="621c7f0766db03310568aee5" href="<?php echo get_permalink($coursesAll->ID); ?>"
                       data-fr-popup-align="center">
                        <div class="fr-text">
                            <h4><?php the_title($coursesAll->ID); ?></h4>
                        </div>
                    </a>
                    <div id="text_437"
                         class="fr-widget fr-text fr-wf fr-richtext fid-621c7f0766db03310568aee7 fr_text_437 fr_paragraph_dark_left "
                         data-id="621c7f0766db03310568aee7">
                        <div class="fr-text">
                            <p><?php echo get_the_excerpt($coursesAll->ID); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        wp_reset_postdata();
    }

}

//Recent post type 4 Services - Home page
function apgut_getServices() {

    $number = 0;

    remove_all_filters('posts_orderby');


    $services = new WP_Query([
        'post_type' => ['services'],
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'orderby' => 'meta_value',
        'meta_key' => 'apg_date',
        'order' => 'DESC',

    ]);
    if ($services->have_posts()) {
        while ($services->have_posts()) {
            $services->the_post();
            ?>
            <div id="gry<?php echo ++$number; ?>_one"
                 class="fr-widget fr-container fid-61fa9b10c1999522463df85e    fr_gry4_one_2"
                 data-id="61fa9b10c1999522463df85e">
                <?php $thumbnail = get_the_post_thumbnail_url($services->ID, [350, 350]); ?>
                <?php if (!empty(get_field('apg_video', $services->ID))) : ?>
                    <div id="gry4_image_three_2"
                         class="fr-widget fr-container fid-61f93632e45c30b6a846ecea fr_gry4_image_three_2">
                        <div id="youtube_video"
                             class="fr-widget fr-video fr-wf fid-61faa598926bd87355c0fe09 fr_youtube_video">
                            <div class="fr-video-inner">
                                <iframe
                                        style="height:230px" src="<?= get_field('apg_video', $services->ID); ?>"
                                        frameborder="0" allowfullscreen="">
                                </iframe>
                            </div>
                        </div>
                    </div>
                <?php elseif ($thumbnail) : ?>
                    <div id="image_96" class="fr-widget fr-img fid-6225d330981f7d847ba2516f fr_image_96 "
                         data-id="6225d330981f7d847ba2516f">
                        <img  class="apg_post_thumbnail" style="height: 230px" src="<?= $thumbnail; ?>"/>
                        <script>
                            (function (window, document, $) {
                                'use strict';
                                $(this)
                                    .find('img')
                                    .css({'height': '100%', 'object-fit': 'cover', 'object-position': 'center'});
                            }).call(document.getElementsByClassName('fr_image_96')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </div>
                <?php endif; ?>
                <div id="container_38"
                     class="fr-widget fr-container fid-61fa9b10c1999522463df86a    fr_container_38 "
                     data-id="61fa9b10c1999522463df86a">
                    <div id="text_406"
                         class="fr-widget fr-text fr-wf fr-richtext fid-61fd18aa69b8ef7679879d2d    fr_text_bright_left fr_text_406 "
                         data-id="61fd18aa69b8ef7679879d2d">
                        <div class="fr-text">
                            <h5><?php echo get_field('apg_date', $services->ID); ?></h5>
                        </div>
                    </div>
                    <a id="text_396" class="fr-widget fr-text fr-wf fr-richtext fid-61fcfa948d5f56e8d3cbaf7b fr_bright_heading fr_text_396
                                fr-link " data-id="61fcfa948d5f56e8d3cbaf7b" href="<?php echo get_permalink(); ?>"
                       data-fr-popup-align="center">
                        <div class="fr-text">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </a>
                    <div id="text_408"
                         class="fr-widget fr-text fr-wf fr-richtext fid-61fd18aa69b8ef7679879d31    fr_paragraph_bright_left fr_text_408 "
                         data-id="61fd18aa69b8ef7679879d31">
                        <div class="fr-text">
                            <p><?php echo get_the_excerpt($services->ID); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
    }

    /* Restore original Post Data */
    wp_reset_postdata();
}

//Recent post type (All) Services - Course page
function apgut_getAllServices() {

    $number = 0;

    remove_all_filters('posts_orderby');


    $services = apgut_queryAllCustomPosts('services');

    if ($services->have_posts()) {
        while ($services->have_posts()) {
            $services->the_post();
            ?>
            <div id="gry<?php echo ++$number; ?>_one"
                 class="fr-widget fr-container fid-61fa9b10c1999522463df85e    fr_gry4_one_2"
                 data-id="61fa9b10c1999522463df85e">
                <?php $thumbnail = get_the_post_thumbnail_url($services->ID, [350, 350]); ?>
                <?php if (!empty(get_field('apg_video', $services->ID))) : ?>
                    <div id="gry4_image_three_2"
                         class="fr-widget fr-container fid-61f93632e45c30b6a846ecea fr_gry4_image_three_2">
                        <div id="youtube_video"
                             class="fr-widget fr-video fr-wf fid-61faa598926bd87355c0fe09 fr_youtube_video">
                            <div class="fr-video-inner">
                                <iframe
                                        style="height:230px" src="<?= get_field('apg_video', $services->ID); ?>"
                                        frameborder="0" allowfullscreen="">
                                </iframe>
                            </div>
                        </div>
                    </div>
                <?php elseif ($thumbnail) : ?>
                    <div class="fr-widget fr-img fid-6225d330981f7d847ba2516f fr_image_96 "
                         data-id="6225d330981f7d847ba2516f">
                        <img class="apg_post_thumbnail" style="height: 230px;" src="<?= $thumbnail; ?>"/>
                        <script>
                            (function (window, document, $) {
                                'use strict';
                                $(this)
                                    .find('img')
                                    .css({'height': '100%', 'object-fit': 'cover', 'object-position': 'center'});
                            }).call(document.getElementsByClassName('fr_image_96')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </div>
                <?php endif; ?>
                <div
                        class="fr-widget fr-container fid-61fa9b10c1999522463df86a    fr_container_38 "
                        data-id="61fa9b10c1999522463df86a">
                    <div
                            class="fr-widget fr-text fr-wf fr-richtext fid-61fd18aa69b8ef7679879d2d    fr_text_bright_left fr_text_406 "
                            data-id="61fd18aa69b8ef7679879d2d">
                        <div class="fr-text">
                            <h5><?php echo get_field('apg_date', $services->ID); ?></h5>
                        </div>
                    </div>
                    <a class="fr-widget fr-text fr-wf fr-richtext fid-61fcfa948d5f56e8d3cbaf7b fr_dark_heading fr_text_499
                                fr-link " data-id="61fcfa948d5f56e8d3cbaf7b" href="<?php echo get_permalink(); ?>"
                       data-fr-popup-align="center">
                        <div class="fr-text">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </a>
                    <div
                            class="fr-widget fr-text fr-wf fr-richtext fid-61fd18aa69b8ef7679879d31    fr_paragraph_dark_left fr_text_500 "
                            data-id="61fd18aa69b8ef7679879d31">
                        <div class="fr-text">
                            <p><?php echo get_the_excerpt($services->ID); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    /* Restore original Post Data */
    wp_reset_postdata();
}

//Recent post type (All) Language - Language page
function apgut_getAllLanguage() {

    $number = 0;

    remove_all_filters('posts_orderby');

    $language = apgut_queryAllCustomPosts('lang_courses');

    if ($language->have_posts()) {
        while ($language->have_posts()) {
            $language->the_post();
            ?>
            <div id="gry<?php echo ++$number; ?>_one"
                 class="fr-widget fr-container fid-61fa9b10c1999522463df85e    fr_gry4_one_2"
                 data-id="61fa9b10c1999522463df85e">
                <?php $thumbnail = get_the_post_thumbnail_url($language->ID, [350, 350]); ?>
                <?php if (!empty(get_field('apg_video', $language->ID))) : ?>
                    <div id="gry4_image_three_2"
                         class="fr-widget fr-container fid-61f93632e45c30b6a846ecea fr_gry4_image_three_2">
                        <div id="youtube_video"
                             class="fr-widget fr-video fr-wf fid-61faa598926bd87355c0fe09 fr_youtube_video">
                            <div class="fr-video-inner">
                                <iframe
                                        style="height:230px" src="<?= get_field('apg_video', $language->ID); ?>"
                                        frameborder="0" allowfullscreen="">
                                </iframe>
                            </div>
                        </div>
                    </div>
                <?php elseif ($thumbnail) : ?>
                    <div id="image_96" class="fr-widget fr-img fid-6225d330981f7d847ba2516f fr_image_96 "
                         data-id="6225d330981f7d847ba2516f">
                        <img class="apg_post_thumbnail" style="height: 230px" src="<?= $thumbnail; ?>"/>
                        <script>
                            (function (window, document, $) {
                                'use strict';
                                $(this)
                                    .find('img')
                                    .css({'height': '100%', 'object-fit': 'cover', 'object-position': 'center'});
                            }).call(document.getElementsByClassName('fr_image_96')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </div>
                <?php endif; ?>
                <div id="container_38"
                     class="fr-widget fr-container fid-61fa9b10c1999522463df86a    fr_container_38 "
                     data-id="61fa9b10c1999522463df86a">
                    <div id="text_406"
                         class="fr-widget fr-text fr-wf fr-richtext fid-61fd18aa69b8ef7679879d2d    fr_text_bright_left fr_text_406 "
                         data-id="61fd18aa69b8ef7679879d2d">
                        <div class="fr-text">
                            <h5><?php echo get_field('apg_date', $language->ID); ?></h5>
                        </div>
                    </div>
                    <a id="text_396" class="fr-widget fr-text fr-wf fr-richtext fid-6241a84722691b99b3f39236    fr_dark_heading fr_text_584 fr-link  " data-id="61fcfa948d5f56e8d3cbaf7b" href="<?php echo get_permalink($language->ID); ?>"
                       data-fr-popup-align="center">
                        <div class="fr-text">
                            <h4><?php the_title($language->ID); ?></h4>
                        </div>
                    </a>
                    <div id="text_408"
                         class="fr-widget fr-text fr-wf fr-richtext fid-61fd18aa69b8ef7679879d31     fr_paragraph_dark_left fr_text_408 "
                         data-id="61fd18aa69b8ef7679879d31">
                        <div class="fr-text">
                            <p><?php echo get_the_excerpt($language->ID); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    /* Restore original Post Data */
    wp_reset_postdata();
}

define('APG_FORM_ENDPOINT', 'penge-form/v1');
define('APG_FORM_API_NAME', '/send-email');

add_action('rest_api_init', function () {
    register_rest_route(APG_FORM_ENDPOINT, APG_FORM_API_NAME, [
        'methods' => 'POST',
        'callback' => 'apg_formSendEmail',
        'permission_callback' => 'apg_get_private_data_permissions_check'
    ]);
});

/**
 * This is our callback function that embeds our resource in a WP_REST_Response
 */
function apg_get_private_data_permissions_check() {
    // Restrict endpoint to only users who have the edit_posts capability.
    // if ( !current_user_can( 'edit_posts' ) ) {
    //     return new WP_Error( 'rest_forbidden', esc_html__( 'OMG you can not view private data.', 'my-text-domain' ), array( 'status' => 401 ) );
    // }

    // This is a black-listing approach. You could alternatively do this via white-listing, by returning false here and changing the permissions check.
    return true;
}
function apg_formSendEmail ($data) {
    if(
        isset($_POST['email']) && is_string($_POST['email']) && $_POST['email'] != '' &&
        isset($_POST['message']) && is_string($_POST['message']) && $_POST['message'] != '' &&
        isset($_POST['form_id']) && is_string($_POST['form_id']) && $_POST['form_id'] != '' &&
        isset($_POST['language']) && is_string($_POST['language']) && $_POST['language'] != '' &&
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
    ){
        $footer = get_field('apg_footer', get_option('page_on_front'));
        $mailto = $footer['apg_email_name'];
        //getting customer data
        $name = htmlspecialchars($_POST['name']);
        $fromEmail = htmlspecialchars($_POST['email']);
        $user_message = htmlspecialchars($_POST['message']);
        $form_id = htmlspecialchars($_POST['form_id']);
        $lang = htmlspecialchars($_POST['language']);

        $subject2 = pll_translate_string('apg_email_client_subject', $lang);

        //Email body I will receive
        $message = apg_getMessage($form_id, $lang, $name, $fromEmail, $user_message);

        //Message for client confirmation
        $message_client = sprintf(
            pll_translate_string('apg_email_client_message', $lang),
            $name,
            "<blockquote>" . htmlspecialchars($user_message) . "</blockquote>"
        );

        //Email headers
        $headers = "From: $mailto" . "\r\n" .
            "Reply-To: $fromEmail" . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $headers_client = [];
        $headers_client[] = 'MIME-Version: 1.0';
        $headers_client[] = 'Content-type: text/html; charset=utf-8';
        $headers_client[] = "From: $mailto";
        $headers_client[] = "Reply-To: $mailto";
        $headers_client[] = 'X-Mailer: PHP/' . phpversion();

        //PHP mailer function
        $result1 = mail($mailto, $name, wordwrap($message, 70, "\r\n"), $headers);
        $result2 = mail($fromEmail, $subject2, nl2br(wordwrap($message_client, 70, "<br>")), implode("\r\n", $headers_client));

        return ['success' => ($result1 && $result2), 'penge' => $result1, 'client' => $result2];
    }

    return new WP_Error(
        'wrong_data',
        'Invalid post data supplied',
        [
            'status' => 400,'post_data' => $_POST
        ]
    );
}

/**
 * Returns message for email to administrator
 */
function apg_getMessage($form_id, $lang, $name, $fromEmail, $user_message) {
    if (
        $form_id === 'single_page_course_bottom_register' ||
        $form_id === 'single_page_lange_bottom_register' ||
        $form_id === 'single_page_lang_top' ||
        $form_id === 'single_page_service_bottom_register' ||
        $form_id === 'single_page_service_top' ||
        $form_id === 'home_service' ||
        $form_id === 'home_course' ||
        $form_id === 'service_page_service' ||
        $form_id === 'lange_course' ||
        $form_id === 'course_course_page'

    ) {
        if (isset($_POST['custom_post_id']) && is_string($_POST['custom_post_id']) && $_POST['custom_post_id'] != '') {
            $form_id .= PHP_EOL . 'post_name: ' . get_the_title($_POST['custom_post_id']);
        }
    }
    elseif ($form_id === 'single_page_course_top') {
        if (
            isset($_POST['custom_post_id']) && is_string($_POST['custom_post_id']) && $_POST['custom_post_id'] != '' &&
            isset($_POST['single_course_type']) && is_string($_POST['single_course_type']) && $_POST['single_course_type'] != ''
        ) {
            $form_id .= PHP_EOL . 'post_name: ' . get_the_title($_POST['custom_post_id'] . PHP_EOL . 'single_course_type: '. $_POST['single_course_type']);
        }
    }
    elseif (
        $form_id === 'single_page_course_bottom_apply' ||
        $form_id === 'single_page_lange_bottom_apply' ||
        $form_id === 'single_page_service_bottom_apply'

    ) {
        if (isset($_POST['custom_post_name']) && is_string($_POST['custom_post_name']) && $_POST['custom_post_name'] != '') {
            $form_id .= PHP_EOL . 'post_name: ' . $_POST['custom_post_name'];
        }
    }
    elseif (
        $form_id === 'acedemy_page_apply'

    ) {
        if (
            isset($_POST['custom_post_name']) && is_string($_POST['custom_post_name']) && $_POST['custom_post_name'] != '' &&
            isset($_POST['phone']) && is_string($_POST['phone']) && $_POST['phone'] != ''
        ) {
            $form_id .= PHP_EOL . 'post_name: ' . $_POST['custom_post_name'];
            $name .= PHP_EOL . 'Phone: ' . $_POST['phone'];
        }
    }

    return sprintf(
        pll_translate_string("apg_email_message", $lang), $name, $fromEmail, $user_message, $form_id
    );
}





