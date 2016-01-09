<?php
	/* unserialize all saved option for  section 5 options */
    $icons = ($option1['sfsi_custom_files']) ? unserialize($option1['sfsi_custom_files']) : array() ;
	$option3 =  unserialize(get_option('sfsi_plus_section3_options',false));
	$option5 =  unserialize(get_option('sfsi_plus_section5_options',false));
	$custom_icons_order = unserialize($option5['sfsi_plus_CustomIcons_order']);
	$icons_order = array(
					$option5['sfsi_plus_rssIcon_order']=>'rss',
					$option5['sfsi_plus_emailIcon_order']=>'email',
					$option5['sfsi_plus_facebookIcon_order']=>'facebook',
					$option5['sfsi_plus_googleIcon_order']=>'google',
					$option5['sfsi_plus_twitterIcon_order']=>'twitter',
					$option5['sfsi_plus_shareIcon_order']=>'share',
					$option5['sfsi_plus_youtubeIcon_order']=>'youtube',
					$option5['sfsi_plus_pinterestIcon_order']=>'pinterest',
					$option5['sfsi_plus_linkedinIcon_order']=>'linkedin',
					$option5['sfsi_plus_instagramIcon_order']=>'instagram',
					(isset($option5['sfsi_plus_houzzIcon_order']))
					? $option5['sfsi_plus_houzzIcon_order']
					: 11 => 'houzz'
				);
				
	$visit_iconsUrl = SFSI_PLUS_PLUGURL."images/visit_icons/";
  
	if(is_array($custom_icons_order) ) 
	{
		foreach($custom_icons_order as $data)
		{
			$icons_order[$data['order']] = $data;
		}
	}
	ksort($icons_order);
	
	if(isset($option5['sfsi_plus_disable_viewport']))
	{
		$sfsi_plus_disable_viewport = $option5['sfsi_plus_disable_viewport'];	 
	}
	else
	{
		$sfsi_plus_disable_viewport = 'no';
	}
  
	function selectoption($name, $follow, $visitme)
	{	
		$visit_iconsUrl = SFSI_PLUS_PLUGURL."images/visit_icons/"; 
		if($name == "sfsi_plus_follow_icons_language")
		{
			$visit_icon = $visit_iconsUrl."Follow";
		}
		elseif($name == "sfsi_plus_facebook_icons_language")
		{
			$visit_icon = $visit_iconsUrl."Visit_us_facebook";
		}
		elseif($name == "sfsi_plus_twitter_icons_language")
		{
			$visit_icon = $visit_iconsUrl."Visit_us_twitter";
		}
		elseif($name == "sfsi_plus_google_icons_language")
		{
			$visit_icon = $visit_iconsUrl."Visit_us_google";
		}
					
		$option5 =  unserialize(get_option('sfsi_plus_section5_options',false));
		?>
		<select name="<?php echo $name; ?>" id="<?php echo $name; ?>" data-iconUrl="<?php echo $visit_icon; ?>" class="<?php echo $name; ?>-preview lanOnchange">
			<option value="<?php echo $follow; ?>_ar" <?php echo ($option5[$name]== $follow.'_ar') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'العربية ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_ar" <?php echo ($option5[$name]== $visitme.'_ar') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'العربية ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_bg_BG" <?php echo ($option5[$name]== $follow.'_bg_BG') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Български ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_bg_BG" <?php echo ($option5[$name]== $visitme.'_bg_BG') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Български ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_zh_CN" <?php echo ($option5[$name]== $follow.'_zh_CN') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( '简体中文 ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_zh_CN" <?php echo ($option5[$name]== $visitme.'_zh_CN') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( '简体中文 ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_cs_CZ" <?php echo ($option5[$name]== $follow.'_cs_CZ') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Čeština‎ ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_cs_CZ" <?php echo ($option5[$name]== $visitme.'_cs_CZ') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Čeština‎ ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_da_DK" <?php echo ($option5[$name]== $follow.'_da_DK') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Dansk ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>	
			</option>
			<option value="<?php echo $visitme; ?>_da_DK" <?php echo ($option5[$name]== $visitme.'_da_DK') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Dansk ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_nl_NL" <?php echo ($option5[$name]== $follow.'_nl_NL') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Nederlands ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_nl_NL" <?php echo ($option5[$name]== $visitme.'_nl_NL') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Nederlands ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_fi" <?php echo ($option5[$name]== $follow.'_fi') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Suomi ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_fi" <?php echo ($option5[$name]== $visitme.'_fi') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Suomi ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_fr_FR" <?php echo ($option5[$name]== $follow.'_fr_FR') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Français ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>	
			</option>
			<option value="<?php echo $visitme; ?>_fr_FR" <?php echo ($option5[$name]== $visitme.'_fr_FR') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Français ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_de_DE" <?php echo ($option5[$name]== $follow.'_de_DE') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Deutsch ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>	
			</option>
			<option value="<?php echo $visitme; ?>_de_DE" <?php echo ($option5[$name]== $visitme.'_de_DE') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Deutsch ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_en_US" <?php echo ($option5[$name]== $follow.'_en_US') ? 'selected="selected"' : '' ; ?>>
				<?php  _e( 'English ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_en_US" <?php echo ($option5[$name]== $visitme.'_en_US') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'English ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>	
			</option>
			
			<option value="<?php echo $follow; ?>_el" <?php echo ($option5[$name]== $follow.'_el') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Ελληνικά ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>	
			</option>
			<option value="<?php echo $visitme; ?>_el" <?php echo ($option5[$name]== $visitme.'_el') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Ελληνικά ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_hu_HU" <?php echo ($option5[$name]==$follow.'_hu_HU') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Magyar ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>	
			</option>
			<option value="<?php echo $visitme; ?>_hu_HU" <?php echo ($option5[$name]== $visitme.'_hu_HU') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Magyar ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_id_ID" <?php echo ($option5[$name]== $follow.'_id_ID') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Bahasa Indonesia ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_id_ID" <?php echo ($option5[$name]== $visitme.'_id_ID') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Bahasa Indonesia ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_it_IT" <?php echo ($option5[$name]== $follow.'_it_IT') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Italiano ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_it_IT" <?php echo ($option5[$name]== $visitme.'_it_IT') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Italiano ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_ja" <?php echo ($option5[$name]== $follow.'_ja') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( '日本語 ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_ja" <?php echo ($option5[$name]== $visitme.'_ja') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( '日本語 ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_ko_KR" <?php echo ($option5[$name]== $follow.'_ko_KR') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( '한국어 ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_ko_KR" <?php echo ($option5[$name]== $visitme.'_ko_KR') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( '한국어 ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_nb_NO" <?php echo ($option5[$name]== $follow.'_nb_NO') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Norsk bokmål ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_nb_NO" <?php echo ($option5[$name]== $visitme.'_nb_NO') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Norsk bokmål ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_fa_IR" <?php echo ($option5[$name]== $follow.'_fa_IR') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'فارسی ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_fa_IR" <?php echo ($option5[$name]== $visitme.'_fa_IR') ?  'selected="selected"' : '' ; ?>><?php  _e( 'فارسی ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_pl_PL" <?php echo ($option5[$name]== $follow.'_pl_PL') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Polski ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_pl_PL" <?php echo ($option5[$name]== $visitme.'_pl_PL') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Polski ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_pt_PT" <?php echo ($option5[$name]== $follow.'_pt_PT') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Português ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_pt_PT" <?php echo ($option5[$name]== $visitme.'_pt_PT') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Português ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_ro_RO" <?php echo ($option5[$name]== $follow.'_ro_RO') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Română ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_ro_RO" <?php echo ($option5[$name]== $visitme.'_ro_RO') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Română ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_ru_RU" <?php echo ($option5[$name]== $follow.'_ru_RU') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Русский ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_ru_RU" <?php echo ($option5[$name]== $visitme.'_ru_RU') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Русский ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_sk_SK" <?php echo ($option5[$name]== $follow.'_sk_SK') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Slovenčina ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_sk_SK" <?php echo ($option5[$name]== $visitme.'_sk_SK') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Slovenčina ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_es_ES" <?php echo ($option5[$name]== $follow.'_es_ES') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Español ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_es_ES" <?php echo ($option5[$name]== $visitme.'_es_ES') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Español ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_sv_SE" <?php echo ($option5[$name]== $follow.'_sv_SE') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Svenska ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_sv_SE" <?php echo ($option5[$name]== $visitme.'_sv_SE') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Svenska ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_th" <?php echo ($option5[$name]== $follow.'_th') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'ไทย ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_th" <?php echo ($option5[$name]== $visitme.'_th') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'ไทย ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_tr_TR" <?php echo ($option5[$name]== $follow.'_tr_TR') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Türkçe ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_tr_TR" <?php echo ($option5[$name]== $visitme.'_tr_TR') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Türkçe ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			
			<option value="<?php echo $follow; ?>_vi" <?php echo ($option5[$name]== $follow.'_vi') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Tiếng Việt ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span> 
				<span><?php  _e($follow, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
			<option value="<?php echo $visitme; ?>_vi" <?php echo ($option5[$name]== $visitme.'_vi') ?  'selected="selected"' : '' ; ?>>
				<?php  _e( 'Tiếng Việt ', 'ultimate-social-media-plus' ); ?>
				<span> - << </span>
				<span><?php  _e($visitme, 'ultimate-social-media-plus' ); ?></span>
				<span> >> </span>
			</option>
		</select>
	<?php
	}	
?>


<!-- Section 5 "Any other wishes for your main icons?" main div Start -->
<div class="tab5">
	<h4>
		<?php  _e( 'Order of your icons', 'ultimate-social-media-plus' ); ?>
    </h4>
    <!-- icon drag drop  section start here -->	
    <ul class="plus_share_icon_order" >
     <?php 
	 	$ctn = 0;
	 	foreach($icons_order as $index=>$icn) :
          
		  switch ($icn) : 
          case 'rss' :?>
            	 <li class="sfsiplus_rss_section" data-index="<?php echo $index; ?>" id="sfsi_plus_rssIcon_order">
                	<a href="#" title="RSS"><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/rss.png" alt="RSS" /></a>
                 </li>
          <?php break; ?>
          
		  <?php case 'email' :?>
          		<li class="sfsiplus_email_section " data-index="<?php echo $index; ?>" id="sfsi_plus_emailIcon_order">
                	<a href="#" title="Email"><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/<?php echo $email_image; ?>" alt="Email" class="icon_img" /></a>
                </li>
          <?php break; ?>
          
		  <?php case 'facebook' :?>
          		<li class="sfsiplus_facebook_section " data-index="<?php echo $index; ?>" id="sfsi_plus_facebookIcon_order">
                	<a href="#" title="Facebook"><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/facebook.png" alt="Facebook" /></a>
                </li>
          <?php break; ?>
          
          <?php case 'google' :?>
          		<li class="sfsiplus_google_section " data-index="<?php echo $index; ?>" id="sfsi_plus_googleIcon_order">
                	<a href="#" title="Google Plus" ><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/google_plus.png" alt="Google Plus" /></a>
                </li>
          <?php break; ?>
          
          <?php case 'twitter' :?>
          		<li class="sfsiplus_twitter_section " data-index="<?php echo $index; ?>" id="sfsi_plus_twitterIcon_order">
                	<a href="#" title="Twitter" ><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/twitter.png" alt="Twitter" /></a>
                </li>
          <?php break; ?>
          
          <?php case 'share' : ?>
          		<li class="sfsiplus_share_section " data-index="<?php echo $index; ?>"  id="sfsi_plus_shareIcon_order">
                	<a href="#" title="Share" ><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/share.png" alt="Share" /></a>
                </li>
          <?php break; ?>
          
          <?php case 'youtube' :?>
          		<li class="sfsiplus_youtube_section " data-index="<?php echo $index; ?>" id="sfsi_plus_youtubeIcon_order">
                	<a href="#" title="YouTube" ><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/youtube.png" alt="YouTube" /></a>
                </li>
          <?php break; ?>
          
          <?php case 'pinterest' :?>
          		<li class="sfsiplus_pinterest_section " data-index="<?php echo $index; ?>" id="sfsi_plus_pinterestIcon_order">
                	<a href="#" title="Pinterest" ><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/pinterest.png" alt="Pinterest" /></a>
                </li>
          <?php break; ?>
          
          <?php case 'linkedin' :?>
          		<li class="sfsiplus_linkedin_section " data-index="<?php echo $index; ?>" id="sfsi_plus_linkedinIcon_order">
                	<a href="#" title="Linked In" ><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/linked_in.png" alt="Linked In" /></a>
                </li>
          <?php break; ?>
          
          <?php case 'instagram' :?>
          		<li class="sfsiplus_instagram_section " data-index="<?php echo $index; ?>" id="sfsi_plus_instagramIcon_order">
                	<a href="#" title="Instagram" ><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/instagram.png" alt="Instagram" /></a>
                </li>
          <?php break; ?>
          
          <?php case 'houzz' :?>
          		<li class="sfsiplus_houzz_section " data-index="<?php echo $index; ?>" id="sfsi_plus_houzzIcon_order">
                	<a href="#" title="Houzz" ><img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/houzz.png" alt="Houzz" /></a>
                </li>
          <?php break; ?>
                  
          <?php default   :?>
          		<?php if(isset($icons[$icn['ele']]) && !empty($icons[$icn['ele']]) && filter_var($icons[$icn['ele']], FILTER_VALIDATE_URL) ): ?>
          		<li class="sfsiplus_custom_iconOrder sfsiICON_<?php echo $icn['ele']; ?>" data-index="<?php echo $index; ?>" element-id="<?php echo $icn['ele']; ?>" >
                	<a href="#" title="Custom Icon" ><img src="<?php echo $icons[$icn['ele']]; ?>" alt="Linked In" class="sfcm" /></a>
                </li> 
                <?php endif; ?>
          <?php break; ?>
            
         <?php  endswitch; ?>   
    <?php endforeach; ?> 
     
    </ul> <!-- END icon drag drop section start here -->
    
    <span class="drag_drp">
    	<?php  _e( '(Drag &amp; Drop)', 'ultimate-social-media-plus' ); ?>
    </span>
    <!-- icon's size and spacing section start here -->	
    <div class="row">
        <h4>
        	<?php  _e( 'Size &amp; spacing of your icons', 'ultimate-social-media-plus' ); ?>
        </h4>
        <div class="icons_size">
        	<span>
        		<?php  _e( 'Size:', 'ultimate-social-media-plus' ); ?>
        	</span>
            <input name="sfsi_plus_icons_size" value="<?php echo ($option5['sfsi_plus_icons_size']!='') ?  $option5['sfsi_plus_icons_size'] : '' ;?>" type="text" />
        	<ins>
        		<?php  _e( 'pixels wide &amp; tall', 'ultimate-social-media-plus' ); ?>
        	</ins>
         	<span class="last">
         		<?php  _e( 'Spacing between icons:', 'ultimate-social-media-plus' ); ?>
         	</span>
            <input name="sfsi_plus_icons_spacing" type="text" value="<?php echo ($option5['sfsi_plus_icons_spacing']!='') ?  $option5['sfsi_plus_icons_spacing'] : '' ;?>" />
         	<ins>
         		<?php  _e( 'Pixels', 'ultimate-social-media-plus' ); ?>
         	</ins>
    	</div>
    </div>
    
    <div class="row">
        <h4>
        	<?php  _e( 'Alignments', 'ultimate-social-media-plus' ); ?>
        </h4>
        <div class="icons_size">
        	<span>
        		<?php  _e( 'Alignment of icons:', 'ultimate-social-media-plus' ); ?>
        	</span>
        	<div class="field">
                <select name="sfsi_plus_icons_Alignment" id="sfsi_plus_icons_Alignment" class="styled">
                    <option value="center" <?php echo ($option5['sfsi_plus_icons_Alignment']=='center') ?  'selected="selected"' : '' ;?>>
                        <?php  _e( 'Centered', 'ultimate-social-media-plus' ); ?>
                    </option>
                    <option value="right" <?php echo ($option5['sfsi_plus_icons_Alignment']=='right') ?  'selected="selected"' : '' ;?>>
                    	<?php  _e( 'Right', 'ultimate-social-media-plus' ); ?>
                    </option>
                    <option value="left" <?php echo ($option5['sfsi_plus_icons_Alignment']=='left') ?  'selected="selected"' : '' ;?>>
                    	<?php  _e( 'Left', 'ultimate-social-media-plus' ); ?>
                    </option>
                </select>
       		</div> 
        	<span>
        		<?php  _e( 'Icons per row:', 'ultimate-social-media-plus' ); ?>
        	</span>
        	<input name="sfsi_plus_icons_perRow" type="text" value="<?php echo ($option5['sfsi_plus_icons_perRow']!='') ?  $option5['sfsi_plus_icons_perRow'] : '' ;?>" />
        	<ins class="leave_empty">
        		<?php  _e( 'Leave empty if you dont want to', 'ultimate-social-media-plus' ); ?>
        		<br />
        		<?php  _e( 'define this', 'ultimate-social-media-plus' ); ?>
        	</ins>
        </div>
    </div>
	<!-- icon's select language optins start here -->
    <div class="row">
		<h4>
    	    <?php  _e( 'Language & Button-text', 'ultimate-social-media-plus' ); ?>
    	</h4>
		<!-- Follow button start here -->
		<div class="icons_size">
        	<div class="follows-btn">
				<span><?php  _e( 'Follow-button:', 'ultimate-social-media-plus' ); ?></span>
        	</div>
			<div class="field language-field">
				 <?php selectoption("sfsi_plus_follow_icons_language" , "Follow" , "Subscribe"); ?>
			</div>
			<div class="preview-btn">
        		<span><?php  _e( 'Preview:', 'ultimate-social-media-plus' ); ?></span>
			</div>
			<?php
				$follow_icons = $option5['sfsi_plus_follow_icons_language'];
				$visit_icon = SFSI_PLUS_PLUGURL."images/visit_icons/Follow/icon_".$follow_icons.".png";
				if(isset($follow_icons) && !empty($follow_icons))
				{
					?>
					<div class="social-img-link"><img src="<?php echo $visit_icon; ?>" alt=""  /></div>
			<?php } ?>
		</div>
		
		<!-- Facebook «Visit»-icon start here -->
		<div class="icons_size">
        	<div class="follows-btn">
        		<span><?php  _e( 'Facebook «Visit»-icon:', 'ultimate-social-media-plus' ); ?></span>
			</div>
			<div class="field language-field">
				<?php selectoption("sfsi_plus_facebook_icons_language" , "Visit_us" , "Visit_me"); ?>
			</div>
			<div class="preview-btn">
        		<span><?php  _e( 'Preview:', 'ultimate-social-media-plus' ); ?></span>
        	</div>
			<?php
				$facebook_icons_lang = $option5['sfsi_plus_facebook_icons_language'];
				$visit_icon = $visit_iconsUrl."Visit_us_facebook/icon_".$facebook_icons_lang.".png";
				if(isset($facebook_icons_lang) && !empty($facebook_icons_lang))
				{
					?>
					<div class="social-img-link"><img src="<?php echo $visit_icon; ?>" alt=""  /></div>
			<?php } ?>			
		</div>
		
		<!-- Twitter «Visit»-icon start here -->
		<div class="icons_size">
        	<div class="follows-btn">
        		<span><?php  _e( 'Twitter «Visit»-icon:', 'ultimate-social-media-plus' ); ?></span>
        	</div>
			<div class="field language-field">
				 <?php selectoption("sfsi_plus_twitter_icons_language" , "Visit_us" , "Visit_me"); ?>
			</div>
			<div class="preview-btn">
        		<span><?php  _e( 'Preview:', 'ultimate-social-media-plus' ); ?></span>
        	</div>
			<?php
				$twitter_icons_lang = $option5['sfsi_plus_twitter_icons_language'];
				$visit_icon = $visit_iconsUrl."Visit_us_twitter/icon_".$twitter_icons_lang.".png";
				if(isset($twitter_icons_lang) && !empty($twitter_icons_lang))
				{
					?>					
					<div class="social-img-link"><img src="<?php echo $visit_icon; ?>" alt=""  /></div>
			<?php } ?>
		</div>
		
		<!-- Google+ «Visit»-icon start here -->
		<div class="icons_size">
        	<div class="follows-btn">
        		<span><?php  _e( 'Google+ «Visit»-icon:', 'ultimate-social-media-plus' ); ?></span>
        	</div>
			<div class="field language-field">
				<?php selectoption("sfsi_plus_google_icons_language" , "Visit_us" , "Visit_me"); ?>
			</div>
			<div class="preview-btn">
        		<span><?php  _e( 'Preview:', 'ultimate-social-media-plus' ); ?></span>
        	</div>
			<?php
				$google_icons_lang = $option5['sfsi_plus_google_icons_language'];
				$visit_icon = $visit_iconsUrl."Visit_us_google/icon_".$google_icons_lang.".png";
				if(isset($google_icons_lang) && !empty($google_icons_lang))
				{
					?>					
					<div class="social-img-link"><img src="<?php echo $visit_icon; ?>" alt=""  /></div>
			<?php } ?>
		</div>

		<!-- Like & Share buttons (Facebook, Twitter, Google+) start here -->
		<div class="icons_size">
        	<span>
        		<?php  _e( 'Select the language you want to show your icons on your website:', 'ultimate-social-media-plus' ); ?>
        	</span>
			<div class="language_field">
				<select name="sfsi_plus_icons_language" id="sfsi_plus_icons_language" class="language">
					<option value="ar_AR" <?php echo ($option5['sfsi_plus_icons_language']=='ar_AR') ?  'selected="selected"' : '' ;?>><?php  _e( 'العربية', 'ultimate-social-media-plus' ); ?></option>
					<option value="az_AZ" <?php echo ($option5['sfsi_plus_icons_language']=='az_AZ') ?  'selected="selected"' : '' ;?>><?php  _e( 'Azərbaycan dili', 'ultimate-social-media-plus' ); ?></option>
					<option value="af_ZA" <?php echo ($option5['sfsi_plus_icons_language']=='af_ZA') ?  'selected="selected"' : '' ;?>><?php  _e( 'Afrikaans', 'ultimate-social-media-plus' ); ?></option>
					<option value="bg_BG" <?php echo ($option5['sfsi_plus_icons_language']=='bg_BG') ?  'selected="selected"' : '' ;?>><?php  _e( 'Български', 'ultimate-social-media-plus' ); ?></option>
					<option value="ms_MY" <?php echo ($option5['sfsi_plus_icons_language']=='ms_MY') ?  'selected="selected"' : '' ;?>><?php  _e( 'Bahasa Melayu‎', 'ultimate-social-media-plus' ); ?></option>
					<option value="bn_IN" <?php echo ($option5['sfsi_plus_icons_language']=='bn_IN') ?  'selected="selected"' : '' ;?>><?php  _e( 'বাংলা', 'ultimate-social-media-plus' ); ?></option>
					<option value="bs_BA" <?php echo ($option5['sfsi_plus_icons_language']=='bs_BA') ?  'selected="selected"' : '' ;?>><?php  _e( 'Bosanski', 'ultimate-social-media-plus' ); ?></option>
					<option value="ca_ES" <?php echo ($option5['sfsi_plus_icons_language']=='ca_ES') ?  'selected="selected"' : '' ;?>><?php  _e( 'Català', 'ultimate-social-media-plus' ); ?></option>
					<option value="cy_GB" <?php echo ($option5['sfsi_plus_icons_language']=='cy_GB') ?  'selected="selected"' : '' ;?>><?php  _e( 'Cymraeg', 'ultimate-social-media-plus' ); ?></option>
					<option value="da_DK" <?php echo ($option5['sfsi_plus_icons_language']=='da_DK') ?  'selected="selected"' : '' ;?>><?php  _e( 'Dansk', 'ultimate-social-media-plus' ); ?></option>
					<option value="de_DE" <?php echo ($option5['sfsi_plus_icons_language']=='de_DE') ?  'selected="selected"' : '' ;?>><?php  _e( 'Deutsch', 'ultimate-social-media-plus' ); ?></option>
					<option value="en_US" <?php echo ($option5['sfsi_plus_icons_language']=='en_US') ?  'selected="selected"' : '' ;?>><?php  _e( 'English (United States)', 'ultimate-social-media-plus' ); ?></option>
					<option value="el_GR" <?php echo ($option5['sfsi_plus_icons_language']=='el_GR') ?  'selected="selected"' : '' ;?>><?php  _e( 'Ελληνικά', 'ultimate-social-media-plus' ); ?></option>
					<option value="eo_EO" <?php echo ($option5['sfsi_plus_icons_language']=='eo_EO') ?  'selected="selected"' : '' ;?>><?php  _e( 'Esperanto', 'ultimate-social-media-plus' ); ?></option>
					<option value="es_ES" <?php echo ($option5['sfsi_plus_icons_language']=='es_ES') ?  'selected="selected"' : '' ;?>><?php  _e( 'Español', 'ultimate-social-media-plus' ); ?></option>
					<option value="et_EE" <?php echo ($option5['sfsi_plus_icons_language']=='et_EE') ?  'selected="selected"' : '' ;?>><?php  _e( 'Eesti', 'ultimate-social-media-plus' ); ?></option>
					<option value="eu_ES" <?php echo ($option5['sfsi_plus_icons_language']=='eu_ES') ?  'selected="selected"' : '' ;?>><?php  _e( 'Euskara', 'ultimate-social-media-plus' ); ?></option>
					<option value="fa_IR" <?php echo ($option5['sfsi_plus_icons_language']=='fa_IR') ?  'selected="selected"' : '' ;?>><?php  _e( 'فارسی', 'ultimate-social-media-plus' ); ?></option>
					<option value="fi_FI" <?php echo ($option5['sfsi_plus_icons_language']=='fi_FI') ?  'selected="selected"' : '' ;?>><?php  _e( 'Suomi', 'ultimate-social-media-plus' ); ?></option>
					<option value="fr_FR" <?php echo ($option5['sfsi_plus_icons_language']=='fr_FR') ?  'selected="selected"' : '' ;?>><?php  _e( 'Français', 'ultimate-social-media-plus' ); ?></option>
					<option value="gl_ES" <?php echo ($option5['sfsi_plus_icons_language']=='gl_ES') ?  'selected="selected"' : '' ;?>><?php  _e( 'Galego', 'ultimate-social-media-plus' ); ?></option>
					<option value="he_IL" <?php echo ($option5['sfsi_plus_icons_language']=='he_IL') ?  'selected="selected"' : '' ;?>><?php  _e( 'עִבְרִית', 'ultimate-social-media-plus' ); ?></option>
					<option value="hi_IN" <?php echo ($option5['sfsi_plus_icons_language']=='hi_IN') ?  'selected="selected"' : '' ;?>><?php  _e( 'हिन्दी', 'ultimate-social-media-plus' ); ?></option>
					<option value="hr_HR" <?php echo ($option5['sfsi_plus_icons_language']=='hr_HR') ?  'selected="selected"' : '' ;?>><?php  _e( 'Hrvatski', 'ultimate-social-media-plus' ); ?></option>
					<option value="hu_HU" <?php echo ($option5['sfsi_plus_icons_language']=='hu_HU') ?  'selected="selected"' : '' ;?>><?php  _e( 'Magyar', 'ultimate-social-media-plus' ); ?></option>
					<option value="hy_AM" <?php echo ($option5['sfsi_plus_icons_language']=='hy_AM') ?  'selected="selected"' : '' ;?>><?php  _e( 'Հայերեն', 'ultimate-social-media-plus' ); ?></option>
					<option value="id_ID" <?php echo ($option5['sfsi_plus_icons_language']=='id_ID') ?  'selected="selected"' : '' ;?>><?php  _e( 'Bahasa Indonesia', 'ultimate-social-media-plus' ); ?></option>
					<option value="is_IS" <?php echo ($option5['sfsi_plus_icons_language']=='is_IS') ?  'selected="selected"' : '' ;?>><?php  _e( 'Íslenska', 'ultimate-social-media-plus' ); ?></option>
					<option value="it_IT" <?php echo ($option5['sfsi_plus_icons_language']=='it_IT') ?  'selected="selected"' : '' ;?>><?php  _e( 'Italiano', 'ultimate-social-media-plus' ); ?></option>
					<option value="ja_JP" <?php echo ($option5['sfsi_plus_icons_language']=='ja_JP') ?  'selected="selected"' : '' ;?>><?php  _e( '日本語', 'ultimate-social-media-plus' ); ?></option>
					<option value="ko_KR" <?php echo ($option5['sfsi_plus_icons_language']=='ko_KR') ?  'selected="selected"' : '' ;?>><?php  _e( '한국어', 'ultimate-social-media-plus' ); ?></option>
					<option value="lt_LT" <?php echo ($option5['sfsi_plus_icons_language']=='lt_LT') ?  'selected="selected"' : '' ;?>><?php  _e( 'Lietuvių kalba', 'ultimate-social-media-plus' ); ?></option>
					<option value="my_MM" <?php echo ($option5['sfsi_plus_icons_language']=='my_MM') ?  'selected="selected"' : '' ;?>><?php  _e( 'ဗမာစာ', 'ultimate-social-media-plus' ); ?></option>
					<option value="nl_NL" <?php echo ($option5['sfsi_plus_icons_language']=='nl_NL') ?  'selected="selected"' : '' ;?>><?php  _e( 'Nederlands', 'ultimate-social-media-plus' ); ?></option>
					<option value="nn_NO" <?php echo ($option5['sfsi_plus_icons_language']=='nn_NO') ?  'selected="selected"' : '' ;?>><?php  _e( 'Norsk nynorsk', 'ultimate-social-media-plus' ); ?></option>
					<option value="pl_PL" <?php echo ($option5['sfsi_plus_icons_language']=='pl_PL') ?  'selected="selected"' : '' ;?>><?php  _e( 'Polski', 'ultimate-social-media-plus' ); ?></option>
					<option value="ps_AF" <?php echo ($option5['sfsi_plus_icons_language']=='ps_AF') ?  'selected="selected"' : '' ;?>><?php  _e( 'پښتو', 'ultimate-social-media-plus' ); ?></option>
					<option value="pt_BR" <?php echo ($option5['sfsi_plus_icons_language']=='pt_BR') ?  'selected="selected"' : '' ;?>><?php  _e( 'Português do Brasil', 'ultimate-social-media-plus' ); ?></option>
					<option value="ro_RO" <?php echo ($option5['sfsi_plus_icons_language']=='ro_RO') ?  'selected="selected"' : '' ;?>><?php  _e( 'Română', 'ultimate-social-media-plus' ); ?></option>
					<option value="ru_RU" <?php echo ($option5['sfsi_plus_icons_language']=='ru_RU') ?  'selected="selected"' : '' ;?>><?php  _e( 'Русский', 'ultimate-social-media-plus' ); ?></option>
					<option value="sk_SK" <?php echo ($option5['sfsi_plus_icons_language']=='sk_SK') ?  'selected="selected"' : '' ;?>><?php  _e( 'Slovenčina', 'ultimate-social-media-plus' ); ?></option>
					<option value="sl_SI" <?php echo ($option5['sfsi_plus_icons_language']=='sl_SI') ?  'selected="selected"' : '' ;?>><?php  _e( 'Slovenščina', 'ultimate-social-media-plus' ); ?></option>
					<option value="sq_AL" <?php echo ($option5['sfsi_plus_icons_language']=='sq_AL') ?  'selected="selected"' : '' ;?>><?php  _e( 'Shqip', 'ultimate-social-media-plus' ); ?></option>
					<option value="sr_RS" <?php echo ($option5['sfsi_plus_icons_language']=='sr_RS') ?  'selected="selected"' : '' ;?>><?php  _e( 'Српски језик', 'ultimate-social-media-plus' ); ?></option>
					<option value="sv_SE" <?php echo ($option5['sfsi_plus_icons_language']=='sv_SE') ?  'selected="selected"' : '' ;?>><?php  _e( 'Svenska', 'ultimate-social-media-plus' ); ?></option>
					<option value="th_TH" <?php echo ($option5['sfsi_plus_icons_language']=='th_TH') ?  'selected="selected"' : '' ;?>><?php  _e( 'ไทย', 'ultimate-social-media-plus' ); ?></option>
					<option value="tl_PH" <?php echo ($option5['sfsi_plus_icons_language']=='tl_PH') ?  'selected="selected"' : '' ;?>><?php  _e( 'Tagalog', 'ultimate-social-media-plus' ); ?></option>
					<option value="tr_TR" <?php echo ($option5['sfsi_plus_icons_language']=='tr_TR') ?  'selected="selected"' : '' ;?>><?php  _e( 'Türkçe', 'ultimate-social-media-plus' ); ?></option>
					<option value="ug_CN" <?php echo ($option5['sfsi_plus_icons_language']=='ug_CN') ?  'selected="selected"' : '' ;?>><?php  _e( 'Uyƣurqə', 'ultimate-social-media-plus' ); ?></option>
					<option value="uk_UA" <?php echo ($option5['sfsi_plus_icons_language']=='uk_UA') ?  'selected="selected"' : '' ;?>><?php  _e( 'Українська', 'ultimate-social-media-plus' ); ?></option>
					<option value="vi_VN" <?php echo ($option5['sfsi_plus_icons_language']=='vi_VN') ?  'selected="selected"' : '' ;?>><?php  _e( 'Tiếng Việt', 'ultimate-social-media-plus' ); ?></option>
					<option value="zh_CN" <?php echo ($option5['sfsi_plus_icons_language']=='zh_CN') ?  'selected="selected"' : '' ;?>><?php  _e( '简体中文', 'ultimate-social-media-plus' ); ?></option>
					<option value="cs_CZ" <?php echo ($option5['sfsi_plus_icons_language']=='cs_CZ') ?  'selected="selected"' : '' ;?>><?php  _e( 'Čeština‎', 'ultimate-social-media-plus' ); ?></option>
					<option value="ur_PK" <?php echo ($option5['sfsi_plus_icons_language']=='ur_PK') ?  'selected="selected"' : '' ;?>><?php  _e( 'اردو‎', 'ultimate-social-media-plus' ); ?></option>
				</select>
			</div>
		</div>
	</div>
    <div class="row new_wind">
        <h4>
			<?php  _e( 'New window', 'ultimate-social-media-plus' ); ?>
        </h4>
        <div class="sfsiplus_row_onl">
        	<p>
				<?php
					_e(
                    	'If user clicks on your icons, do you want to open the page in a new window?', 
                        'ultimate-social-media-plus' 
                    );
				?>
        	</p>
            <ul class="enough_waffling">
                <li>
                    <input name="sfsi_plus_icons_ClickPageOpen" <?php echo ($option5['sfsi_plus_icons_ClickPageOpen']=='yes') ?  'checked="true"' : '' ;?> type="radio" value="yes" class="styled"  />
                    <label>
                    	<?php  _e( 'Yes', 'ultimate-social-media-plus' ); ?>
                    </label>
                </li>
                <li>
                    <input name="sfsi_plus_icons_ClickPageOpen" <?php echo ($option5['sfsi_plus_icons_ClickPageOpen']=='no') ?  'checked="true"' : '' ;?> type="radio" value="no" class="styled" />
                    <label>
                    	<?php  _e( 'No', 'ultimate-social-media-plus' ); ?>
                    </label>
                </li>
            </ul>
      	</div>
    </div>
   <!-- END icon's size and spacing section -->
   
     <!-- icon's floating and stick section start here -->	
    <div class="row sticking">
    	<h4>
            <?php  _e( 'Sticking & Disable on mobile', 'ultimate-social-media-plus' ); ?>
        </h4>
        <p>
            <?php  _e( 'If you decided to show your icons via a widget, you can add the effect that when the user scrolls down, the icons will stick at the  top of the screen so that they are still displayed even if the user scrolled all the way down. Do you want to do that?', 'ultimate-social-media-plus' ); ?>
        </p>
	<!--<div class="space">
	<p class="list">Make icons float?</p>	
	<ul class="enough_waffling"><li><input name="sfsi_plus_icons_float" <?php //echo ($option5['sfsi_plus_icons_float']=='yes') ?  'checked="true"' : '' ;?>  type="radio" value="yes" class="styled"  /><label>Yes</label></li><li><input name="sfsi_plus_icons_float" <?php //echo ($option5['sfsi_plus_icons_float']=='no') ?  'checked="true"' : '' ;?>  type="radio" value="no" class="styled" /><label>No</label></li></ul>
      </div>
      <div class="clear float_options" <?php //if($option5['sfsi_plus_icons_stick']=='yes' || $option5['sfsi_plus_icons_float']=='no') :?> style="display:none" <?php //endif;?>><div class="float">Where shall they float?</div><select name="sfsi_plus_icons_floatPosition" id="sfsi_plus_icons_floatPosition" class="styled"><option value="top-left" <?php //echo ($option5['sfsi_plus_icons_floatPosition']=='top-left') ?  'selected="selected"' : '' ;?> >Top - Left</option><option value="top-right" <?php //echo ($option5['sfsi_plus_icons_floatPosition']=='top-right') ?  'selected="selected"' : '' ;?> >Top - Right</option><option value="center-left" <?php //echo ($option5['sfsi_plus_icons_floatPosition']=='center-left') ?  'selected="selected"' : '' ;?> >Center - Left</option><option value="center-right" <?php //echo ($option5['sfsi_plus_icons_floatPosition']=='center-right') ?  'selected="selected"' : '' ;?> >Center - Right</option><option value="bottom-left" <?php //echo ($option5['sfsi_plus_icons_floatPosition']=='bottom-left') ?  'selected="selected"' : '' ;?> >Bottom - Left</option><option value="bottom-right" <?php //echo ($option5['sfsi_plus_icons_floatPosition']=='bottom-right') ?  'selected="selected"' : '' ;?> >Bottom - Right</option></select></div></div>-->
  
    	<div class="space">
        	<!--<p class="list">Make icons stick?</p>-->	
            <ul class="enough_waffling">
            	<li>
                	<input name="sfsi_plus_icons_stick" <?php echo ($option5['sfsi_plus_icons_stick']=='yes') ?  'checked="true"' : '' ;?> type="radio" value="yes" class="styled"  />
                    <label>
                    	<?php  _e( 'Yes', 'ultimate-social-media-plus' ); ?>
                    </label>
                </li>
                <li>
                	<input name="sfsi_plus_icons_stick" <?php echo ($option5['sfsi_plus_icons_stick']=='no') ?  'checked="true"' : '' ;?>  type="radio" value="no" class="styled" />
                    <label>
                    	<?php  _e( 'No', 'ultimate-social-media-plus' ); ?>
                    </label>
               	</li>
            </ul>
    	</div>
  	
    	<!--disable float icons-->
  		<div class="space disblfltonmbl">
            <p class="list">
            	<?php  _e( 'Disable float icons on mobile devices', 'ultimate-social-media-plus' ); ?>
            </p>	
            <ul class="enough_waffling">
                <li>
                	<input name="sfsi_plus_disable_floaticons" <?php echo ($option5['sfsi_plus_disable_floaticons']=='yes') ?  'checked="true"' : '' ;?> type="radio" value="yes" class="styled"  />
                    <label>
                    	<?php  _e( 'Yes', 'ultimate-social-media-plus' ); ?>
                    </label>
                </li>
                <li>
                    <input name="sfsi_plus_disable_floaticons" <?php echo ($option5['sfsi_plus_disable_floaticons']=='no') ?  'checked="true"' : '' ;?>  type="radio" value="no" class="styled" />
                    <label>
                    	<?php  _e( 'No', 'ultimate-social-media-plus' ); ?>
                    </label>
                </li>
            </ul>
  		</div>
  		<!--disable float icons-->
  	
    	<!--disabling view port meta tag-->
  		<div class="space disblfltonmbl">
            <p class="list">
                <?php  _e( 'Disable auto-scaling feature for mobile devices("viewport" meta tag)', 'ultimate-social-media-plus' ); ?>
            </p>	
            <ul class="enough_waffling">
            	<li>
                    <input name="sfsi_plus_disable_viewport" <?php echo ($sfsi_plus_disable_viewport=='yes') ?  'checked="true"' : '' ;?> type="radio" value="yes" class="styled"  />
                    <label>
                    	<?php  _e( 'Yes', 'ultimate-social-media-plus' ); ?>
                    </label>
                </li>
                <li>
                    <input name="sfsi_plus_disable_viewport" <?php echo ($sfsi_plus_disable_viewport=='no') ?  'checked="true"' : '' ;?>  type="radio" value="no" class="styled" />
                    <label>
                    	<?php  _e( 'No', 'ultimate-social-media-plus' ); ?>
                    </label>
                </li>
            </ul>
  		</div>
  		<!--disabling view port meta tag-->
	</div>
	<!-- END icon's floating and stick section -->
 
	<!-- mouse over text section start here -->
	<div class="row mouse_txt">
        <h4>
            <?php  _e( 'Mouseover text', 'ultimate-social-media-plus' ); ?>
        </h4>
        <p>
            <?php  _e('If you’ve given your icon only one function (i.e. no pop-up where user can perform different actions) then you can define here what text will be displayed if a user moves his mouse over the icon:', 'ultimate-social-media-plus' ); ?>
        </p>
		
        <div class="space">
			<div class="clear"></div>
			<div class="mouseover_field sfsiplus_rss_section">
                <label>
                    <?php  _e( 'RSS:', 'ultimate-social-media-plus' ); ?>
                </label>
            	<input name="sfsi_plus_rss_MouseOverText" value="<?php echo ($option5['sfsi_plus_rss_MouseOverText']!='') ?  $option5['sfsi_plus_rss_MouseOverText'] : '' ;?>" type="text" />
			</div>
            <div class="mouseover_field sfsiplus_email_section">
                <label>
                    <?php  _e( 'Email:', 'ultimate-social-media-plus' ); ?>
                </label>
                <input name="sfsi_plus_email_MouseOverText" value="<?php echo ($option5['sfsi_plus_email_MouseOverText']!='') ?  $option5['sfsi_plus_email_MouseOverText'] : '' ;?>" type="text" />
            </div>
            <div class="clear">
            	<div class="mouseover_field sfsiplus_twitter_section">
                	<label>
                        <?php  _e( 'Twitter:', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <input name="sfsi_plus_twitter_MouseOverText" value="<?php echo ($option5['sfsi_plus_twitter_MouseOverText']!='') ?  $option5['sfsi_plus_twitter_MouseOverText'] : '' ;?>" type="text" />
                </div>
                <div class="mouseover_field sfsiplus_facebook_section">
                    <label>
                        <?php  _e( 'Facebook:', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <input name="sfsi_plus_facebook_MouseOverText" value="<?php echo ($option5['sfsi_plus_facebook_MouseOverText']!='') ?  $option5['sfsi_plus_facebook_MouseOverText'] : '' ;?>" type="text" />
                </div>
            </div>
        
			<div class="clear">
                <div class="mouseover_field sfsiplus_google_section">
                    <label>
                        <?php  _e( 'Google:', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <input name="sfsi_plus_google_MouseOverText" value="<?php echo ($option5['sfsi_plus_google_MouseOverText']!='') ?  $option5['sfsi_plus_google_MouseOverText'] : '' ;?>"  type="text" />
                </div>
                <div class="mouseover_field sfsiplus_linkedin_section">
                    <label>
                        <?php  _e( 'LinkedIn:', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <input name="sfsi_plus_linkedIn_MouseOverText" value="<?php echo ($option5['sfsi_plus_linkedIn_MouseOverText']!='') ?  $option5['sfsi_plus_linkedIn_MouseOverText'] : '' ;?>"  type="text" />
                </div>
			</div>
		
        	<div class="clear">
                <div class="mouseover_field sfsiplus_pinterest_section">
                    <label>
                        <?php  _e( 'Pinterest:', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <input name="sfsi_plus_pinterest_MouseOverText" value="<?php echo ($option5['sfsi_plus_pinterest_MouseOverText']!='') ?  $option5['sfsi_plus_pinterest_MouseOverText'] : '' ;?>" type="text" />
                </div>
                <div class="mouseover_field sfsiplus_youtube_section">
                    <label>
                        <?php  _e( 'Youtube:', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <input name="sfsi_plus_youtube_MouseOverText" value="<?php echo ($option5['sfsi_plus_youtube_MouseOverText']!='') ?  $option5['sfsi_plus_youtube_MouseOverText'] : '' ;?>" type="text" />
                </div>
			</div>
		
        	<div class="clear">
                <div class="mouseover_field sfsiplus_instagram_section">
                    <label>
                        <?php  _e( 'Instagram:', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <input name="sfsi_plus_instagram_MouseOverText" value="<?php echo ($option5['sfsi_plus_instagram_MouseOverText']!='') ?  $option5['sfsi_plus_instagram_MouseOverText'] : '' ;?>" type="text" />
                </div>
                <div class="mouseover_field sfsiplus_houzz_section">
                    <label>
                        <?php  _e( 'Houzz:', 'ultimate-social-media-plus' ); ?>
                    </label>
                    <input name="sfsi_plus_houzz_MouseOverText" value="<?php echo (isset($option5['sfsi_plus_houzz_MouseOverText']) && $option5['sfsi_plus_houzz_MouseOverText']!='') ?  $option5['sfsi_plus_houzz_MouseOverText'] : 'Houzz' ;?>" type="text" />
                </div>
			</div>
        
        <!--<div class="clear">
            <div class="mouseover_field sfsiplus_share_section">
                <label>Share:</label>
                <input name="sfsi_plus_share_MouseOverText" value="<?php //echo ($option5['sfsi_plus_share_MouseOverText']!='') ?  $option5['sfsi_plus_share_MouseOverText'] : '' ;?>" type="text" />
            </div>
        </div>-->
         	
        	<div class="clear"> </div>
        	<div class="plus_custom_m">
				<?php 
                    $sfsiMouseOverTexts =  unserialize($option5['sfsi_plus_custom_MouseOverTexts']);
                    $count=1; for($i=$first_key; $i<=$endkey; $i++) :
                ?> 
            	<?php if(!empty( $icons[$i])) : ?>
                    
                    <div class="mouseover_field sfsiplus_custom_section sfsiICON_<?php echo $i; ?>">
                        <label>
                            <?php  _e( 'Custom', 'ultimate-social-media-plus' ); ?>
                            <?php echo $count; ?>:
                        </label>
                        <input name="sfsi_plus_custom_MouseOverTexts[]" value="<?php echo (isset($sfsiMouseOverTexts[$i]) && $sfsiMouseOverTexts[$i]!='') ?  $sfsiMouseOverTexts[$i] : '' ;?>" type="text" file-id="<?php echo $i; ?>" />
                    </div>
                	<?php if($count%2==0): ?>
                		<div class="clear"> </div>  
					<?php endif; ?>
            		<?php $count++; 
				endif; endfor; ?>
			</div>
		</div>
	</div>
    <!-- END mouse over text section -->
    
    <!-- SAVE BUTTON SECTION   --> 
    <div class="save_button">
        <img src="<?php echo SFSI_PLUS_PLUGURL ?>images/ajax-loader.gif" class="loader-img" />
        <?php  $nonce = wp_create_nonce("update_plus_step5"); ?>
        <a href="javascript:;" id="sfsi_plus_save5" title="Save" data-nonce="<?php echo $nonce;?>"><?php  _e( 'Save', 'ultimate-social-media-plus' ); ?></a>
    </div>
    <!-- END SAVE BUTTON SECTION   -->
    
    <a class="sfsiColbtn closeSec" href="javascript:;" >
  		<?php  _e( 'Collapse area', 'ultimate-social-media-plus' ); ?>
    </a>
    <label class="closeSec"></label>
    
    <!-- ERROR AND SUCCESS MESSAGE AREA-->
    <p class="red_txt errorMsg" style="display:none"> </p>
    <p class="green_txt sucMsg" style="display:none"> </p>
    <div class="clear"></div>
</div>
<!-- END Section 5 "Any other wishes for your main icons?"-->