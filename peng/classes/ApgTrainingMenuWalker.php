<?php

class ApgTrainingMenuWalker extends Walker {
    var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

/*
    <div class="fr-widget fr-container fr_container_49">
        <a href="#goto">Languages</a>
        <a href="#goto">Services</a>
    </div>
    <div class="fr-widget fr-container fr_container_49">
        <a href="#goto">Courses</a>
        <a href="#goto">Business academy</a>
    </div>
    <div class="fr-widget fr-container fr_container_49">
        <a href="#goto">Courses</a>
        <a href="#goto">Business academy</a>
    </div>
*/
    public function start_el(&$output, $item, $depth=0, $args = [], $current_obj_id = 0) {
        static $counter = 0;

        //Šeit 
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        //$classes = in_array( 'current-menu-item', $classes ) ? array( 'current-menu-item' ) : array();
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $predefined_class_names = 'fr-widget fr-text fr-wf fid-620b8946f776be1568b50e3b fr_button4 fr-link';
        $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="'. $predefined_class_names. ' ' . esc_attr( $class_names ) . '"' : ' class="'.$predefined_class_names.'"';

        $item_output = '';
        if ($counter >= 2 && $counter % 2 === 0) {
            $item_output .= '</div>';
            $item_output .= '<div class="fr-widget fr-container fr_container_49">';
        }

        $item_output .= '<a '.$attributes.' '.$class_names.'>';
        $item_output .= '<div class="fr-text">';
        $item_output .= esc_attr($item->label);
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</div>';
        $item_output .= "</a>\n";
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        $counter++;
    }
}