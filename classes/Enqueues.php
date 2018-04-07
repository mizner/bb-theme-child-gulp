<?php

final class FLChildTheme
{
    static public function enqueue_scripts()
    {
        if (is_admin()) {
            wp_enqueue_style('fl-child-theme', FL_CHILD_THEME_URL . '/style.css');
        }

        wp_enqueue_style('custom-styles', FL_CHILD_THEME_URL . '/dist/main.min.css');

        wp_enqueue_script('custom-scripts', FL_CHILD_THEME_URL . '/dist/main.min.js', null, null, true);
    }
}