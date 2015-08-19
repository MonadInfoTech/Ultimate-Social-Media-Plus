<?php
//Add Subscriber form css
add_action("wp_head", "sfsi_plus_addStyleFunction");
function sfsi_plus_addStyleFunction()
{
	$option9 = unserialize(get_option('sfsi_plus_section9_options',false));
	?>
    	<style type="text/css" aria-selected="true">
			.sfsi_plus_subscribe_Popinner
			{
				<?php if($option9['sfsi_plus_form_adjustment'] == 'yes') : ?>
				width: 100% !important;
				height: auto !important;
				<?php else: ?>
				width: <?php echo $option9['sfsi_plus_form_width'] ?>px !important;
				height: <?php echo $option9['sfsi_plus_form_height'] ?>px !important;
				<?php endif;?>
				<?php if($option9['sfsi_plus_form_border'] == 'yes') : ?>
				border: <?php echo $option9['sfsi_plus_form_border_thickness']."px solid ".$option9['sfsi_plus_form_border_color'];?> !important;
				<?php endif;?>
				float: left !important;
				padding: 18px 20px !important;
				background-color: <?php echo $option9['sfsi_plus_form_background'] ?> !important;
			}
			.sfsi_plus_subscribe_Popinner h5
			{
				font-family: <?php echo $option9['sfsi_plus_form_heading_font'] ?> !important;
				<?php if($option9['sfsi_plus_form_heading_fontstyle'] != 'bold') {?>
				font-style: <?php echo $option9['sfsi_plus_form_heading_fontstyle'] ?> !important;
				<?php } else{ ?>
				font-weight: <?php echo $option9['sfsi_plus_form_heading_fontstyle'] ?> !important;
				<?php }?>
				color: <?php echo $option9['sfsi_plus_form_heading_fontcolor'] ?> !important;
				font-size: <?php echo $option9['sfsi_plus_form_heading_fontsize']."px" ?> !important;
				text-align: <?php echo $option9['sfsi_plus_form_heading_fontalign'] ?> !important;
				margin: 0 0 10px !important;
    			padding: 0 !important;
			}
			.sfsi_plus_subscription_form_field {
				float: left !important;
				margin: 5px 0 !important;
				width: 100% !important;
			}
			.sfsi_plus_subscription_form_field input {
				width: 100% !important;
				padding: 10px 0px !important;
			}
			.sfsi_plus_subscribe_Popinner input[type=email]
			{
				font-family: <?php echo $option9['sfsi_plus_form_field_font'] ?> !important;
				<?php if($option9['sfsi_plus_form_field_fontstyle'] != 'bold') {?>
				font-style: <?php echo $option9['sfsi_plus_form_field_fontstyle'] ?> !important;
				<?php } else{ ?>
				font-weight: <?php echo $option9['sfsi_plus_form_field_fontstyle'] ?> !important;
				<?php }?>
				color: <?php echo $option9['sfsi_plus_form_field_fontcolor'] ?> !important;
				font-size: <?php echo $option9['sfsi_plus_form_field_fontsize']."px" ?> !important;
				text-align: <?php echo $option9['sfsi_plus_form_field_fontalign'] ?> !important;
			}
			.sfsi_plus_subscribe_Popinner input[type=submit]
			{
				font-family: <?php echo $option9['sfsi_plus_form_button_font'] ?> !important;
				<?php if($option9['sfsi_plus_form_button_fontstyle'] != 'bold') {?>
				font-style: <?php echo $option9['sfsi_plus_form_button_fontstyle'] ?> !important;
				<?php } else{ ?>
				font-weight: <?php echo $option9['sfsi_plus_form_button_fontstyle'] ?> !important;
				<?php }?>
				color: <?php echo $option9['sfsi_plus_form_button_fontcolor'] ?> !important;
				font-size: <?php echo $option9['sfsi_plus_form_button_fontsize']."px" ?> !important;
				text-align: <?php echo $option9['sfsi_plus_form_button_fontalign'] ?> !important;
				background-color: <?php echo $option9['sfsi_plus_form_button_background'] ?> !important;
			}
		</style>
	<?php
}
// Creating the widget 
class sfsiPlus_subscriber_widget extends WP_Widget {

	function __construct()
	{
		parent::__construct(
			// Base ID of your widget
			'sfsiPlus_subscriber_widget', 
	
			// Widget name will appear in UI
			__('Ultimate Social Plus Subscribe Form', 'sfsiPlus_subscriber_widget_domain'), 
	
			// Widget description
			array( 'description' => __( 'Ultimate Social Plus Subscribe Form', 'sfsiPlus_subscriber_widget_domain' ), ) 
		);
	}

	public function widget( $args, $instance )
	{
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];

		if ( ! empty( $title ) )
		{
			echo $args['before_title'] . $title . $args['after_title'];
		}

		// Call subscriber form
		echo do_shortcode("[USM_plus_form]");
		
		echo $args['after_widget'];
	}
		
	// Widget Backend 
	public function form( $instance )
	{
		if ( isset( $instance[ 'title' ] ))
		{
			$title = $instance[ 'title' ];
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
		
	// Updating widget replacing old instances with new
	public function update( $newInstance, $oldInstance )
	{
		$instance = array();
		$instance['title'] = ( ! empty( $newInstance['title'] ) ) ? strip_tags( $newInstance['title'] ) : '';
		return $instance;
	}
}
// Class wpb_widget ends here

// Register and load the widget
function sfsiPlus_subscriber_load_widget()
{
	register_widget( 'sfsiPlus_subscriber_widget' );
}
add_action( 'widgets_init', 'sfsiPlus_subscriber_load_widget' );
?>
<?php
add_shortcode("USM_plus_form", "sfsi_plus_get_subscriberForm");
function sfsi_plus_get_subscriberForm()
{
	$option9 = unserialize(get_option('sfsi_plus_section9_options',false));
	
	$return = '';
	$return .= '<div class="sfsi_plus_subscribe_Popinner">
					<form method="post">
						<h5>'.trim($option9['sfsi_plus_form_heading_text']).'</h5>
						<div class="sfsi_plus_subscription_form_field">
							<input type="email" name="subscribe_email" value="" placeholder="'.trim($option9['sfsi_plus_form_field_text']).'"/>
						</div>
						<div class="sfsi_plus_subscription_form_field">
							<input type="submit" name="subscribe" value="'.$option9['sfsi_plus_form_button_text'].'" />
						</div>
					</form>
				</div>';
	return $return;			
}
?>