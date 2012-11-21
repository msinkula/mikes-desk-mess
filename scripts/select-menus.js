
		var catDropdown = document.getElementById("cat");
		function onCatChange() {
			if ( catDropdown.options[catDropdown.selectedIndex].value > 0 ) {
				location.href = "<?php echo get_option('home');
	?>/?cat="+catDropdown.options[catDropdown.selectedIndex].value;
			}
		}
		catDropdown.onchange = onCatChange;



		var pageDropdown = document.getElementById("page_id");
		function onPageChange() {
			if ( pageDropdown.options[pageDropdown.selectedIndex].value > 0 ) {
				location.href = "<?php echo get_option('home');
	?>/?page_id="+pageDropdown.options[pageDropdown.selectedIndex].value;
			}
		}
		pageDropdown.onchange = onPageChange;
