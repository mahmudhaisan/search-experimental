<?php

add_filter('theme_page_templates', 'filter_inject_page_templates');

function filter_inject_page_templates($templates)
{
    $path = 'page-templates/search-template.php';
    $templates[$path] = 'Search';
    return $templates;
}



add_filter('template_include', 'pluginname_load_template', 99);
function pluginname_load_template($template)
{

    global $post;
    $custom_template_slug   = 'page-templates/search-template.php';
    $page_template_slug     = get_page_template_slug($post->ID);

    if ($page_template_slug == $custom_template_slug) {
        return plugin_dir_path(__FILE__) . $custom_template_slug;
    }

    return $template;
}
