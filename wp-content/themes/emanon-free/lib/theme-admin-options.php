<?php
/**
* Admin Customize
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.1
*/

/*------------------------------------------------------------------------------------
/* 記事タイトル 文字数のカウント
/*----------------------------------------------------------------------------------*/

function title_counter() {
	?>
	<script type="text/javascript">
		jQuery(function($) { title_count_field( "#title" ); });
	
		function title_count_field( target ) {
			jQuery( target ).after( "<span class=\"title_word_counter\" style='display:block; margin:0 15px 0 0;'></span>" );
			jQuery( target ).bind({
			keyup: function() {
			title_set_counter();
			},
			change: function() {
			title_set_counter();
		}
		});
	
		title_set_counter();
		function title_set_counter(){
			jQuery( "span.title_word_counter" ).text( "<?php _e( 'word counter:', 'emanon' ); ?>"+jQuery( target ) .val().length );
			};
		}
	</script>
	<?php
}
add_action( 'admin_head-post.php', 'title_counter' );
add_action( 'admin_head-post-new.php', 'title_counter' );

/*------------------------------------------------------------------------------------
/* Meta description 文字数のカウント
/*----------------------------------------------------------------------------------*/
function meta_description_counter() {
	?>
	<script type="text/javascript">
		jQuery( document ).ready(function($) { 
			if( 'post' == $('#post_type').val() || 'page' == $('#post_type').val() ) { 
			meta_description_count_field( "#emanon_meta_description" );
			}
		});

		function meta_description_count_field( target ) {
			jQuery( target ).after( "<span class=\"meta_description_word_counter\" style='display:block; margin:0 15px 0 0;'></span>" );
			jQuery( target ).bind({
			keyup: function() {
			meta_description_set_counter();
			},
			change: function() {
			meta_description_set_counter();
		}
		});

		meta_description_set_counter();
		function meta_description_set_counter(){
			jQuery( "span.meta_description_word_counter" ).text( "<?php _e( 'word counter:', 'emanon' ); ?>"+jQuery( target ).val().length );
			};
		}
	</script>
	<?php
}
add_action( 'admin_head-post.php', 'meta_description_counter' );
add_action( 'admin_head-post-new.php', 'meta_description_counter' );

/*------------------------------------------------------------------------------------
/* 広告非表示の設定
/*----------------------------------------------------------------------------------*/
add_action( 'admin_menu', 'add_custom_menu' );
function add_custom_menu() {
	add_meta_box( 'hide_ad_setting', __( 'Hide ad setting', 'emanon' ), 'hide_ad_setting_form', 'post', 'side' );
	add_meta_box( 'hide_ad_setting', __( 'Hide ad setting', 'emanon' ), 'hide_ad_setting_form', 'page', 'side' );
}

//Form表示
function hide_ad_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	$hide_ad_value = get_post_meta( $post->ID, 'emanon_hide_ad', true );

	if( $hide_ad_value == 1 ) {
		$hide_ad_checked = "checked";
		} else { $hide_ad_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_hide_ad" id="emanon_hide_ad" value="1"' . $hide_ad_checked . '/>'. __( 'Hide ad' , 'emanon') . '</label>';
}

//入力内容の更新処理
add_action( 'save_post', 'hide_ad_setting_save' );

