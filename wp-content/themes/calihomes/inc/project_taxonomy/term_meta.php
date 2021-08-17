<?php

add_action( 'add_meta_boxes', 'mytheme_add_meta_box' );

if ( ! function_exists( 'mytheme_add_meta_box' ) ) {
  /**
   * Add meta box to page screen
   *
   * This function handles the addition of variuos meta boxes to your page or post screens.
   * You can add as many meta boxes as you want, but as a rule of thumb it's better to add
   * only what you need. If you can logically fit everything in a single metabox then add
   * it in a single meta box, rather than putting each control in a separate meta box.
   *
   * @since 1.0.0
   */
  function mytheme_add_meta_box() {
    add_meta_box( 'additional-page-metabox-options', esc_html__( 'Metabox Controls', 'mytheme' ), 'mytheme_metabox_controls', 'page', 'normal', 'low' );
  }
}

if ( ! function_exists( 'mytheme_metabox_controls' ) ) {
  /**
   * Meta box render function
   *
   * @param  object $post Post object.
   * @since  1.0.0
   */
  function mytheme_metabox_controls( $post ) {
    $meta = get_post_meta( $post->ID );
    $mytheme_input_field = ( isset( $meta['mytheme_input_field'][0] ) && '' !== $meta['mytheme_input_field'][0] ) ? $meta['mytheme_input_field'][0] : '';
    $mytheme_radio_value = ( isset( $meta['mytheme_radio_value'][0] ) && '' !== $meta['mytheme_radio_value'][0] ) ? $meta['mytheme_radio_value'][0] : '';
    $mytheme_checkbox_value = ( isset( $meta['mytheme_checkbox_value'][0] ) &&  '1' === $meta['mytheme_checkbox_value'][0] ) ? 1 : 0;
    $mytheme_custom_select = ( isset( $meta['mytheme_custom_select'][0] ) && '' !== $meta['mytheme_custom_select'][0] ) ? $meta['mytheme_custom_select'][0] : '';
    $mytheme_page_select = ( isset( $meta['mytheme_page_select'][0] ) && '' !== $meta['mytheme_page_select'][0] ) ? $meta['mytheme_page_select'][0] : '';
    $mytheme_category_select = ( isset( $meta['mytheme_category_select'][0] ) && '' !== $meta['mytheme_category_select'][0] ) ? $meta['mytheme_category_select'][0] : '';
    $mytheme_datepicker = ( isset( $meta['mytheme_datepicker'][0] ) && '' !== $meta['mytheme_datepicker'][0] ) ? $meta['mytheme_datepicker'][0] : '';
    $mytheme_slider = ( isset( $meta['mytheme_slider'][0] ) && '' !== $meta['mytheme_slider'][0] ) ? $meta['mytheme_slider'][0] : '';
    wp_nonce_field( 'mytheme_control_meta_box', 'mytheme_control_meta_box_nonce' ); // Always add nonce to your meta boxes!
    ?>
    <style type="text/css">
      .post_meta_extras p{margin: 20px;}
      .post_meta_extras label{display:block; margin-bottom: 10px;}
      .post_meta_extras .left_part{display: inline-block;width: 45%;margin-right: 30px; vertical-align: top;}
      .post_meta_extras .right_part{display: inline-block; width: 46%; vertical-align: top;}
      .uploaded_image{display: block; width: 200px;}
      .uploaded_image img{width: 200px;}
      .featured_image_upload{display: block; margin-bottom: 10px;}
      .post_meta_extras .gallery_buttons input{position: relative; display: inline-block; vertical-align: top; width: auto;}
      .post_meta_extras .title{font-size: 14px; padding: 8px 12px 8px 0; margin: 0; line-height: 1.4; font-weight: 600;}
      .post_meta_extras .gallery-item{position: relative; display: inline-block; vertical-align: top; margin-right: 10px; margin-bottom: 10px;}
      .post_meta_extras .gallery-item img{width: 200px; display: inline-block; vertical-align: top;}
      .post_meta_extras .gallery-item .remove{position: absolute; top: 5px; right: 5px; width: 20px; height: 20px; background: #000; border-radius: 50%; border: 1px solid #fff; color: #fff; text-align: center; font-weight: 600;
      line-height: 18px; cursor: pointer; display: none;}
      .post_meta_extras .gallery-item:hover .remove{display: block;}

    </style>
    <div class="post_meta_extras">
      <div class="left_part">
        <p>
          <label><?php esc_attr_e( 'Input text', 'mytheme' ); ?></label>
          <input type="text" name="mytheme_input_field" value="<?php echo esc_attr( $mytheme_input_field ); ?>">
        </p>
        <p>
          <label>
            <input type="radio" name="mytheme_radio_value" value="value_1" <?php checked( $mytheme_radio_value, 'value_1' ); ?>>
            <?php esc_attr_e( 'Radio value 1', 'mytheme' ); ?>
          </label>
          <label>
            <input type="radio" name="mytheme_radio_value" value="value_2" <?php checked( $mytheme_radio_value, 'value_2' ); ?>>
            <?php esc_attr_e( 'Radio value 2', 'mytheme' ); ?>
          </label>
          <label>
            <input type="radio" name="mytheme_radio_value" value="value_3" <?php checked( $mytheme_radio_value, 'value_3' ); ?>>
            <?php esc_attr_e( 'Radio value 3', 'mytheme' ); ?>
          </label>
        </p>
        <p>
          <label><input type="checkbox" name="mytheme_checkbox_value" value="1" <?php checked( $mytheme_checkbox_value, 1 ); ?> /><?php esc_attr_e( 'Checkbox value', 'mytheme' ); ?></label>
        </p>
        <p>
          <label for="mytheme_custom_select"><?php esc_attr_e( 'Custom Select', 'mytheme' ); ?></label>
          <select id="mytheme_custom_select" name="mytheme_custom_select">
            <option value=""><?php esc_html_e( '&ndash; Select &ndash;', 'mytheme' ); ?></option>
            <option value="<?php echo esc_attr( 'myvalue_1' ); ?>" <?php selected( $mytheme_custom_select, 'myvalue_1', true ); ?>><?php esc_html_e( 'My custom value 1', 'mytheme' ); ?></option>
            <option value="<?php echo esc_attr( 'myvalue_2' ); ?>" <?php selected( $mytheme_custom_select, 'myvalue_2', true ); ?>><?php esc_html_e( 'My custom value 2', 'mytheme' ); ?></option>
            <option value="<?php echo esc_attr( 'myvalue_3' ); ?>" <?php selected( $mytheme_custom_select, 'myvalue_3', true ); ?>><?php esc_html_e( 'My custom value 3', 'mytheme' ); ?></option>
          </select>
        </p>
        <p>
          <?php
          $args_pages = array(
            'depth'                 => 0,
            'child_of'              => 0,
            'selected'              => $mytheme_page_select,
            'echo'                  => 1,
            'name'                  => 'mytheme_page_select',
            'id'                    => 'mytheme_page_select',
            'class'                 => null,
            'show_option_none'      => null,
            'show_option_no_change' => null,
            'option_none_value'     => esc_html__( '&ndash; Select &ndash;', 'mytheme' ),
          );
          ?>
          <label for="mytheme_page_select"><?php esc_attr_e( 'Pages Select', 'mytheme' ); ?></label>
          <?php wp_dropdown_pages( $args_pages ); ?>
        </p>
        <p>
          <?php $args_cat = array(
            'show_option_all'    => '',
            'show_option_none'   => '',
            'option_none_value'  => '-1',
            'orderby'            => 'ID',
            'order'              => 'ASC',
            'show_count'         => 0,
            'hide_empty'         => 1,
            'child_of'           => 0,
            'exclude'            => '',
            'include'            => '',
            'echo'               => 1,
            'selected'           => $mytheme_category_select,
            'hierarchical'       => 0,
            'name'               => 'mytheme_category_select',
            'id'                 => 'mytheme_category_select',
            'class'              => 'postform',
            'depth'              => 0,
            'tab_index'          => 0,
            'taxonomy'           => 'category',
            'hide_if_empty'      => false,
            'value_field'	     => 'term_id',
          ); ?>
          <label for="mytheme_category_select"><?php esc_attr_e( 'Category Select', 'mytheme' ); ?></label>
          <?php
          wp_dropdown_categories( $args_cat );
          ?>
        </p>
      </div>
      <div class="right_part">
        <p>
          <label for="mytheme_datepicker">
            <?php esc_html_e( 'Pick a date', 'mytheme' ); ?>
          </label>
          <input type="text" id="mytheme_datepicker" name="mytheme_datepicker" value="<?php echo esc_attr( $mytheme_datepicker ); ?>" />
        </p>
        <p>
          <label for="mytheme_slider"><?php esc_html_e( 'Choose a value:', 'mytheme' ); ?></label>
          <input type="text" id="mytheme_slider" name="mytheme_slider" readonly value="<?php echo esc_attr( $mytheme_slider ); ?>"/>
          <div id="slider-range"></div>
        </p>

        <!-- Gallery Media -->
        <p>
          <label for="mytheme_featured_image"><?php esc_html_e( 'Featured Image', 'mytheme' ); ?></label>
          <span class="uploaded_image">
          <?php
            if ( !isset($mytheme_featured_image)) {
              $mytheme_featured_image = '';
            }
            if ( isset($mytheme_featured_image) && '' !== $mytheme_featured_image ) {
              echo '<img src="'. esc_url( $mytheme_featured_image ) .'"';
            }
          ?>
          </span>
          <input type="text" name="mytheme_featured_image" value="<?php echo esc_url( $mytheme_featured_image ); ?>" class="featured_image_upload">
          <input type="button" name="image_upload" value="<?php esc_html_e( 'Upload Image', 'mytheme' ); ?>" class="button upload_image_button">
          <input type="button" name="remove_image_upload" value="<?php esc_html_e( 'Remove Image', 'mytheme' ); ?>" class="button remove_image_button">
        </p>

        <p>
          <label for="mytheme_gallery"><?php esc_html_e( 'Project Gallery', 'mytheme' ); ?></label>
          <div class="separator gallery_images">
            <?php
              $img_array = ( isset( $mytheme_gallery ) && '' !== $mytheme_gallery ) ? explode( ',', $mytheme_gallery ) : '';
              if ( '' !== $img_array ) {
                foreach ( $img_array as $img ) {
                  echo '<div class="gallery-item" data-id="' . esc_attr( $img ) . '"><div class="remove">x</div>' . wp_get_attachment_image( $img ) . '</div>';
                }
              }
            ?>
          </div>
          <p class="separator gallery_buttons">
            <input id="mytheme_gallery_input" type="hidden" name="mytheme_gallery" value="<?php echo esc_attr( $mytheme_gallery ?? '' ); ?>" />
            <input id="manage_gallery" title="<?php esc_html_e( 'Manage gallery', 'mytheme' ); ?>" type="button" class="button" value="<?php esc_html_e( 'Manage gallery', 'mytheme' ); ?>" />
            <input id="empty_gallery" title="<?php esc_html_e( 'Empty gallery', 'mytheme' ); ?>" type="button" class="button" value="<?php esc_html_e( 'Empty gallery', 'mytheme' ); ?>" />
          </p>
        </p>
      </div>
    </div>
    <?php


    // Gallary Image Media

    $mytheme_featured_image = ( isset( $meta['mytheme_featured_image'][0] ) ) ? $meta['mytheme_featured_image'][0] : '';
    $mytheme_gallery = ( isset( $meta['mytheme_gallery'][0] ) ) ? $meta['mytheme_gallery'][0] : '';



  }
}

