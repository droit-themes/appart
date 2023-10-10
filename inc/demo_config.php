<?php

// OneClick Demo Importer
add_filter( 'pt-ocdi/import_files', 'appart_import_files' );
function appart_import_files() {
    return array(
        array(
            'import_file_name'             => esc_html__('Demo Content', 'appart'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/demo1/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/demo1/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/demo1/screenshot.jpg',
            'import_notice'                => esc_html__( 'Install and activate all required plugins before you click on the "Yes! Import" button.', 'appart' ),
            'preview_url'                  => 'https://dlappart.droitlab.com/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/demo1/settings.json',
                    'option_name' => 'appart_opt',
                ),
            ),
        ),
        
    );
}


function appart_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main_menu' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'appart_after_import_setup' );