function hide_ad_setting_save( $post_id ) {
	global $post;

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}


	 $data = isset($_POST['emanon_hide_ad']) ? $_POST['emanon_hide_ad']: null;

	if( get_post_meta( $post_id, 'emanon_hide_ad') == "" ) {
		add_post_meta ( $post_id, 'emanon_hide_ad', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_hide_ad', true ) ) {
		update_post_meta( $post_id, 'emanon_hide_ad', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_hide_ad', get_post_meta( $post_id, 'emanon_hide_ad', true ) );
	}

}

/*------------------------------------------------------------------------------------
/* CTA表示の設定
/*----------------------------------------------------------------------------------*/
add_action( 'admin_menu', 'cta_custom_menu' );
function cta_custom_menu() {
	add_meta_box( 'cta_setting', __( 'CTA setting', 'emanon' ), 'cta_setting_form', 'post', 'side' );
}

//Form表示
function cta_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	$cta_type_value = get_post_meta( $post->ID,'emanon_cta_type', true );

	echo '<select name="emanon_cta_type">';

	echo '<option value=""';
	if( $cta_type_value == '' ){ echo 'selected'; }
	echo '>'. __( 'Common' , 'emanon') .' </option>';
	echo '</select><br>' . "\n";

	$hide_cta_value = get_post_meta( $post->ID, 'emanon_hide_cta', true );

	if( $hide_cta_value == 1 ) {
		$hide_cta_checked = "checked";
		} else { $hide_cta_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_hide_cta" id="emanon_hide_cta" value="1"' . $hide_cta_checked . '/>'. __( 'Hide cta' , 'emanon') . '</label><br>' . "\n";

}

//入力内容の更新処理 cta setting
add_action( 'save_post', 'cta_setting_save' );

function cta_setting_save( $post_id ) {
	global $post;

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$data = isset($_POST['emanon_cta_type']) ? $_POST['emanon_cta_type']: null;

	if( get_post_meta( $post_id, 'emanon_cta_type') == "" ) {
		add_post_meta ( $post_id, 'emanon_cta_type', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_cta_type', true ) ) {
		update_post_meta( $post_id, 'emanon_cta_type', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_cta_type', get_post_meta( $post_id, 'emanon_cta_type', true ) );
	}

}

//入力内容の更新処理 hide cta
add_action( 'save_post', 'hide_cta_setting_save' );

function hide_cta_setting_save( $post_id ) {
	global $post;

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$data = isset($_POST['emanon_hide_cta']) ? $_POST['emanon_hide_cta']: null;

	if( get_post_meta( $post_id, 'emanon_hide_cta') == "" ) {
		add_post_meta ( $post_id, 'emanon_hide_cta', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_hide_cta', true ) ) {
		update_post_meta( $post_id, 'emanon_hide_cta', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_hide_cta', get_post_meta( $post_id, 'emanon_hide_cta', true ) );
	}

}

/*------------------------------------------------------------------------------------
/* おすすめ記事の表示設定
/*----------------------------------------------------------------------------------*/
add_action( 'admin_menu', 'featured_entry_menu' );
function featured_entry_menu() {
	add_meta_box( 'featured_entry_setting', __( 'Featured entry setting', 'emanon' ), 'featured_entry_setting_form', 'post', 'side' );
	add_meta_box( 'featured_entry_setting', __( 'Featured entry setting', 'emanon' ), 'featured_entry_setting_form', 'page', 'side' );
}

//Form表示
function featured_entry_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	$featured_entry_value = get_post_meta( $post->ID, 'emanon_featured_entry', true );

	if( $featured_entry_value == 1 ) {
		$featured_entry_checked = "checked";
		} else { $featured_entry_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_featured_entry" id="emanon_featured_entry" value="1"' . $featured_entry_checked . '/>'. __( 'Display featured entry' , 'emanon') . '</label>';
}

//入力内容の更新処理
add_action( 'save_post', 'featured_entry_setting_save' );

function featured_entry_setting_save( $post_id ) {
	global $post;

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	$data = isset($_POST['emanon_featured_entry']) ? $_POST['emanon_featured_entry']: null;

	if( get_post_meta( $post_id, 'emanon_featured_entry') == "" ) {
		add_post_meta ( $post_id, 'emanon_featured_entry', $data, true );
		} elseif ( $data != get_post_meta( $post_id, 'emanon_featured_entry', true ) ) {
		update_post_meta( $post_id, 'emanon_featured_entry', $data );
		} elseif ( $data == "") {
		delete_post_meta( $post_id, 'emanon_featured_entry', get_post_meta( $post_id, 'emanon_featured_entry', true ) );
	}

}

/*------------------------------------------------------------------------------------
/* SEO設定
/*----------------------------------------------------------------------------------*/
add_action( 'add_meta_boxes', 'add_seo_setting' );
function add_seo_setting() {
	add_meta_box('seo_setting', __( 'SEO setting', 'emanon' ), 'seo_setting_form', 'page', 'normal', 'high');
	add_meta_box('seo_setting', __( 'SEO setting', 'emanon' ), 'seo_setting_form', 'post', 'normal', 'high');
}

//Form表示
function seo_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	echo '<label>' . __( 'meta keywords' , 'emanon' ) . '</label><br>';
	echo '<input type="text" name="emanon_meta_keywords" id="emanon_meta_keywords" value="' . esc_html( get_post_meta( $post->ID, 'emanon_meta_keywords', true ) ) . '" size="20" style="width:50%" />';
	echo '<p>' . __( 'Set the peculiar keyword indicating this page contents.(Option)' , 'emanon') . '<br>';
	echo __( 'During Meta keyword ,(separated by single-byte comma). (Example) keyword 1,keyword 2' , 'emanon' ) . '</p>';

	echo '<label>' . __( 'meta description' , 'emanon' ) . '</label><br>';
	echo '<textarea name="emanon_meta_description" id="emanon_meta_description" cols="60" rows="4" style="width:99%">' . esc_html( get_post_meta( $post->ID, 'emanon_meta_description', true) ) . '</textarea>';
	echo '<p>' . __( 'Set the summarized writing indicating page contents .(Option)' , 'emanon' ) . '<br />';
	echo	__( 'Input full size around 120 characters' , 'emanon' ) . __( 'In the case of non-input, 120 characters are extracted from the post.' , 'emanon' ) . '</p><br />';

	$noindex_value = get_post_meta( $post->ID, 'emanon_noindex', true );

	if( $noindex_value	== 1 ) {
		$noindex_checked	= "checked";
		} else { $noindex_checked	 = "/";
	}

	echo '<label><input type="checkbox" name="emanon_noindex" id="emanon_noindex" value="1"' .	$noindex_checked . '/></label>' ;
	echo __( 'noindex' , 'emanon') . '<br />';
	echo '<p>' . __( 'Discourage search engines from indexing this page' , 'emanon' ) . '</p>';

	$nofollow_value = get_post_meta( $post->ID, 'emanon_nofollow', true );

	if( $nofollow_value == 1 ) {
		$nofollow_checked = "checked";
		} else { $nofollow_checked = "/";
	}

	echo '<label><input type="checkbox" name="emanon_nofollow" id="emanon_nofollow" value="1"' . $nofollow_checked . '/></label>' ;
	echo	__( 'nofollow' , 'emanon') . '<br />';
	echo '<p>' . __( 'Discourage search engines from following this page' , 'emanon' ) . '</p></label>';

}

//入力内容の更新処理
add_action( 'save_post', 'seo_setting_save' );
function seo_setting_save($post_id) {
	global $post;

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

		$meta_keywords = isset( $_POST[ 'emanon_meta_keywords' ] ) ? $_POST[ 'emanon_meta_keywords' ] : null;

		if( get_post_meta ( $post_id, 'emanon_meta_keywords') == "" ) {
			add_post_meta ( $post_id, 'emanon_meta_keywords', $meta_keywords, true );
			} elseif ( $meta_keywords != get_post_meta( $post_id, 'emanon_meta_keywords', true ) ) {
			update_post_meta( $post_id, 'emanon_meta_keywords', $meta_keywords );
			} elseif ( $meta_keywords == "" ) {
			delete_post_meta( $post_id, 'emanon_meta_keywords', get_post_meta( $post_id, 'emanon_meta_keywords', true ) );
		}

		$meta_description = isset( $_POST[ 'emanon_meta_description' ] ) ? $_POST[ 'emanon_meta_description' ] : null;

		if( get_post_meta ( $post_id, 'emanon_meta_description' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_meta_description', $meta_description, true );
			} elseif ( $meta_description != get_post_meta( $post_id, 'emanon_meta_description', true ) ) {
			update_post_meta( $post_id, 'emanon_meta_description', $meta_description );
			} elseif ( $meta_description == "" ) {
			delete_post_meta( $post_id, 'emanon_meta_description', get_post_meta( $post_id, 'emanon_meta_description', true ) );
		}

		$meta_noindex = isset( $_POST[ 'emanon_noindex' ] ) ? $_POST[ 'emanon_noindex' ] : null;

		if( get_post_meta ( $post_id, 'emanon_noindex' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_noindex', $meta_noindex, true );
			} elseif ( $meta_noindex != get_post_meta( $post_id, 'emanon_noindex', true ) ) {
			update_post_meta( $post_id, 'emanon_noindex', $meta_noindex );
			} elseif ( $meta_noindex == "" ) {
			delete_post_meta( $post_id, 'emanon_noindex', get_post_meta( $post_id, 'emanon_noindex', true ) );
		}

		$meta_nofollow = isset( $_POST[ 'emanon_nofollow' ] ) ? $_POST[ 'emanon_nofollow' ] : null;

		if( get_post_meta ( $post_id, 'emanon_nofollow' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_nofollow', $meta_nofollow, true );
			} elseif ( $meta_nofollow != get_post_meta( $post_id, 'emanon_nofollow', true ) ) {
			update_post_meta( $post_id, 'emanon_nofollow', $meta_nofollow );
			} elseif ( $meta_nofollow == "" ) {
			delete_post_meta( $post_id, 'emanon_nofollow', get_post_meta( $post_id, 'emanon_nofollow', true ) );
		}

}

/*------------------------------------------------------------------------------------
/* カスタムCSS設定
/*----------------------------------------------------------------------------------*/
add_action( 'add_meta_boxes', 'add_custom_css_setting' );
function add_custom_css_setting() {
	add_meta_box('custom_css', __( 'Custom CSS setting', 'emanon' ), 'custom_css_setting_form', 'page', 'normal', 'high');
	add_meta_box('custom_css', __( 'Custom CSS setting', 'emanon' ), 'custom_css_setting_form', 'post', 'normal', 'high');
}

// Form表示
function custom_css_setting_form() {
	global $post;

	wp_nonce_field( wp_create_nonce(__FILE__), 'my_nonce' );

	echo '<textarea name="emanon_custom_css_setting" id="emanon_custom_css_setting" cols="60" rows="4" style="width:99%">' . esc_html( get_post_meta( $post->ID, 'emanon_custom_css_setting', true) ) . '</textarea>';
	echo '<p>' . __( 'Enter CSS code of this page. Style tag is not required. Code example: .example { font-size: 20px; color: #000; }' , 'emanon' ) . '</p>';

}

//入力内容の更新処理
add_action( 'save_post', 'custom_css_setting_save' );
function custom_css_setting_save($post_id) {
	global $post;

	$my_nonce = isset( $_POST[ 'my_nonce' ] ) ? $_POST[ 'my_nonce' ] : null;

	if( !wp_verify_nonce ( $my_nonce, wp_create_nonce (__FILE__ ) ) ) { return $post_id; }
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return $post_id; }
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

		$custom_css_setting = isset( $_POST[ 'emanon_custom_css_setting' ] ) ? $_POST[ 'emanon_custom_css_setting' ] : null;

		if( get_post_meta ( $post_id, 'emanon_custom_css_setting' ) == "" ) {
			add_post_meta ( $post_id, 'emanon_custom_css_setting', $custom_css_setting, true );
			} elseif ( $custom_css_setting != get_post_meta( $post_id, 'emanon_custom_css_setting', true ) ) {
			update_post_meta( $post_id, 'emanon_custom_css_setting', $custom_css_setting );
			} elseif ( $custom_css_setting == "" ) {
			delete_post_meta( $post_id, 'emanon_custom_css_setting', get_post_meta( $post_id, 'emanon_custom_css_setting', true ) );
		}
}

/* ---------------------------------------------------------------------------
/* エディタボタン追加
/*----------------------------------------------------------------------------------*/
$qtags_add_button = get_theme_mod( 'qtags_add_button', true );

if ( $qtags_add_button ):
	function emanon_add_quicktags() {
	 if (wp_script_is( 'quicktags' ) ) {
	?>
		<script type="text/javascript">
		QTags.addButton( 'h2', 'h2', '<h2>', '</h2>', '', 'h2', '1' );
		QTags.addButton( 'h3', 'h3', '<h3>', '</h3>', '', 'h3', '2' );
		QTags.addButton( 'h4', 'h4', '<h4>', '</h4>', '', 'h4', '3' );
		QTags.addButton( 'h5', 'h5', '<h5>', '</h5>', '', 'h5', '4' );
		QTags.addButton( 'h6', 'h6', '<h6>', '</h6>', '', 'h6', '5' );
		QTags.addButton( 'p', 'p', '<p>', '</p>', '', 'p', '6' );

		QTags.addButton( 'small','小文字','<span class="small">', '</span>', '','small', '10')
		QTags.addButton( 'big','大文字','<span class="big">', '</span>', '','large', '11')

		QTags.addButton( 'black bold','太文字（黒）','<span class="important-bold">', '</span>', '','black bold', '12');
		QTags.addButton( 'blue bold','太文字（青）','<span class="success-bold">', '</span>', '','blue bold', '13')
		QTags.addButton( 'red bold','太文字（赤）','<span class="danger-bold">', '</span>', '','red bold', '14')

		QTags.addButton('blue	 marker','アンダーライン（黄）','<span class="important-marker">','</span>', '','blue	 marker', '17')
		QTags.addButton('yellow under','アンダーライン（青）','<span class="success-under">','</span>', '','yellow under', '16')
		QTags.addButton('red under','アンダーライン（赤）','<span class="danger-under">','</span>', '','red under', '15')

		QTags.addButton('yellow marker','マーカー（黄）','<span class="important-marker">','</span>', '','yellow marker', '18')

		QTags.addButton( 'text-left','左寄せ','<div class="text-left">', '</div>', '','text-left', '20')
		QTags.addButton( 'text-center','中央寄せ','<div class="text-center">', '</div>', '','text-center', '21')
		QTags.addButton( 'text-right','右寄せ','<div class="text-right">', '</div>', '','text-right', '22')

		QTags.addButton( 'box white', '補足説明枠', '<div class="box-default">', '</div>', '', 'box white', '23');
		QTags.addButton( 'box gray', '注意説明枠', '<div class="box-info">', '</div>', '', 'box gray', '24');

		QTags.addButton( 'nextpage', 'ページ送り', '<!--nextpage-->', '', '', 'nextpage', '24' );
		QTags.addButton( 'hr', '水平線', '<hr>', '', '', 'hr', '25' );

		QTags.addButton( 'cite','引用元','<cite>引用元: <a href="" target="_blank">', '</a></cite>', '','cite', '40')

		QTags.addButton( 'btn s', 'ボタン 小', '<span class="btn btn-sm"><a href="">', '</a></span>', '', 'btn s', '41' );
		QTags.addButton( 'btn m', 'ボタン 中', '<span class="btn btn-mid"><a href="">', '</a></span>', '', 'btn m', '42' );
		QTags.addButton( 'btn l', 'ボタン 大', '<span class="btn btn-lg"><a href="">', '</a></span>', '', 'btn l', '43' );

		QTags.addButton( 'col2', '2カラム', '<div class="clearfix"><div class="col6 first">左</div><div class="col6">右</div></div>', '', 'col2', '44' );
		QTags.addButton( 'col3', '3カラム', '<div class="clearfix"><div class="col4 first">左</div><div class="col4">中央</div><div class="col4">右</div></div>', '', 'col3', '45' );

		</script>
	<?php
		}
	}
	add_action( 'admin_print_footer_scripts', 'emanon_add_quicktags' );
endif;