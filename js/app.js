$(function(){
	$.stellar();
	$('.mainNav a').on('click',function(e){
		$('.nav li').removeClass('active');
		$(this).parent().addClass('active');
		$('body').scrollTo(this.hash, this.hash,{offset:-50});
		e.preventDefault();
	});
});