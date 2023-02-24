<?php


add_action('init', 'cloneRole');

function cloneRole()
{
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $adm = $wp_roles->get_role('editor');
    //Adding a 'new_role' with all admin caps
    $wp_roles->add_role('site_admin', 'Site Administrator', $adm->capabilities);
    $wp_roles->add_cap( 'site_admin', 'list_users' );
    $wp_roles->add_cap( 'site_admin', 'edit_users' );
    $wp_roles->add_cap( 'site_admin', 'create_users' );
    $wp_roles->add_cap( 'site_admin', 'promote_users');
    $wp_roles->add_cap( 'site_admin', 'edit_theme_options');
    $wp_roles->remove_cap( 'site_admin', 'activate_plugins');
    $wp_roles->remove_cap( 'site_admin', 'install_plugins');
    $wp_roles->remove_cap('site_admin', 'edit_plugins');
    $wp_roles->remove_cap('site_admin', 'update_plugins');
    $wp_roles->remove_cap('site_admin', 'delete_plugins');
    $wp_roles->remove_cap('site_admin', 'switch_themes');
    $wp_roles->remove_cap('site_admin', 'edit_themes');
    $wp_roles->remove_cap('site_admin', 'delete_themes');
    $wp_roles->remove_cap('site_admin', 'upload_themes');
    $wp_roles->remove_cap('site_admin', 'customize');

    $wp_roles->add_cap( 'site_admin', 'gravityforms_view_entries');
    $wp_roles->add_cap( 'site_admin', 'gravityforms_export_entries');
    $wp_roles->add_cap( 'site_admin', 'wpseo_manage_options');

}


add_action('admin_menu', function () {
    global $submenu;

    foreach ($submenu as $name => $items) {
        if ($name === 'themes.php') {
            foreach ($items as $i => $data) {
                if (in_array('customize', $data, true)) {
                    unset($submenu[$name][$i]);

                    return;
                }
            }
        }
    }
});



?>
