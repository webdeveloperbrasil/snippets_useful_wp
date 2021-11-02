<?php
/**
 * Configurar permissões com o plugin AAM
 * em metaboxes and widgets
 */
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets()
{
    wp_add_dashboard_widget('custom_widget_id', 'TITLE WIDGET', 'custom_widget_callback');
}

function custom_widget_callback()
{
    $url_site = get_site_url();
    $html = '';
    $html .= "<a class='button' href='$url_site' target='_blank'>LINK</a> ";

    echo $html;
}
//==========================================================================