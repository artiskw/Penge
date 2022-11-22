<?php $current_form_id='popup_bg_single_page_course_bottom_apply'; ?>
<div id="<?= $current_form_id; ?>" class="fr-widget fr-container fid-621c809e48f442adcb1a2b36 fr_popup_bg "
     data-id="621c809e48f442adcb1a2b36">
    <div id="popup" class="fr-widget fr-container fid-621c7fa048f442adcb1a2a39 fr_popup "
         data-id="621c7fa048f442adcb1a2a39">

        <form class="fr-widget fr-form fr-wf fid-621c803448f442adcb1a2af4 fr_form_with_name_and_email_input
                        fr-link" method="POST"
                          action="<?php echo get_site_url() . '/wp-json/' . APG_FORM_ENDPOINT. APG_FORM_API_NAME;?>"
              data-fr-collect-data="<?php echo get_site_url() . '/wp-json/' . APG_FORM_ENDPOINT. APG_FORM_API_NAME;?>"
              enctype="multipart/form-data"
              target="_blank">
            <input type="hidden" name="form_id" value="question_single_course_bottom_apply">
            <input type="hidden" name="language" value="<?= pll_current_language(); ?>">
            <div
                    class="fr-widget fr-text fr-wf fr-richtext fid-621c803548f442adcb1a2afa fr_text_dark_center fr_text_67 "
                    data-id="621c803548f442adcb1a2afa">
                <div class="fr-text">
                    <h2><?php pll_e("form_title_single_course_bottom_apply"); ?></h2>
                </div>
            </div>
            <div class="fr-widget fr-grid fid-621c803548f442adcb1a2afc fr_styled_form_grid "
                 data-id="621c803548f442adcb1a2afc">
                <div id="input_5" class="fr-widget fr-input fr-wf fid-621c803548f442adcb1a2b13 fr_input_5 "
                     data-id="621c803548f442adcb1a2b13">
                    <input type="text" class="fr_input_5" placeholder="<?php pll_e("apg_form_name"); ?>" name="name"
                           required>
                </div>
                <div id="input_4" class="fr-widget fr-input fr-wf fid-621c803548f442adcb1a2b15 fr_input_4 "
                     data-id="621c803548f442adcb1a2b15">
                    <input type="email" class="fr_input_4" placeholder="<?php pll_e("apg_form_email"); ?>" name="email"
                           required>
                </div>
            </div>
            <!-- START CUSTOM_POST_ID -->
            <div class="fr-widget fr-container fr_container_67">
                <div class="custom_post_name">
                    <input type="text" name="custom_post_name"
                           readonly value="<?= the_title(); ?>">
                </div>
            </div>
            <!-- END CUSTOM_POST_ID -->
            <div class="fr-widget fr-container fid-621c96e248f442adcb1a2b52 fr_container_67 "
                 data-id="621c96e248f442adcb1a2b52">
                <div id="input_19" class="fr-widget fr-input fr-wf fid-621c929048f442adcb1a2b48 fr_input_19 "
                     data-id="621c929048f442adcb1a2b48">
                    <textarea class="fr_input_19" placeholder="<?php pll_e("apg_form_placeholder_message"); ?>"
                              name="message"></textarea>
                </div>
            </div>
            <a id="text_68" class="fr-widget fr-text fr-wf fid-621c803548f442adcb1a2b17 fr_text_68 fr_button_fill_blue fr-widget-hover-opacity-60
                        fr-link fr-linktype-submit" data-id="621c803548f442adcb1a2b17" tabindex="0">
                <div class="fr-text">
                    <?php pll_e("apg_form_submit"); ?>
                </div>
            </a>
            <button type="submit" style="display:none"></button>
            <div class="fr-form-submit-popup js-fr-success-form-submit">
                <svg xmlns="http://www.w3.org/2000/svg" height="58" width="73">
                    <path d="M3.536 32.221l18.7 18.7 46.5-46.5" stroke="#35b848" stroke-width="10" fill="none"/>
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
        <script>
            (function (window, document, $) {
                'use strict';
                $(this).click(function (event) {
                    event.stopPropagation()
                })
            }).call(document.getElementById('<?= $current_form_id; ?>').getElementsByClassName('fr_popup')[0], window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
        </script>
    </div>
    <script>
        (function (window, document, $) {
            'use strict';

            $(this).click(function (event) {
                console.log(event.target);
                if (!event.target.classList.contains('popup')) {
                    $(this).css('display', 'none');
                }
            })
        }).call(document.getElementById('<?= $current_form_id; ?>'), window, document, (window.Froont && window.Froont.jQuery || window.jQuery));
    </script>
</div>