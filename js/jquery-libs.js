jQuery(document).ready(function() {
	jQuery('input[value]').each(function(){
		if(this.type == 'text' && (this.name=="name" || this.name=="from")) {
			jQuery(this).focus(function(){ if (this.value == this.defaultValue) { this.value = ''; }});
			jQuery(this).blur(function(){ if (!this.value.length) { this.value = this.defaultValue; }});
		}
	});
});

jQuery(function() {
  if(jQuery.cookie('dont_show_footer_form') == null){
    jQuery('#footerform').slideDown("slow");
  }
});


function slidedown() {
  jQuery(function() {
    jQuery("#dontshowanymore").click(function() { jQuery.cookie('dont_show_footer_form', 'true', { expires: 3650, path: '/'}); });
	jQuery("#closefornow").click(function() { jQuery.cookie('dont_show_footer_form', 'true'); });
    jQuery('#footerform').slideUp("slow");
  });
}