add_action( 'save_post', 'mytheme_save_metaboxes' );

if ( ! function_exists( 'mytheme_save_metaboxes' ) ) {
  /**
   * Save controls from the meta boxes
   *
   * @param  int $post_id Current post id.
   * @since 1.0.0
   */
  function mytheme_save_metaboxes( $post_id ) {
    /*
     * We need to verify this came from the our screen and with proper authorization,
     * because save_post can be triggered at other times. Add as many nonces, as you
     * have metaboxes.
     */
    if ( ! isset( $_POST['mytheme_control_meta_box_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['mytheme_control_meta_box_nonce'] ), 'mytheme_control_meta_box' ) ) { // Input var okay.
      return $post_id;
    }

    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) { // Input var okay.
      if ( ! current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
      }
    } else {
      if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
      }
    }

    /*
     * If this is an autosave, our form has not been submitted,
     * so we don't want to do anything.
     */
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return $post_id;
    }

    /* Ok to save */

    if ( isset( $_POST['mytheme_input_field'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_input_field', sanitize_text_field( wp_unslash( $_POST['mytheme_input_field'] ) ) ); // Input var okay.
    }

    if ( isset( $_POST['mytheme_radio_value'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_radio_value', sanitize_text_field( wp_unslash( $_POST['mytheme_radio_value'] ) ) ); // Input var okay.
    }

    $mytheme_checkbox_value = ( isset( $_POST['mytheme_checkbox_value'] ) && '1' === $_POST['mytheme_checkbox_value'] ) ? 1 : 0; // Input var okay.
    update_post_meta( $post_id, 'mytheme_checkbox_value', esc_attr( $mytheme_checkbox_value ) );

    if ( isset( $_POST['mytheme_custom_select'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_custom_select', sanitize_text_field( wp_unslash( $_POST['mytheme_custom_select'] ) ) ); // Input var okay.
    }

    if ( isset( $_POST['mytheme_page_select'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_page_select', sanitize_text_field( wp_unslash( $_POST['mytheme_page_select'] ) ) ); // Input var okay.
    }

    if ( isset( $_POST['mytheme_category_select'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_category_select', sanitize_text_field( wp_unslash( $_POST['mytheme_category_select'] ) ) ); // Input var okay.
    }

    if ( isset( $_POST['mytheme_datepicker'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_datepicker', sanitize_text_field( wp_unslash( $_POST['mytheme_datepicker'] ) ) ); // Input var okay.
    }

    if ( isset( $_POST['mytheme_slider'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_slider', sanitize_text_field( wp_unslash( $_POST['mytheme_slider'] ) ) ); // Input var okay.
    }

    if ( isset( $_POST['mytheme_featured_image'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_featured_image', sanitize_text_field( wp_unslash( $_POST['mytheme_featured_image'] ) ) ); // Input var okay.
    }

    if ( isset( $_POST['mytheme_gallery'] ) ) { // Input var okay.
      update_post_meta( $post_id, 'mytheme_gallery', sanitize_text_field( wp_unslash( $_POST['mytheme_gallery'] ) ) ); // Input var okay.
    }

  }
}