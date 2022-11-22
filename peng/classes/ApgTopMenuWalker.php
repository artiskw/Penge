<?php

class ApgTopMenuWalker extends Walker {
    var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    public function start_el(&$output, $item, $depth=0, $args = [], $current_obj_id = 0) {
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        // $classes = in_array( 'current-menu-item', $classes ) ? array( 'current-menu-item' ) : array();
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $predefined_class_names = 'fr-widget fr-text fr-wf fr-richtext fid-623085d708cc4b709b846e7b fr_navigation_text_light fr_item_8 fr-link';
        $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="'. $predefined_class_names. ' ' . esc_attr( $class_names ) . '"' : ' class="'.$predefined_class_names.'"';

        $item_output = '<a '.$attributes.' '.$class_names.'>';
        $item_output .= '<div class="fr-text">';
        $item_output .= '<p style="color:inherit">';
        $item_output .= esc_attr($item->label);
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
         $item_output .= '</p>';
        $item_output .= '</div>';
        $item_output .= "</a>\n";
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}