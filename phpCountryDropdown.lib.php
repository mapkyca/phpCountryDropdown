<?php

	/**
		PHP country dropdown
		
		This will hopefully prevent anyone from having to write this from
		scratch ever again …
		
		Ben Werdmuller <ben@benwerd.com> <http://benwerd.com/>
		
		License: public domain
	**/
	
	/**
	 * Draws a select box containing countries.
	 *
	 * @param $currentValue The current value - either the name of the country or the country shortcode. Defaults to null.
	 * @param $shortCodeValues If set to true, values passed on form submission will be the country shortcode. Full name otherwise. Defaults to true.
	 * @param $name The name of the select form element. Defaults to 'country'.
	 * @param $id The ID of the select form element. Defaults to 'countryDropdown'.
	 * @param $html Any other arbitrary HTML for inclusion in the initial <select> tag.
	 * @return string The country dropdown. 
	 */
	function phpCountryDropdown($currentValue = null, $shortCodeValues = true, $name = 'country', $id = 'countryDropdown', $html = '') {
	
		return phpLocationDropdown(getCountryArray(), $currentValue, $shortCodeValues, $name, $id, $html);
	
	}
	
	/**
	 * Draws a select box containing US States.
	 *
	 * @param $currentValue The current value - either the name of the country or the country shortcode. Defaults to null.
	 * @param $shortCodeValues If set to true, values passed on form submission will be the country shortcode. Full name otherwise. Defaults to true.
	 * @param $name The name of the select form element. Defaults to 'stateUS'.
	 * @param $id The ID of the select form element. Defaults to 'stateUSDropdown'.
	 * @param $html Any other arbitrary HTML for inclusion in the initial <select> tag.
	 * @return string The country dropdown. 
	 */
	function phpUSStateDropdown($currentValue = null, $shortCodeValues = true, $name = 'stateUS', $id = 'stateUSDropdown', $html = '') {
	
		return phpLocationDropdown(getUSStatesArray(), $currentValue, $shortCodeValues, $name, $id, $html);
	
	}
	
	/**
	 * Returns a list of countries for inclusion in a select tag.
	 * @param $locaitons The list of locations to use, with shortcodes as the key and the full names as the value
	 * @param $currentValue The current value - either the name of the country or the country shortcode. Defaults to null.
	 * @param $shortCodeValues If set to true, values passed on form submission will be the country shortcode. Full name otherwise. Defaults to true.
	 * @return string The options to include.
	 */
	function phpLocationDropdownOptions($locations, $shortcodeValues = true, $currentValue = null) {
	
		$currentValue = strtolower($currentValue);
		$options = '';
	
		foreach($locations as $shortcode => $name) {
			$options .= '<option value="';
			if ($shortcodeValues) $options .= $shortcode; else $options .= $name;
			$options .= '"';
			if ($currentValue == strtolower($shortcode) || $currentValue == strtolower($name)) $options .= ' selected="selected"';
			$options .= '>' . $name . '</option>';
		}
		
		return $options;
	
	}

	/**
	 * Draws a select box containing arbitrary locale information.
	 *
	 * @param $locaitons The list of locations to use, with shortcodes as the key and the full names as the value
	 * @param $currentValue The current value - either the name of the country or the country shortcode. Defaults to null.
	 * @param $shortCodeValues If set to true, values passed on form submission will be the country shortcode. Full name otherwise. Defaults to true.
	 * @param $name The name of the select form element. Defaults to 'country'.
	 * @param $id The ID of the select form element. Defaults to 'countryDropdown'.
	 * @param $html Any other arbitrary HTML for inclusion in the initial <select> tag.
	 * @return string The country dropdown. 
	 */
	function phpLocationDropdown($locations, $currentValue = null, $shortCodeValues = true, $name = 'country', $id = 'countryDropdown', $html = '') {
	
		return '<select name="' . $name . '" id="' . $id . '" ' . $html . '>' . phpLocationDropdownOptions($locations, $shortCodeValues, $currentValue) . '</select>';
	
	}
	
	/**
	 * Retrieves a list of countries in an array, with the country
	 * shortcode as the key.
	 */
	function getCountryArray() {
	
		// Countries list originally taken from http://snippets.dzone.com/posts/show/6623
		return array(
			'AF' => 'Afghanistan',
			'AL' => 'Albania',
			'DZ' => 'Algeria',
			'AS' => 'American Samoa',
			'AD' => 'Andorra',
			'AO' => 'Angola',
			'AI' => 'Anguilla',
			'AQ' => 'Antarctica',
			'AG' => 'Antigua And Barbuda',
			'AR' => 'Argentina',
			'AM' => 'Armenia',
			'AW' => 'Aruba',
			'AU' => 'Australia',
			'AT' => 'Austria',
			'AZ' => 'Azerbaijan',
			'BS' => 'Bahamas',
			'BH' => 'Bahrain',
			'BD' => 'Bangladesh',
			'BB' => 'Barbados',
			'BY' => 'Belarus',
			'BE' => 'Belgium',
			'BZ' => 'Belize',
			'BJ' => 'Benin',
			'BM' => 'Bermuda',
			'BT' => 'Bhutan',
			'BO' => 'Bolivia',
			'BA' => 'Bosnia And Herzegowina',
			'BW' => 'Botswana',
			'BV' => 'Bouvet Island',
			'BR' => 'Brazil',
			'IO' => 'British Indian Ocean Territory',
			'BN' => 'Brunei Darussalam',
			'BG' => 'Bulgaria',
			'BF' => 'Burkina Faso',
			'BI' => 'Burundi',
			'KH' => 'Cambodia',
			'CM' => 'Cameroon',
			'CA' => 'Canada',
			'CV' => 'Cape Verde',
			'KY' => 'Cayman Islands',
			'CF' => 'Central African Republic',
			'TD' => 'Chad',
			'CL' => 'Chile',
			'CN' => 'China',
			'CX' => 'Christmas Island',
			'CC' => 'Cocos (Keeling) Islands',
			'CO' => 'Colombia',
			'KM' => 'Comoros',
			'CG' => 'Congo',
			'CD' => 'Congo, The Democratic Republic Of The',
			'CK' => 'Cook Islands',
			'CR' => 'Costa Rica',
			'CI' => 'Cote D\'Ivoire',
			'HR' => 'Croatia (Local Name: Hrvatska)',
			'CU' => 'Cuba',
			'CY' => 'Cyprus',
			'CZ' => 'Czech Republic',
			'DK' => 'Denmark',
			'DJ' => 'Djibouti',
			'DM' => 'Dominica',
			'DO' => 'Dominican Republic',
			'TP' => 'East Timor',
			'EC' => 'Ecuador',
			'EG' => 'Egypt',
			'SV' => 'El Salvador',
			'GQ' => 'Equatorial Guinea',
			'ER' => 'Eritrea',
			'EE' => 'Estonia',
			'ET' => 'Ethiopia',
			'FK' => 'Falkland Islands (Malvinas)',
			'FO' => 'Faroe Islands',
			'FJ' => 'Fiji',
			'FI' => 'Finland',
			'FR' => 'France',
			'FX' => 'France, Metropolitan',
			'GF' => 'French Guiana',
			'PF' => 'French Polynesia',
			'TF' => 'French Southern Territories',
			'GA' => 'Gabon',
			'GM' => 'Gambia',
			'GE' => 'Georgia',
			'DE' => 'Germany',
			'GH' => 'Ghana',
			'GI' => 'Gibraltar',
			'GR' => 'Greece',
			'GL' => 'Greenland',
			'GD' => 'Grenada',
			'GP' => 'Guadeloupe',
			'GU' => 'Guam',
			'GT' => 'Guatemala',
			'GN' => 'Guinea',
			'GW' => 'Guinea-Bissau',
			'GY' => 'Guyana',
			'HT' => 'Haiti',
			'HM' => 'Heard And Mc Donald Islands',
			'VA' => 'Holy See (Vatican City State)',
			'HN' => 'Honduras',
			'HK' => 'Hong Kong',
			'HU' => 'Hungary',
			'IS' => 'Iceland',
			'IN' => 'India',
			'ID' => 'Indonesia',
			'IR' => 'Iran (Islamic Republic Of)',
			'IQ' => 'Iraq',
			'IE' => 'Ireland',
			'IL' => 'Israel',
			'IT' => 'Italy',
			'JM' => 'Jamaica',
			'JP' => 'Japan',
			'JO' => 'Jordan',
			'KZ' => 'Kazakhstan',
			'KE' => 'Kenya',
			'KI' => 'Kiribati',
			'KP' => 'Korea, Democratic People\'s Republic Of',
			'KR' => 'Korea, Republic Of',
			'KW' => 'Kuwait',
			'KG' => 'Kyrgyzstan',
			'LA' => 'Lao People\'s Democratic Republic',
			'LV' => 'Latvia',
			'LB' => 'Lebanon',
			'LS' => 'Lesotho',
			'LR' => 'Liberia',
			'LY' => 'Libyan Arab Jamahiriya',
			'LI' => 'Liechtenstein',
			'LT' => 'Lithuania',
			'LU' => 'Luxembourg',
			'MO' => 'Macau',
			'MK' => 'Macedonia, Former Yugoslav Republic Of',
			'MG' => 'Madagascar',
			'MW' => 'Malawi',
			'MY' => 'Malaysia',
			'MV' => 'Maldives',
			'ML' => 'Mali',
			'MT' => 'Malta',
			'MH' => 'Marshall Islands',
			'MQ' => 'Martinique',
			'MR' => 'Mauritania',
			'MU' => 'Mauritius',
			'YT' => 'Mayotte',
			'MX' => 'Mexico',
			'FM' => 'Micronesia, Federated States Of',
			'MD' => 'Moldova, Republic Of',
			'MC' => 'Monaco',
			'MN' => 'Mongolia',
			'MS' => 'Montserrat',
			'MA' => 'Morocco',
			'MZ' => 'Mozambique',
			'MM' => 'Myanmar',
			'NA' => 'Namibia',
			'NR' => 'Nauru',
			'NP' => 'Nepal',
			'NL' => 'Netherlands',
			'AN' => 'Netherlands Antilles',
			'NC' => 'New Caledonia',
			'NZ' => 'New Zealand',
			'NI' => 'Nicaragua',
			'NE' => 'Niger',
			'NG' => 'Nigeria',
			'NU' => 'Niue',
			'NF' => 'Norfolk Island',
			'MP' => 'Northern Mariana Islands',
			'NO' => 'Norway',
			'OM' => 'Oman',
			'PK' => 'Pakistan',
			'PW' => 'Palau',
			'PA' => 'Panama',
			'PG' => 'Papua New Guinea',
			'PY' => 'Paraguay',
			'PE' => 'Peru',
			'PH' => 'Philippines',
			'PN' => 'Pitcairn',
			'PL' => 'Poland',
			'PT' => 'Portugal',
			'PR' => 'Puerto Rico',
			'QA' => 'Qatar',
			'RE' => 'Reunion',
			'RO' => 'Romania',
			'RU' => 'Russian Federation',
			'RW' => 'Rwanda',
			'KN' => 'Saint Kitts And Nevis',
			'LC' => 'Saint Lucia',
			'VC' => 'Saint Vincent And The Grenadines',
			'WS' => 'Samoa',
			'SM' => 'San Marino',
			'ST' => 'Sao Tome And Principe',
			'SA' => 'Saudi Arabia',
			'SN' => 'Senegal',
			'SC' => 'Seychelles',
			'SL' => 'Sierra Leone',
			'SG' => 'Singapore',
			'SK' => 'Slovakia (Slovak Republic)',
			'SI' => 'Slovenia',
			'SB' => 'Solomon Islands',
			'SO' => 'Somalia',
			'ZA' => 'South Africa',
			'GS' => 'South Georgia, South Sandwich Islands',
			'ES' => 'Spain',
			'LK' => 'Sri Lanka',
			'SH' => 'St. Helena',
			'PM' => 'St. Pierre And Miquelon',
			'SD' => 'Sudan',
			'SR' => 'Suriname',
			'SJ' => 'Svalbard And Jan Mayen Islands',
			'SZ' => 'Swaziland',
			'SE' => 'Sweden',
			'CH' => 'Switzerland',
			'SY' => 'Syrian Arab Republic',
			'TW' => 'Taiwan',
			'TJ' => 'Tajikistan',
			'TZ' => 'Tanzania, United Republic Of',
			'TH' => 'Thailand',
			'TG' => 'Togo',
			'TK' => 'Tokelau',
			'TO' => 'Tonga',
			'TT' => 'Trinidad And Tobago',
			'TN' => 'Tunisia',
			'TR' => 'Turkey',
			'TM' => 'Turkmenistan',
			'TC' => 'Turks And Caicos Islands',
			'TV' => 'Tuvalu',
			'UG' => 'Uganda',
			'UA' => 'Ukraine',
			'AE' => 'United Arab Emirates',
			'GB' => 'United Kingdom',
			'US' => 'United States',
			'UM' => 'United States Minor Outlying Islands',
			'UY' => 'Uruguay',
			'UZ' => 'Uzbekistan',
			'VU' => 'Vanuatu',
			'VE' => 'Venezuela',
			'VN' => 'Viet Nam',
			'VG' => 'Virgin Islands (British)',
			'VI' => 'Virgin Islands (U.S.)',
			'WF' => 'Wallis And Futuna Islands',
			'EH' => 'Western Sahara',
			'YE' => 'Yemen',
			'YU' => 'Yugoslavia',
			'ZM' => 'Zambia',
			'ZW' => 'Zimbabwe'
		);
		
	}
		
	/**
	 * Retrieves a list of US States in an array, with the State
	 * shortcode as the key.
	 */
	function getUSStatesArray() {
	
		return array(
			'AL'=>'Alabama',
			'AK'=>'Alaska',
			'AZ'=>'Arizona',
			'AR'=>'Arkansas',
			'CA'=>'California',
			'CO'=>'Colorado',
			'CT'=>'Connecticut',
			'DE'=>'Delaware',
			'DC'=>'District Of Columbia',
			'FL'=>'Florida',
			'GA'=>'Georgia',
			'HI'=>'Hawaii',
			'ID'=>'Idaho',
			'IL'=>'Illinois', 
			'IN'=>'Indiana',
			'IA'=>'Iowa',
			'KS'=>'Kansas',
			'KY'=>'Kentucky',
			'LA'=>'Louisiana',
			'ME'=>'Maine',
			'MD'=>'Maryland',
			'MA'=>'Massachusetts',
			'MI'=>'Michigan',
			'MN'=>'Minnesota',
			'MS'=>'Mississippi',
			'MO'=>'Missouri',
			'MT'=>'Montana',
			'NE'=>'Nebraska',
			'NV'=>'Nevada',
			'NH'=>'New Hampshire',
			'NJ'=>'New Jersey',
			'NM'=>'New Mexico',
			'NY'=>'New York',
			'NC'=>'North Carolina',
			'ND'=>'North Dakota',
			'OH'=>'Ohio',
			'OK'=>'Oklahoma', 
			'OR'=>'Oregon',
			'PA'=>'Pennsylvania',
			'RI'=>'Rhode Island',
			'SC'=>'South Carolina',
			'SD'=>'South Dakota',
			'TN'=>'Tennessee',
			'TX'=>'Texas',
			'UT'=>'Utah',
			'VT'=>'Vermont',
			'VA'=>'Virginia',
			'WA'=>'Washington',
			'WV'=>'West Virginia',
			'WI'=>'Wisconsin',
			'WY'=>'Wyoming',
			'NA'=>'Not applicable',
		);

	}
