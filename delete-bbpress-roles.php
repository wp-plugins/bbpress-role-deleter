<?php
/*
Plugin Name: Delete bbpress roles
Plugin URI: http://wordpress.org/plugins/delete-bbpress-roles/
Description: This plugin helps to uninstall the bbpress roles.
Author: BetaAthe
Version: 1.0
Author URI: http://chifuukoe.com/
License: GPL2

*/
add_action('shutdown', 'sefsefawddad');
function sefsefawddad() {
	$wp_roles = new WP_Roles();
	$wp_roles->remove_role("bbp_keymaster");
	$wp_roles->remove_role("bbp_spectator");
	$wp_roles->remove_role("bbp_blocked");
	$wp_roles->remove_role("bbp_moderator");
	$wp_roles->remove_role("bbp_participant");
}