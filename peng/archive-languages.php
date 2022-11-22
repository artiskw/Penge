<?php /* Template name: Languages */ ?>
<?php get_header(); ?>
<?php include 'forms/questions-archive-language-page-form.php'; ?>
<?php $first_content_language = get_field('apg_first_language_template_content'); ?>
    <div id="hero_bg_image_text_left_aligned"
         class="fr-widget fr-container fid-623e655c42d1ffe4242e780e    fr_hero_bg_image_text_left_aligned

                                    " data-id="623e655c42d1ffe4242e780e" >            <div
                id="hd3_content"
                class="fr-widget fr-container fid-623e655c42d1ffe4242e7814    fr_hd3_content

                                    " data-id="623e655c42d1ffe4242e7814" >            <div
                    id="text_576"
                    class="fr-widget fr-text fr-wf fr-richtext fid-623e65a442d1ffe4242e782f    fr_text_bright_left fr_text_576

                                    " data-id="623e65a442d1ffe4242e782f" >  <div class="fr-text">
                    <h1><?php echo $first_content_language['apg_title']; ?></h1>
                </div>

            </div>

            <div
                    id="text_577"
                    class="fr-widget fr-text fr-wf fr-richtext fid-623e65c042d1ffe4242e783c    fr_text_bright_left fr_text_577

                                    " data-id="623e65c042d1ffe4242e783c" >  <div class="fr-text">
                    <p><?php echo $first_content_language['apg_script']; ?></p>
                </div>

            </div>

            <a
                    id="text_133"
                    class="fr-widget fr-text fr-wf fid-623e655c42d1ffe4242e781c    fr_text_133 fr_button_fill_green_middle

     fr-link                                " data-id="623e655c42d1ffe4242e781c"                 href="mailto:hello@froont.com"
            >  <div class="fr-text">
                    Valodas</div>

            </a>


        </div>


    </div>
