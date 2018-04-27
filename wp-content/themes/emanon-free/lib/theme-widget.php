<?php
/**
* Theme Widet
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.3
*/

/*------------------------------------------------------------------------------------
/* ウィジェット
/*----------------------------------------------------------------------------------*/
if ( !function_exists( 'emanon_widgets_init' ) ):
function emanon_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar','emanon' ),
		'id' => 'sidebar-widget',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
		) );

	register_sidebar( array(
		'name' => __( 'Sidebar fixed','emanon' ),
		'id' => 'sidebar-widget-fixed',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="side-widget-title"><h3><span>',
		'after_title' => '</span></h3></div>',
		) );

	register_sidebar( array(
		'name' => __( 'Ad 300px 250px','emanon' ),
		'id' => 'ad-300',
		'before_widget' => '<div class="ad-300">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Header right area','emanon' ),
		'id' => 'header-r-widget',
		'before_widget' => '<div class="header-widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>',
		) );

	register_sidebar( array(
		'name' => __( 'Mobile menu area','emanon' ),
		'id' => 'mobile-menu-widget',
		'before_widget' => '<div class="mobile-menu-widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="mobile-menu-label">',
		'after_title' => '</div>',
		) );

	register_sidebar( array(
		'name' => __( 'Footer left area','emanon' ),
		'id' => 'footer-w-left',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Footer center area','emanon' ),
		'id' => 'footer-w-center',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );

	register_sidebar( array(
		'name' => __( 'Footer right area','emanon' ),
		'id' => 'footer-w-right',
		'before_widget' => '<div class="footer-widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'emanon_widgets_init' );
endif;

/*------------------------------------------------------------------------------------
/* ユーザープロフィール項目の追加
/*----------------------------------------------------------------------------------*/
function emanon_user_meta( $item ) {
	$item[ 'user_twitter' ] = __( 'Twitter profile url:', 'emanon' );
	$item[ 'user_facebook' ] = __( 'Facebook profile url:', 'emanon' );
	$item[ 'user_googleplus' ] = __( 'GooglePlus profile url:' ,'emanon' );
	$item[ 'user_instagram' ] = __( 'Instagram profile url:', 'emanon' );
	$item[ 'user_position' ] = __( 'Position', 'emanon' );
	return $item;
	}
add_filter( 'user_contactmethods', 'emanon_user_meta', 10, 1 );


// 名姓の項目を姓名の順に変更
function emanon_user_name() {
	?><script>
	jQuery(function($){
	$('#last_name').closest('tr').after($('#first_name').closest('tr'));
	});
	</script><?php
}
add_action( 'admin_footer-user-new.php', 'emanon_user_name' );
add_action( 'admin_footer-user-edit.php', 'emanon_user_name' );
add_action( 'admin_footer-profile.php', 'emanon_user_name' );

add_action( 'admin_footer', 'render_japan_style_name_order' );
function render_japan_style_name_order() {
// ユーザー一覧以外ではjavascriptを出力しない
	global $pagenow;
	if( "users.php" !== $pagenow ) return;

	$html =<<<EOF
	<script type="text/javascript">
			jQuery(document).ready(function(){
					jQuery("td.column-name").each(function(){
							name = String(jQuery(this).text()).replace(/(^\s+)|(\s+$)/g,'');
							if( name ) {
									arr = name.split(" ");
									if( arr.length === 2 ) {
											jQuery(this).text(arr[1]+" "+arr[0]);
									}
							}
					});
			});
	</script>
EOF;
	echo $html;
}

/*------------------------------------------------------------------------------------
/* ウィジェット追加 Myプロフィール
/*----------------------------------------------------------------------------------*/
class My_Profile extends WP_Widget {
function __construct() {
	$widget_ops = array( 'classname' => 'widget_profile', 'description' => __( 'Profile widget','emanon' ) );
	parent::__construct(
	'',
	__( 'Profile widget','emanon' ),
	$widget_ops
	);
}

function widget( $args, $instance ) {
	extract( $args );
	$title = apply_filters( 'widget_title', $instance['title'] );
	$my_name = apply_filters( 'widget_my_name', $instance['my_name'] );
	$my_image = apply_filters( 'widget_my_image', $instance['my_image'] );
	$link = apply_filters( 'widget_link', $instance['link'] );
	$my_profile = apply_filters( 'widget_my_profile', $instance['my_profile'] );
	$twitter = apply_filters( 'widget_twitter', $instance['twitter'] );
	$facebook = apply_filters( 'widget_facebook', $instance['facebook'] );
	$googleplus = apply_filters( 'widget_googleplus', $instance['googleplus'] );
	$instagram = apply_filters( 'widget_instagram', $instance['instagram'] );
?>

<?php echo $args[ 'before_widget' ];
if ( ! empty( $title ) ) {
	echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];
} ?>
<div id="my-profile">
<?php if( $my_image ) { ?><div><?php if( $link ){ ?><a href="<?php echo $link ?>"><?php } ?><img src="<?php echo $my_image; ?>" alt="<?php echo $my_name; ?>"><?php if( $link ){ ?></a><?php } ?></div><?php } ?>
	<h4><?php if( $link ){ ?><a href="<?php echo $link ?>"><?php } ?><?php echo $my_name; ?><?php if( $link ){ ?></a><?php } ?></h4>
		<?php if( $twitter || $facebook || $googleplus || $instagram ){ ?>
		<ul>
			<?php } ?>
			<?php if( $twitter ){ ?>
			<li class="widget-twitter"><a href="<?php echo $twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php } ?>
			<?php if( $facebook ){ ?>
			<li class="widget-facebook"><a href="<?php echo $facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php } ?>
			<?php if( $googleplus ){ ?>
			<li class="widget-googleplus"><a href="<?php echo $googleplus ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<?php } ?>
			<?php if( $instagram ){ ?>
			<li class="widget-instagram"><a href="<?php echo $instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<?php } ?>
			<?php if( $twitter || $facebook || $googleplus || $instagram){ ?>
		</ul>
		<?php } ?>
	<div class="profile-text">
		<p><?php echo $my_profile; ?></p>
	</div>
</div>

<?php echo $after_widget; ?>
<?php
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['title'] = strip_tags( $new_instance['title'] );
	$instance['my_name'] = trim( $new_instance['my_name'] );
	$instance['my_image'] = trim( $new_instance['my_image'] );
	$instance['link'] = trim( $new_instance['link'] );
	$instance['my_profile'] = nl2br( $new_instance['my_profile'] );
	$instance['twitter'] = trim( $new_instance['twitter'] );
	$instance['facebook'] = trim( $new_instance['facebook'] );
	$instance['googleplus'] = trim( $new_instance['googleplus'] );
	$instance['instagram'] = trim( $new_instance['instagram'] );
	return $instance;
}

function form( $instance ) {
	if( empty( $instance ) ){
	$instance = array('title' => '', 'my_name' => '', 'my_image' => '', 'link' => '', 'my_profile' => '', 'twitter' => '', 'facebook' => '', 'googleplus' => '', 'instagram' => '');
	}
	$title = esc_attr( $instance['title'] );
	$my_name = esc_attr( $instance['my_name'] );
	$my_image = esc_url_raw( $instance['my_image'] );
	$link = esc_url( $instance['link'] );
	$my_profile = esc_textarea($instance['my_profile'] );
	$twitter = esc_url( $instance['twitter'] );
	$facebook = esc_url( $instance['facebook'] );
	$googleplus = esc_url( $instance['googleplus'] );
	$instagram = esc_url( $instance['instagram'] );
?>

	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">
		<?php _e( 'Title:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'my_name' ); ?>">
		<?php _e( 'Name:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'my_name' ); ?>" name="<?php echo $this->get_field_name( 'my_name' ); ?>" type="text" value="<?php echo $my_name; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'my_image' ); ?>">
		<?php _e( 'Upload image URL:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'my_image' ); ?>" name="<?php echo $this->get_field_name( 'my_image' ); ?>" type="text" value="<?php echo $my_image; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'my_profile' ); ?>">
		<?php _e( 'Profile text:','emanon' ); ?>
		</label>
		<textarea class="widefat" rows="3" colls="4" id="<?php echo $this->get_field_id( 'my_profile' ); ?>" name="<?php echo $this->get_field_name( 'my_profile' ); ?>"><?php echo $my_profile; ?></textarea>
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'twitter' ); ?>">
		<?php _e( 'Twitter profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo $twitter; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'facebook' ); ?>">
		<?php _e( 'Facebook profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo $facebook; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>">
		<?php _e( 'GooglePlus profile url:' ,'emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" type="text" value="<?php echo $googleplus; ?>">
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'instagram' ); ?>">
		<?php _e( 'Instagram profile url:','emanon' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo $instagram; ?>">
	</p>

	<?php
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget( "My_Profile" );' ));