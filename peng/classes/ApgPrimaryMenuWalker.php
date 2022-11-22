<?php

class ApgPrimaryMenuWalker extends Walker {
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
        $predefined_class_names = "fr-widget fr-link ";
        //START
        if (in_array('icon', $classes )) {
            $predefined_class_names .= "fr-container fr_container_57";

            $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="'. $predefined_class_names. ' ' . esc_attr( $class_names ) . '"' : ' class="'.$predefined_class_names.'"';

            $template = '<a %1$s %2$s><div class="fr-widget fr-svg fr_home_icon "><div class="fr-svg-inner">%3$s</div></div></a>';
            $content = esc_attr($item->label);
            $content .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output = sprintf($template, $attributes, $class_names, $content);
        }
        else if (in_array('button', $classes )) {

            $predefined_class_names .= "fr-text fr-wf fr-richtext fr_services_2 fr_top_nav_btn fr_business_academy";
            $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="'. $predefined_class_names. ' ' . esc_attr( $class_names ) . '"' : ' class="'.$predefined_class_names.'"';
            
            $template = '<a %1$s %2$s><div class="fr-text"><p>%3$s</p></div></a>';
            $content = esc_attr($item->label);
            $content .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output = sprintf($template, $attributes, $class_names, $content);
        }
        else {
            $style = 'style="color:inherit"';
            $predefined_class_names .= "fr-text fr-wf fr-richtext fr_services_2 fr_top_nav_link";
            $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="'. $predefined_class_names. ' ' . esc_attr( $class_names ) . '"' : ' class="'.$predefined_class_names.'"';
            
            $template = '<a %1$s %2$s><div class="fr-text"><p %3$s>%4$s</p></div></a>';
            $content = esc_attr($item->label);
            $content .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

            $item_output = sprintf($template, $attributes, $class_names, $style, $content);
        }
        //END

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

   