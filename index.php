<?php

	/**
	  php Country Dropdown example
	  
	  See phpCountryDropdown.lib.php for details
	*/
	  
		require_once dirname(__THIS__) . '/phpCountryDropdown.lib.php';
		
	// This will draw a country dropdown with the name 'country', with
	// the US selected as the default country.
		echo phpCountryDropdown('us');
		echo phpUSStateDropdown('na');