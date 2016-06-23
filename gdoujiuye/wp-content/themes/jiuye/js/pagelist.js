$(function(){
	$('.tab').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$this = $(this);
		$this.addClass('active').siblings().removeClass('active');
	});
})