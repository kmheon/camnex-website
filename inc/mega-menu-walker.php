<?php
/**
 * CamneX Bangladesh — Mega Menu Nav Walker
 *
 * Custom Walker to render clean CamneX-styled markup for standard WordPress menus.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class CamneX_Mega_Menu_Walker extends Walker_Nav_Menu {

    /**
     * Starts the list before the elements are added.
     */
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        if ($depth === 0) {
            $output .= "\n{$indent}<ul class=\"cx-dropdown-menu\" role=\"menu\">\n";
        } else {
            $output .= "\n{$indent}<ul class=\"cx-sub-dropdown-menu\" role=\"menu\">\n";
        }
    }

    /**
     * Ends the list of after the elements are added.
     */
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "{$indent}</ul>\n";
    }

    /**
     * Starts the element output.
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($data_object->classes) ? [] : (array) $data_object->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        // Map classes to CamneX design system
        if ($depth === 0) {
            $classes[] = 'cx-nav-item';
            if ($has_children) {
                $classes[] = 'cx-dropdown';
            }
        } else {
            $classes[] = 'cx-sub-item';
        }

        if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
            $classes[] = 'active';
        }

        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $data_object, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $data_object->ID, $data_object, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = [];
        $atts['title']  = !empty($data_object->attr_title) ? $data_object->attr_title : '';
        $atts['target'] = !empty($data_object->target)     ? $data_object->target     : '';
        if ('_blank' === $data_object->target && empty($data_object->xfn)) {
            $atts['rel'] = 'noopener noreferrer';
        } else {
            $atts['rel'] = $data_object->xfn;
        }
        $atts['href']         = !empty($data_object->url) ? $data_object->url : '';
        $atts['aria-current'] = $data_object->current ? 'page' : '';

        if ($depth === 0) {
            $atts['class'] = 'cx-nav-link' . ($data_object->current ? ' active' : '');
            if ($has_children) {
                $atts['aria-haspopup'] = 'true';
                $atts['aria-expanded'] = 'false';
            }
        } else {
            $atts['class'] = 'cx-dropdown-link';
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $data_object, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $data_object->title, $data_object->ID);
        $title = apply_filters('nav_menu_item_title', $title, $data_object, $args, $depth);

        $item_output = $args->before ?? '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= ($args->link_before ?? '') . $title . ($args->link_after ?? '');
        
        if ($depth === 0 && $has_children) {
            $item_output .= ' <i data-lucide="chevron-down" aria-hidden="true"></i>';
        }

        $item_output .= '</a>';
        $item_output .= $args->after ?? '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $data_object, $depth, $args);
    }

    /**
     * Ends the element output.
     */
    public function end_el(&$output, $data_object, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}
