$(document).ready(function() {
	$('input[value]').each(function(){
		if(this.type == 'text' && (this.name=="name" || this.name=="from")) {
			$(this).focus(function(){ if (this.value == this.defaultValue) { this.value = ''; }});
			$(this).blur(function(){ if (!this.value.length) { this.value = this.defaultValue; }});
		}
	});
});

$(function() {
  if($.cookie('dont_show_footer_form') == null){
    $('#footerform').slideDown("slow");
  }
});


function slidedown() {
  $(function() {
    $("#dontshowanymore").click(function() { $.cookie('dont_show_footer_form', 'true', { expires: 3650, path: '/'}); });
	$("#closefornow").click(function() { $.cookie('dont_show_footer_form', 'true'); });
    $('#footerform').slideUp("slow");
  });
}