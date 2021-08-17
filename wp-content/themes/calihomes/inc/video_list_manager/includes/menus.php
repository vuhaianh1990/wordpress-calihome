<?php 
/**
 * Create Menus
 * 
 * Create menus for plugins
 *
 * Author: Tung Pham
 */
	add_action( 'admin_menu', 'tnt_create_menu' );
    
    /**
     * Create Menus
     */
	function tnt_create_menu() {
	            
	    //Create topmenu
	    add_menu_page( 'Video List Manager', 'Quản lý video', 'manage_options', 'tnt_video_manage_page', 'tnt_video_manage', "dashicons-format-video");

	    //Create submenu
	    add_submenu_page('tnt_video_manage_page', 'Thêm Video', 'Add Video', 'manage_options','tnt_video_add_page', 'tnt_video_add');
	    add_submenu_page('tnt_video_manage_page', 'Sửa Video', 'Edit Video', 'manage_options', 'tnt_video_edit_page', 'tnt_video_edit');
	    add_submenu_page('tnt_video_manage_page', 'Xoá Video', 'Delete Video', 'manage_options', 'tnt_video_del_page', 'tnt_video_del');

	    // add_submenu_page('tnt_video_setting_page', 'Video Settings', 'Video Settings', 'manage_options','tnt_video_setting_page', 'tnt_video_setting');
	    add_submenu_page('tnt_video_manage_page', 'Categories', 'Danh mục', 'manage_options', 'tnt_video_cat_manager_page', 'tnt_video_cat_manager');
	    add_submenu_page('tnt_video_manage_page', 'Add Category', 'Thêm Danh mục', 'manage_options', 'tnt_video_cat_add_page', 'tnt_video_cat_add');
	    add_submenu_page('tnt_video_manage_page', 'Edit Category', 'Sửa Danh mục', 'manage_options', 'tnt_video_cat_edit_page', 'tnt_video_cat_edit');
	    add_submenu_page('tnt_video_manage_page', 'Delete Category', 'Xoá Danh mục', 'manage_options', 'tnt_video_cat_del_page', 'tnt_video_cat_del');

	    add_submenu_page('tnt_video_manage_page', 'Video Manage Settings', 'Settings', 'manage_options', 'tnt_video_option_page', 'tnt_video_option');
	}
 ?>