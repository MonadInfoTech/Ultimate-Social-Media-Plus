<?php 
/*  instalation of javascript and css  */
function sfsiplus_plugin_back_enqueue_script()
{
	/* include CSS for backend */
	wp_enqueue_style("SFSIPLUSmainadminCss", SFSI_PLUS_PLUGURL . 'css/sfsi-admin-style.css' );
		
	if(isset($_GET['page']))
	{
		if($_GET['page'] == 'sfsi-plus-options')
		{
			wp_enqueue_style('thickbox');
			wp_enqueue_style("SFSIPLUSmainCss", SFSI_PLUS_PLUGURL . 'css/sfsi-style.css' );
			
			wp_enqueue_style("SFSIPLUSJqueryCSS", SFSI_PLUS_PLUGURL . 'css/jquery-ui-1.10.4/jquery-ui-min.css' );
			wp_enqueue_style("wp-color-picker");
		}
	}
		
	if(isset($_GET['page']))
	{
		if($_GET['page'] == 'sfsi-plus-options')
		{
			wp_enqueue_script('jquery');
			wp_enqueue_script("jquery-migrate");
			
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox'); 
			
			wp_enqueue_script("jquery-ui-accordion");	
			wp_enqueue_script("wp-color-picker");
			wp_enqueue_script("jquery-effects-core");
			wp_enqueue_script("jquery-ui-sortable");
				
			
			wp_register_script('SFSIPLUSJqueryFRM', SFSI_PLUS_PLUGURL . 'js/jquery.form-min.js', '', '', true);
			wp_enqueue_script("SFSIPLUSJqueryFRM");
			
			wp_register_script('SFSIPLUSCustomFormJs', SFSI_PLUS_PLUGURL . 'js/custom-form-min.js', '', '', true);
			wp_enqueue_script("SFSIPLUSCustomFormJs");
			
			wp_register_script('SFSIPLUSCustomJs', SFSI_PLUS_PLUGURL . 'js/custom-admin.js', '', '', true);
			
			// Localize the script with new data
			$translation_array = array(
				'Re_ad'                 => __('Read more','ultimate-social-media-plus'),
				'Sa_ve'                 => __('Save','ultimate-social-media-plus'),
				'Sav_ing'               => __('Saving','ultimate-social-media-plus'),
				'Sa_ved'                => __('Saved','ultimate-social-media-plus')
			);
			$translation_array1 = array(
				'Coll_apse'             => __('Collapse','ultimate-social-media-plus'),
				'Save_All_Settings'     => __('Save All Settings','ultimate-social-media-plus')
			);
			
			wp_localize_script( 'SFSIPLUSCustomJs', 'object_name', $translation_array );
			wp_localize_script( 'SFSIPLUSCustomJs', 'object_name1', $translation_array1 );
			wp_enqueue_script("SFSIPLUSCustomJs");
			
			wp_register_script('SFSIPLUSCustomValidateJs', SFSI_PLUS_PLUGURL . 'js/customValidate-min.js', '', '', true);
			wp_enqueue_script("SFSIPLUSCustomValidateJs");
			/* end cusotm js */
			
			/* initilaize the ajax url in javascript */
			wp_localize_script( 'SFSIPLUSCustomJs', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
			wp_localize_script( 'SFSIPLUSCustomValidateJs', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ),'plugin_url'=> SFSI_PLUS_PLUGURL) );
		}
	}
}
add_action( 'admin_enqueue_scripts', 'sfsiplus_plugin_back_enqueue_script' );

function sfsiplus_plugin_front_enqueue_script()
{
		wp_enqueue_style("SFSIPLUSmainCss", SFSI_PLUS_PLUGURL . 'css/sfsi-style.css' );
		$option5=  unserialize(get_option('sfsi_plus_section5_options',false));
		if($option5['sfsi_plus_disable_floaticons'] == 'yes')
		{
			wp_enqueue_style("disable_sfsiplus", SFSI_PLUS_PLUGURL . 'css/disable_sfsi.css' );
		}
		
		wp_enqueue_script('jquery');
	 	wp_enqueue_script("jquery-migrate");
		wp_enqueue_script('jquery-ui-core');	
		
		wp_register_script('SFSIPLUSjqueryModernizr', SFSI_PLUS_PLUGURL . 'js/shuffle/modernizr.custom.min.js', '','',true);
		wp_enqueue_script("SFSIPLUSjqueryModernizr");
		
		wp_register_script('SFSIPLUSjqueryShuffle', SFSI_PLUS_PLUGURL . 'js/shuffle/jquery.shuffle.min.js', '','',true);
		wp_enqueue_script("SFSIPLUSjqueryShuffle");
		
		wp_register_script('SFSIPLUSjqueryrandom-shuffle', SFSI_PLUS_PLUGURL . 'js/shuffle/random-shuffle-min.js', '','',true);
		wp_enqueue_script("SFSIPLUSjqueryrandom-shuffle");
		
		wp_register_script('SFSIPLUSCustomJs', SFSI_PLUS_PLUGURL . 'js/custom.js', '', '', true);
		wp_enqueue_script("SFSIPLUSCustomJs");
		/* end cusotm js */
		
		/* initilaize the ajax url in javascript */
		wp_localize_script( 'SFSIPLUSCustomJs', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ),'plugin_url'=> SFSI_PLUS_PLUGURL) );
}
add_action( 'wp_enqueue_scripts', 'sfsiplus_plugin_front_enqueue_script' );	

function sfsi_plus_footerFeedbackScript()
{
    wp_enqueue_style('wp-pointer');
    wp_enqueue_script('wp-pointer');
    wp_enqueue_script('utils'); // for user settings
	
	$html = '<div>';
		$html .= '<label>Optional: Please tell us why you deactivate our plugin so that we can make it better!</label>';
		$html .= '<textarea id="sfsi_plus_feedbackMsg" name="reason"></textarea>';
	$html .= '</div>';
	?>
    <script type="text/javascript">
		jQuery('#sfsi_plus_deactivateButton').click(function(){
			jQuery('#sfsi_plus_deactivateButton').pointer({
				content: '<form method="post" id="sfsi_plus_feedbackForm"><?php echo $html; ?><div><input type="button" name="sfsi_plus_sendFeedback" value="Deactivate" class="button primary-button" /></div><img id="sfsi_plus_loadergif" src="<?php echo site_url()."/wp-includes/images/spinner.gif"; ?>" /></form>',
				position: {
					edge:'top',
					align:'left',
				},
				close: function() {
					//
				}
			}).pointer('open');
			return false;
		});
		jQuery("body").on("click","input[name='sfsi_plus_sendFeedback']", function(){
			var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
			var deactivateUrl = jQuery('#ultimate-social-media-plus .deactivate a').attr('href');
			var e = {
				action:"sfsi_plus_feedbackForm",
				email: '<?php echo get_option("admin_email"); ?>',
				msg:jQuery("#sfsi_plus_feedbackMsg").val()
			};
			jQuery("#sfsi_plus_loadergif").show();
			jQuery.ajax({
				url:ajaxurl,
				type:"post",
				data:e,
				success:function(responce) {
					jQuery("#sfsi_plus_loadergif").hide();
					window.location.href = deactivateUrl;
				}
			});
		});
	</script>
	<?php
}
add_action( 'admin_footer', 'sfsi_plus_footerFeedbackScript' );		
?>