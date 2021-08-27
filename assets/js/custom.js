function validateNumber() {
		var quantity = document.getElementById('quantity').value;
		
		if (quantity == 0) {
		 	$('#demo').removeClass('hide');
		 	alert('Please Type More than 0 Number');
		}
	}
	function validatePrice() {
		var price = document.getElementById('price').value;
		if (price == 0) {
		 	$('#priceDiv').removeClass('hide');
		 	alert('Please Type More than 0 Number');
		}
	}
/** Add Supplier */
	$(document).on('click', '#supplier_save', function(event) {
		var name = $('#name').val();
		var phone_no = $('#phone_no').val();

		if ( ! name) {
			alert('Please Type Supplier Name.');
			return false;
		}
		
		if ( ! phone_no) {
			alert('Please Supplier mobile.');
			return false;
		}

	});
	
	/** Add customer */
	$(document).on('click', '#customer_save', function(event) {
		var code = $('#code').val();
		var name = $('#name').val();
		var email = $('#email').val();
		var mobile = $('#mobile').val();

		if ( ! code) {
			alert('Please give a code no.');
			return false;
		}
		if ( ! name) {
			alert('Please Type Customer Name.');
			return false;
		}
		if ( ! email) {
			alert('Please Customer Email.');
			return false;
		}
		if ( ! mobile) {
			alert('Please Customer mobile.');
			return false;
		}

	});
