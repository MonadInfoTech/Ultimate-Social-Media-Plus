<!-- Start jivo chat code -->

<script type='text/javascript'>
var sfsi_jivo_init=function(){ var widget_id = 'heGfAHWfsn';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}};
var sfsi_dummy_chat_icon={};
sfsi_dummy_chat_icon.element=document.createElement('div');
sfsi_dummy_chat_icon.element.id="sfsi_dummy_chat_icon";
sfsi_dummy_chat_icon.element.style="position:fixed; bottom:0;right:10px;width:350px;height:74px;cursor:pointer;background:url('<?php echo SFSI_PLUS_PLUGURL.'images/Chat_with_us_bar_dark_green.png' ?>')";
sfsi_dummy_chat_icon.element.onclick=function(){
	sfsi_jivo_init();
	// jQuery(sfsi_dummy_chat_icon.element).html("<p style='text-align: center;font-size: 18px;'>Loading...</p>");
	jQuery(sfsi_dummy_chat_icon.element).hide();
}
var jivo_onLoadCallback = function(){
	jivo_api.showProactiveInvitation('How can I help you?');
	// jQuery(sfsi_dummy_chat_icon.element).hide();
};
// sfsi_dummy_chat_icon.heading= document.createElement('p');
// sfsi_dummy_chat_icon.warning= document.createElement('p');
// sfsi_dummy_chat_icon.heading.style="margin: 0;text-align: center;font-size: 18px;margin-top: 5px;"
// sfsi_dummy_chat_icon.warning.style="font-size:11px;text-align: center;margin-bottom: 0;margin-top: 4px;"
// sfsi_dummy_chat_icon.heading.appendChild(document.createTextNode("Questions? Chat with us!"));
// sfsi_dummy_chat_icon.warning.appendChild(document.createTextNode("This will establish connection to the chat servers."));
// sfsi_dummy_chat_icon.element.appendChild(sfsi_dummy_chat_icon.heading);
// sfsi_dummy_chat_icon.element.appendChild(sfsi_dummy_chat_icon.warning);
sfsi_dummy_chat_icon.body=document.getElementsByTagName('body');
if(sfsi_dummy_chat_icon.body.length>0){
	sfsi_dummy_chat_icon.body[0].appendChild(sfsi_dummy_chat_icon.element);
}else{
	document.appendChild(sfsi_dummy_chat_icon.element);
}
</script>

<!-- End jivo chat code -->
