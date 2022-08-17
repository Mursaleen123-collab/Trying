jQuery(document).ready(function () {
	//////////////
	//////////////
	$('#btn-print').click(function () {
		// window.print();

		let wspFrame = document.getElementById('print-invoice').contentWindow;
		wspFrame.focus();
		wspFrame.print();
	});
	//////////////
	//////////////

	
});