<?php $language = get_field('apg_language_section'); ?>
    <div id="courses_11" class="fr-widget fr-container fid-623c730242d1ffe4242e6e11 fr_courses_11">
        <div id="text_497"
             class="fr-widget fr-text fr-wf fr-richtext fid-623c730242d1ffe4242e6edf    fr_text_dark_center2 fr_text_497"
             data-id="623c730242d1ffe4242e6edf">
            <div class="fr-text">
                <h2><?php echo($language['apg_title']); ?></h2>
            </div>
        </div>
        <div id="container_103" class="fr-widget fr-container fid-623c730242d1ffe4242e6ee1 fr_container_103 fr-having-animation animated fadeInLeft
             " data-fr-animation="fadeInLeft"
             data-fr-animation-duration="1s"
             data-fr-animation-delay="0s">
            <div id="gry4_4_column_grid_4"
                 class="fr-widget fr-grid fid-623c730242d1ffe4242e6ef2    fr_gry4_4_column_grid_4 "
                 data-id="623c730242d1ffe4242e6ef2">
                <?php apgut_getAllLanguage(); ?>
            </div>
        </div>

        <div id="container_112" class="fr-widget fr-container fid-623c730242d1ffe4242e6ee3 fr_container_112 "
             data-id="623c730242d1ffe4242e6ee3">
            <a id="button9_8" class="fr-widget fr-text fr-wf fid-623c730342d1ffe4242e70be fr_button9_8 fr-link "
               data-id="623c730342d1ffe4242e70be"
               data-fr-popup-align="center">
                <div class="fr-text">
                    <?php pll_e("ask_question"); ?>
                </div>
                <script>
                    (function (window, document, $) {
                        'use strict';
                        $(this).click(function (event) {
                            event.preventDefault()
                            $('#popup_bg_lange_course').css('display', 'flex')
                        })
                    }).call(document.getElementsByClassName('fr_button9_8')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                </script>
            </a>
        </div>
    </div>
<?php $slider = get_field('apg_slider'); ?>
    <div id="container_162" class="fr-widget fr-container fid-6241aa3422691b99b3f39565    fr_container_162 "
         data-id="622fadc3c7447e42bd025c3c">
        <div id="text_468"
             class="fr-widget fr-text fr-wf fr-richtext fid-62304250a74e16b701b30a11 fr_text_bright_center fr_text_468 "
             data-id="62304250a74e16b701b30a11">
            <div class="fr-text">
                <h2><?php echo $slider['apg_title']; ?></h2>
            </div>
        </div>
        <div id="container_163" class="fr-widget fr-container fid-6241aa3422691b99b3f3956d    fr_container_163 "
             data-id="622fae4ac7447e42bd025ca4">
            <div id="image_slideshow"
                 class="fr-widget fr-slideshow swiper-container swiper-container-horizontal fid-622fae32c7447e42bd025c85 fr_image_slideshow "
                 data-id="622fae32c7447e42bd025c85" data-swiper-enabled>
                <div class="fr-subwidgets-container swiper-wrapper">
                    <div id="left_arrow_2" class="fr-widget fr-svg fid-622fae32c7447e42bd025c8a fr_left_arrow_2 fr-widget-hover-opacity-60
                                    " data-id="622fae32c7447e42bd025c8a">
                        <div class="fr-svg-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="538 154 1036 1612">
                                <path d="M1555 429l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z"/>
                            </svg>
                        </div>
                    </div>
                    <div id="right_arrow_2"
                         class="fr-widget fr-svg fid-622fae32c7447e42bd025c8c fr_right_arrow_2 fr-widget-hover-opacity-60 "
                         data-id="622fae32c7447e42bd025c8c">
                        <div class="fr-svg-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="474 154 1036 1612">
                                <path d="M1491 1005l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"/>
                            </svg>
                        </div>
                    </div>
                    <?php if (is_array(($slider['apg_slider_content']))) : ?>
                        <?php foreach ($slider['apg_slider_content'] as $content_slider) : ?>
                            <div id="image_slide_1"
                                 class="fr-widget fr-container fid-622fae32c7447e42bd025c8e fr_image_slide_1"
                                 data-id="622fae32c7447e42bd025c8e">
                                <div id="container_85"
                                     class="fr-widget fr-container fid-62304588a74e16b701b30a3f fr_container_85 "
                                     data-id="62304588a74e16b701b30a3f">
                                    <div id="text_block_19"
                                         class="fr-widget fr-text fr-wf fr-richtext fid-62304588a74e16b701b30a43 fr_bright_heading fr_text_block_19 "
                                         data-id="62304588a74e16b701b30a43">
                                        <div class="fr-text">
                                            <h3><?php echo $content_slider ['apg_title']; ?></h3>
                                        </div>
                                    </div>
                                    <div id="text_block_20"
                                         class="fr-widget fr-text fr-wf fr-richtext fid-62304588a74e16b701b30a45 fr_paragraph_bright_left fr_text_block_20 "
                                         data-id="62304588a74e16b701b30a45">
                                        <div class="fr-text">
                                            <p><?php echo $content_slider ['apg_description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination swiper-pagination-bullets" style="display:none">
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                            class="swiper-pagination-bullet ">
                        </span>
                </div>
            </div>
        </div>
    </div>
<?php $form = get_field('apg_form_section'); ?>
    <div id="clients_2" class="fr-widget fr-container fid-622faf35c7447e42bd025d36 fr_clients_2 "
         data-id="622faf35c7447e42bd025d36">
        <div id="text_452"
             class="fr-widget fr-text fr-wf fr-richtext fid-622faf35c7447e42bd025d3a fr_text_large_dark_center fr_text_452 "
             data-id="622faf35c7447e42bd025d3a">
            <div class="fr-text">
                <h3><?php echo $form['apg_primary_title']; ?></h3>
            </div>
        </div>
        <div id="c14_2_column_grid_3"
             class="fr-widget   fr-grid fid-622faf52c7447e42bd025d64  fr_c14_2_column_grid_3 "
             data-id="622faf52c7447e42bd025d64">
            <div id="c14_text_3"
                 class="fr-widget fr-container fid-622faf52c7447e42bd025d77 fr_c14_text_3 "
                 data-id="622faf52c7447e42bd025d77">
                <form id="form_with_name_and_email_input_2" class="fr-widget fr-form fr-wf fid-62399f1bf0bf0cc17b6a8df1 fr_form_with_name_and_email_input_2
                              fr-link " data-id="62399f1bf0bf0cc17b6a8df1" method="POST"
                      action="<?php echo get_site_url() . '/wp-json/' . APG_FORM_ENDPOINT. APG_FORM_API_NAME;?>"
                      data-fr-collect-data="<?php echo get_site_url() . '/wp-json/' . APG_FORM_ENDPOINT. APG_FORM_API_NAME;?>"
                      enctype="multipart/form-data"
                      target="_blank">
					<input type="hidden" name="form_id" value="ask_for_special_language">
                    <div id="c14_line_3"
                         class="fr-widget fr-container fid-622faf52c7447e42bd025d7f fr_c14_line_3 "
                         data-id="622faf52c7447e42bd025d7f"></div>
                    <div id="text_453"
                         class="fr-widget fr-text fr-wf fr-richtext fid-622faf52c7447e42bd025d87 fr_text_dark_center fr_text_453 "
                         data-id="622faf52c7447e42bd025d87">
                        <div class="fr-text">
                            <h3><?php pll_e("apg_courses_form_title"); ?></h3>
                        </div>
                    </div>
                    <div id="input_23"
                         class="fr-widget fr-input fr-wf fid-62399f1bf0bf0cc17b6a8e13 fr_input_23 "
                         data-id="62399f1bf0bf0cc17b6a8e13">
                        <input type="text" class="fr_input_23" placeholder="<?php pll_e("apg_form_name"); ?>"
                               name="name" required>
                    </div>
                    <div id="input_24"
                         class="fr-widget fr-input fr-wf fid-62399f1bf0bf0cc17b6a8e15 fr_input_24 "
                         data-id="62399f1bf0bf0cc17b6a8e15">
                        <input type="email" class="fr_input_24" placeholder="<?php pll_e("apg_form_email"); ?>"
                               name="email"
                               required>
                    </div>
                    <div id="input_25"
                         class="fr-widget fr-input fr-wf fid-62399f1bf0bf0cc17b6a8e29 fr_input_25 "
                         data-id="62399f1bf0bf0cc17b6a8e29">
                            <textarea class="fr_input_25" placeholder="<?php pll_e("apg_form_placeholder_message"); ?>"
                                      name="message"></textarea>
                        <script>
                            (function (window, document, $) {
                                'use strict';
                                $(this).find('textarea').css('resize', 'none');
                            }).call(document.getElementsByClassName('fr_input_25')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
                        </script>
                    </div>
                    <a id="text_471"
                       class="fr-widget fr-text fr-wf fid-62399f1bf0bf0cc17b6a8dfd fr_button_fill_blue fr_text_471 fr-widget-hover-opacity-60 fr-link fr-linktype-submit"
                       data-id="62399f1bf0bf0cc17b6a8dfd" tabindex="0">
                        <div class="fr-text">
                            <?php pll_e("apg_form_submit"); ?>
                        </div>
                    </a>
                    <button type="submit" style="display:none"></button>
                    <div class="fr-form-submit-popup js-fr-success-form-submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="58" width="73">
                            <path d="M3.536 32.221l18.7 18.7 46.5-46.5" stroke="#35b848" stroke-width="10"
                                  fill="none"/>
                        </svg>
                        <h6><?php pll_e("apg_success_form_submit_title"); ?></h6>
                        <?php pll_e("apg_success_form_submit"); ?>
                    </div>
                    <div class="fr-form-submit-popup js-fr-error-form-submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="51" width="52">
                            <g stroke-width="10" stroke="#ed5550" fill="none">
                                <path d="M7.106 7.713l36.7 36.3m-36.1-36.3l36.7 36.3m-36.7-36.3l36.7 36.3m-36.7-36.3l36.7 36.3m-36.7-36.3l36.7 36.3M44.322 7.713l-36.7 36.3"/>
                            </g>
                        </svg>
                        <h6><?php pll_e("apg_error_form_submit_title"); ?></h6>
                        <?php pll_e("apg_error_form_submit"); ?>
                    </div>
                </form>
            </div>
            <div id="c14_container_two_3"
                 class="fr-widget fr-container fid-622faf52c7447e42bd025d79 fr_c14_container_two_3"
                 data-id="622faf52c7447e42bd025d79">
                <div id="c14_line_two_3"
                     class="fr-widget fr-container fid-622faf52c7447e42bd025dbe fr_c14_line_two_3 "
                     data-id="622faf52c7447e42bd025dbe">
                </div>
                <div id="text_455"
                     class="fr-widget fr-text fr-wf fr-richtext fid-622faf52c7447e42bd025dc0    fr_text_dark_left fr_text_455 "
                     data-id="622faf52c7447e42bd025dc0">
                    <div class="fr-text">
                        <h4><?php echo $form['apg_script_title']; ?></h4>
                    </div>
                </div>
                <div id="text_469"
                     class="fr-widget fr-text fr-wf fr-richtext fid-6231dd09665193e343249919    fr_paragraph_dark_left fr_text_469 "
                     data-id="6231dd09665193e343249919">
                    <div class="fr-text">
                        <p><?php echo $form['apg_script']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php get_footer(); ?>