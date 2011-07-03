<?php
/**
 * Environment Settings
 * 
 */
// For testing
error_reporting('E_ALL ^ E_NOTICE');
// For Production
//error_reporting('E_NONE');

/**
 * Logic
 * 
 */
// Only process the request if it's a POST and the Latitude and Longitude variables are defined
if (isset($_POST['lat']) && isset($_POST['lng'])) {
	// Include the Sunlight Labs class file
	require_once('class.sunlightlabs.php');
	// Instantiate the class
	$sll = new SunlightDistrict();
	// If all's good.
	if ($sll) {
		// Encode the response in JSON
		$res = json_encode($sll->districtsGeoloc($_POST['lat'], $_POST['lng']));
		// If all's good (again)
		if ($res) {
			// Spit it out!
			echo $res;
		} else {
			// Otherwise, send nothing back
			echo '';
		}
	} else {
		// Otherwise, send nothing back
		echo '';
	}
} else {
	// Otherwise, send nothing back
	echo '';
}
?>