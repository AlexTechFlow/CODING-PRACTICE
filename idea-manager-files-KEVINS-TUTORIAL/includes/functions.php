<?php

	function confirm_query($result_set) {

			// Test if there was a query error
			if (!$result_set) {
				die("Database query failed.");
			}
			
	}

?>