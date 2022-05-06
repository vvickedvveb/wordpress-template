$(document).ready(function() {

	/**
	 * Financing calculator
	 */
	$('input.down-price').prop('disabled', true)
	$('.select-price').on('change', function() {
		var carOption = this.value
		var basePrice = 1600
		var thePrice = ''
		var finYears = 1
		var downPayAmt = 0
		const INTEREST_RATE = 0.07

		/**
		 * Calculations of monthly payment
		 */
		function calcMonthlyPayment() {
			// If user enter amount > than price of car set to 0
			if (downPayAmt > thePrice) {
				downPayAmt = 0
				$('input.down-price').val(downPayAmt);
			}
			monthlyPayment = (thePrice - downPayAmt) / (finYears * 12)
			var interestAdded = monthlyPayment * INTEREST_RATE
			var finalMonthlyPayment = monthlyPayment + interestAdded
			finalMonthlyPayment = parseFloat(finalMonthlyPayment).toFixed(2)
			$('input.month-price').val(finalMonthlyPayment)
		}

		// It's nice that Python 3.10+ finally has a switch
		switch (carOption) {
			case 'sedan':
			  thePrice = basePrice
			  break;
			case 'sunroof':
				thePrice = basePrice + 100
			  break;
			case 'convertible':
				thePrice = basePrice + 500
			break;
			default:
			  thePrice = 0
		}

		// Assign car price
		$("input.base-price").val(thePrice)

 		// Enable down pay field & calc. monthly payments
		if (thePrice > 0) {
			$('input.down-price').prop('disabled', false)

			$('input.down-price').blur(function() {
				downPayAmt = $('input.down-price').val();
				calcMonthlyPayment()
			})

			$('.year-price').on('change', function() {
				finYears = this.value
				calcMonthlyPayment()
			})

			calcMonthlyPayment()
		}
	});


	/**
	 * Change VW colour
	 */
	$('.preview').on('click',  function() {
		$('#changeMe').prop('src', this.src);
	});


	/**
	 * Scroll to top
	 */
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){
			$('.page-title').addClass("sticky");
		}
		else{
			$('.page-title').removeClass("sticky");
		}
	});

});