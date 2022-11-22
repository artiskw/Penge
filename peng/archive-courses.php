<?php /* Template name: Courses */ ?>
<?php get_header(); ?>
<?php include_once 'forms/questions-archive-course-page-form.php'; ?>
<?php $first_content = get_field('apg_first_course_template_content'); ?>
<div id="hero_solid_bg__video__text_right_2"
     class="fr-widget fr-container fid-621c7eec66db03310568ad25 fr_hero_solid_bg__video__text_right_2 "
     data-id="621c7eec66db03310568ad25">
    <div id="hd5_content_5" class="fr-widget fr-container fid-621c7eec66db03310568ad6e fr_hd5_content_5 "
         data-id="621c7eec66db03310568ad6e">
        <div id="grid_20" class="fr-widget fr-grid fid-621c7eec66db03310568ad74 fr_grid_20 "
             data-id="621c7eec66db03310568ad74">
            <div id="container_58" class="fr-widget fr-container fid-621c7eec66db03310568ad7f fr_container_58 "
                 data-id="621c7eec66db03310568ad7f">
                <div id="text_426" class="fr-widget fr-text fr-wf fr-richtext fid-621c7eec66db03310568ad83 fr_text_bright_left fr_text_426 fr-having-animation animated fadeInDown
                      " data-id="621c7eec66db03310568ad83" data-fr-animation="fadeInDown"
                     data-fr-animation-duration="1.5s"
                     data-fr-animation-delay="0s">
                    <div class="fr-text">
                        <h1><?php echo $first_content['apg_title']; ?></h1>
                    </div>
                </div>
                <div id="text_block_16"
                     class="fr-widget fr-text fr-wf fr-richtext fid-62303dacc7447e42bd025dcf fr_text_block_22 fr_text_bright"
                     data-id="62303dacc7447e42bd025dcf">
                    <div class="fr-text">
                        <p><?php echo $first_content['apg_script']; ?></p>
                    </div>
                </div>
            </div>
            <div id="container_71" class="fr-widget fr-container fid-622fa18cc7447e42bd025c31 fr_container_71 "
                 data-id="622fa18cc7447e42bd025c31">
                <?php if (!empty($first_content['apg_video'])) : ?>
                    <div id="youtube_video"
                         class="fr-widget fr-video fr-wf fid-61faa598926bd87355c0fe09 fr_youtube_video">
                        <div class="fr-video-inner">
                            <iframe
                                    src="<?php echo $first_content['apg_video']; ?>" frameborder="0"
                                    allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                <?php elseif ($first_content['apg_image']) : ?>
                    <div id="image_94" class="fr-widget fr-img fid-6225d2ff981f7d847ba25167 fr_image_94 "
                         data-id="6225d2ff981f7d847ba25167">
                        <img src="<?php echo $first_content['apg_image']; ?>"/>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div id="text_center_large" class="fr-widget fr-container fr_text_center_large">
	  <div id="text_block_63" class="fr-widget fr-text fr-wf fr-richtext fr_text_block_63">
		  <div class="fr-text">
			  <?php the_content() ;?>
		  </div>
	  </div>
  </div>
<?php $courses = get_field('apg_courses_section'); ?>
<div id="courses_11" class="fr-widget fr-container fid-621c7f0766db03310568aea6 fr_courses_11 " data-id="621c7f0766db03310568aea6">
    <div id="text_434"
         class="fr-widget fr-text fr-wf fr-richtext fid-621c7f0766db03310568aeaa fr_text_434 fr_text_dark_center2 "
         data-id="621c7f0766db03310568aeaa">
        <div class="fr-text">
            <h2><?php echo($courses['apg_title']); ?></h2>
        </div>
    </div>
    <div id="container_61" class="fr-widget fr-container fid-621c7f0766db03310568aeac fr_container_61 fr-having-animation animated fadeInLeft
           " data-fr-animation="fadeInLeft"
            data-fr-animation-duration="1s"
            data-fr-animation-delay="0s">
        <div id="gry4_4_column_grid_3"
             class="fr-widget fr-grid fid-621c7f0766db03310568aebd fr_gry4_4_column_grid_3 "
             data-id="621c7f0766db03310568aebd">
            <?php apgut_getAllCourses(); ?>
        </div>
    </div>
    <div id="container_66" class="fr-widget fr-container fid-621c7f0766db03310568aeae fr_container_66 "
         data-id="621c7f0766db03310568aeae">
        <a id="button9_7" class="fr-widget fr-text fr-wf fid-621c7f0766db03310568afa8 fr_button9_7 fr-link "
           data-id="621c7f0766db03310568afa8"
           data-fr-popup-align="center">
            <div class="fr-text">
                <?php pll_e("ask_question"); ?>
            </div>
            <script>
                (function (window, document, $) {
                    'use strict';
                    $(this).click(function (event) {
                        $('#popup_bg_course_course_page').css('display', 'flex')
                    })
                }).call(document.getElementsByClassName('fr_button9_7')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
            </script>
        </a>
    </div>
</div>
<?php $slider = get_field('apg_slider'); ?>
<div id="container_72" class="fr-widget fr-container fid-622fadc3c7447e42bd025c3c fr_container_72 "
     data-id="622fadc3c7447e42bd025c3c">
    <div id="text_468"
         class="fr-widget fr-text fr-wf fr-richtext fid-62304250a74e16b701b30a11 fr_text_bright_center fr_text_468 "
         data-id="62304250a74e16b701b30a11">
        <div class="fr-text">
            <h2><?php echo $slider['apg_title']; ?></h2>
        </div>
    </div>
    <div id="container_73" class="fr-widget fr-container fid-622fae4ac7447e42bd025ca4 fr_container_73 "
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
				<input type="hidden" name="form_id" value="ask_for_special_course">
                <div id="c14_line_3"
                     class="fr-widget fr-container fid-622faf52c7447e42bd025d7f fr_c14_line_3 "
                     data-id="622faf52c7447e42bd025d7f">
                </div>
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


