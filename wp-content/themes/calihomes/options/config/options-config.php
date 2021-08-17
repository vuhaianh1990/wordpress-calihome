<?php

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "calihomes_redux";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top ofacebook your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Tuỳ chỉnh', 'redux-framework-demo' ),
        'page_title'           => __( 'Tuỳ chỉnh', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    // $args['admin_bar_links'][] = array(
    //     'id'    => 'redux-docs',
    //     'href'  => 'http://docs.reduxframework.com/',
    //     'title' => __( 'Documentation', 'redux-framework-demo' ),
    // );

    // $args['admin_bar_links'][] = array(
    //     //'id'    => 'redux-support',
    //     'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
    //     'title' => __( 'Support', 'redux-framework-demo' ),
    // );

    // $args['admin_bar_links'][] = array(
    //     'id'    => 'redux-extensions',
    //     'href'  => 'reduxframework.com/extensions',
    //     'title' => __( 'Extensions', 'redux-framework-demo' ),
    // );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/nguyenhieu.azvidi',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://azvidi.com/',
        'title' => 'Like us on Website',
        'icon'  => 'el el-website-alt'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */

    // -> START Tuỳ chỉnh cơ bản
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Tuỳ chỉnh cơ bản', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Những tuỳ chỉnh cơ bản.', 'redux-framework-demo' ),
        'icon'   => 'el el-cog-alt',
        'fields' => array(
            array(
                'id'       => 'calihomes_title',
                'type'     => 'text',
                'title'    => __( 'Title', 'redux-framework-demo' ),
                'desc'     => __( 'SEO "title" của trang web:', 'redux-framework-demo' ),
                'subtitle' => __( 'SEO description website.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => '',
                )
            ),
            array(
                'id'       => 'calihomes_meta_description',
                'type'     => 'textarea',
                'title'    => __( 'Description', 'redux-framework-demo' ),
                'subtitle' => __( 'SEO description', 'redux-framework-demo' ),
                'desc'     => __( 'SEO Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'       => 'calihomes_meta_keywords',
                'type'     => 'textarea',
                'title'    => __( 'SEO keyworks', 'redux-framework-demo' ),
                'subtitle' => __( 'SEO keyworks', 'redux-framework-demo' ),
                'desc'     => __( 'SEO keyworks', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'       => 'calihomes_sale',
                'type'     => 'text',
                'title'    => __( 'Nội dung khuyến mãi (Hiển thị trên mobile)', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'subtitle' => __( 'Nội dung không nên quá 50 từ', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'Nội dung khuyến mãi (Hiển thị trên mobile)',
                ),
                'default'  => 'Ngày vàng trị nám <b>-40%</b>. Duy nhất 14/07',
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */


    // -> START Trang Chính
    Redux::setSection( $opt_name, array(
        'title' => __( 'Trang Chính', 'redux-framework-demo' ),
        'id'    => 'front-page',
        'desc'  => __( '', 'redux-framework-demo' ),
        'icon'  => 'el el-home',
        'fields'=> array(

            // SEO
            // array(
            //     'id'       => 'calihomes_front-page',
            //     'type'     => 'text',
            //     'title'    => __( 'Title', 'redux-framework-demo' ),
            //     'desc'     => __( 'SEO "title" của trang web:', 'redux-framework-demo' ),
            //     'subtitle' => __( 'SEO description website.', 'redux-framework-demo' ),
            //     'hint'     => array(
            //         'content' => '',
            //     )
            // ),

            // WHY do you chouse calihomes
            array(
                'id'       => 'calihomes_why_choose',
                'type'     => 'section',
                'title'    => __( 'Vì sao nên chọn calihomes', 'redux-framework-demo' ),
                'subtitle' => __( 'Điền thông tin vì sao nên chọn calihomes.', 'redux-framework-demo' ),
                'indent'   => true,
            ),
            array(
                'id'       => 'calihomes_why_choose_link',
                'type'     => 'textarea',
                'title'    => __( 'Link Youtube', 'redux-framework-demo' ),
                'subtitle' => __( 'Điền đường dẫn link youtube', 'redux-framework-demo' ),
                'default'  => '<iframe width="100%" height="315" src="https://www.youtube.com/embed/FaGUA-9cSq4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
            ),
            array(
                'id'       => 'calihomes_why_choose_desc',
                'type'     => 'textarea',
                'title'    => __( 'Chi tiết', 'redux-framework-demo' ),
                // 'subtitle' => __( 'Chi tiết', 'redux-framework-demo' ),
                // 'desc'     => __( 'Chi tiết', 'redux-framework-demo' ),
                'default'  => '
                    <p>Với đội ngũ Y, Bác sĩ có trình độ chuyên môn cao và cơ sở vật chất, trang thiết bị hiện đại chuẩn châu Âu, calihomes đang mang đến những dịch vụ chất lượng và hoàn hảo nhất cho khách hàng. </p><p>   calihomes có hai cơ sở tọa lạc tại 2 Quận trung tâm, là địa chỉ tin cậy và thuận lợi để khách hàng đến điều trị các bệnh về da như nám, chàm, bớt ota, giãn mao mạch, trẻ hóa da...</p><p>Với đẳng cấp của mình, Phòng khám hiện là đối tác của nhiều thương hiệu làm đẹp và thẩm mỹ trên.</p>
                ',
            ),

        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Slideshow', 'redux-framework-demo' ),
        'id'         => 'calihomes-slides',
        'desc'       => '',
        'subsection' => true,
        'icon'       => 'el el-picture',
        'fields'     => array(
            array(
                'id'          => 'calihomes-visual-slides',
                'type'        => 'slides',
                'title'       => __( 'Slideshow Chính', 'redux-framework-demo' ),
                'subtitle'    => __( 'Kích thước hình upload chuẩn 1920x400', 'redux-framework-demo' ),
                'desc'        => __( '', 'redux-framework-demo' ),
                'placeholder' => array(
                    'title'       => __( 'Tên slide', 'redux-framework-demo' ),
                    'description' => __( 'Nội dung chi tiết (100 từ)', 'redux-framework-demo' ),
                    'url'         => __( 'Link đường dẫn (Nếu có)', 'redux-framework-demo' ),
                ),
            ),

            array(
                'id'          => 'calihomes_special_service',
                'type'        => 'slides',
                'title'       => __( 'Dịch vụ nổi bật', 'redux-framework-demo' ),
                'subtitle'    => __( 'Kích thước hình upload tối đa 147x147', 'redux-framework-demo' ),
                'desc'        => __( '', 'redux-framework-demo' ),
                'placeholder' => array(
                    'title'       => __( 'Tiêu đề bài viết', 'redux-framework-demo' ),
                    'description' => __( 'Nội dung bài viết (100 từ)', 'redux-framework-demo' ),
                    'url'         => __( 'Đường dẫn bài viết muốn đưa vào trang chính', 'redux-framework-demo' ),
                ),
            ),

            array(
                'id'          => 'calihomes-intro-slides',
                'type'        => 'slides',
                'title'       => __( 'HƠN 1000 KHÁCH HÀNG ĐẾN VỚI calihomes', 'redux-framework-demo' ),
                'subtitle'    => __( 'Kích thước hình upload tối đa 650x300', 'redux-framework-demo' ),
                'desc'        => __( '' ),
                'placeholder' => array(
                    'title'       => __( 'Tên slide', 'redux-framework-demo' ),
                    'description' => __( 'Nội dung chi tiết (100 từ)', 'redux-framework-demo' ),
                    'url'         => __( 'Give us a link!', 'redux-framework-demo' ),
                ),
            ),

            // COMMENTS
            array(
                'id'          => 'calihomes-comments',
                'type'        => 'slides',
                'title'       => __( 'ý kiến khách hàng', 'redux-framework-demo' ),
                'subtitle'    => __( 'Kích thước hình upload tối đa 300x300', 'redux-framework-demo' ),
                'desc'        => __( '' ),
                'placeholder' => array(
                    'title'       => __( 'Tên slide', 'redux-framework-demo' ),
                    'description' => __( 'Nội dung chi tiết (100 từ)', 'redux-framework-demo' ),
                    'url'         => __( 'Give us a link!', 'redux-framework-demo' ),
                ),
            ),

        )
    ) );