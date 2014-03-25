
	  // For IE11. May we one day live without your BS.
	  Modernizr.addTest('preserve3d', function(){return Modernizr.testAllProps('transformStyle', 'preserve-3d');});
	$(document).ready(function(){

		$('.card').removeClass().addClass($.payment.cardType($('.cardNum').val())+' card');
		// set up block configuration
		$('.card .action').click(function(){
			$('.card').toggleClass('flip');
		});

		$('.cardNum').keyup(function(){
			var val = $(this).val();
			$('.card').removeClass().addClass($.payment.cardType(val)+' card');
			$('.showcardNum').text(val);
		});
		$('.expire input').change(function(){
			var val = $(this).val();
			$('.expireback').text(val);
		});
		$('.expire input').keydown(function(e){
		  if ( e.which == 9 && !e.shiftKey ) {
			$('.card').toggleClass('flip');
		  }
		});
		$('.cvv2').keydown(function(e){
		    if (e.which === 9 && e.shiftKey) {
				$('.card').toggleClass('flip');
		    }
		});
		$('.first_name').change(function(){
			var val = $(this).val();
			$('.cardName span.first').text(val);
		});
		$('.last_name').change(function(){
			var val = $(this).val();
			$('.cardName span.last').text(val);
		});
		 $(".cardNum").payment('formatCardNumber');
		  $(".expire input").payment('formatCardExpiry');
		  $(".cvv2").payment('formatCardCVC');

		  $('body').on('click','a[data-function="remove-card"]',function(e)
		  {
		  	$(this).remove();
			$('.card').removeClass('card');
		  })
	});