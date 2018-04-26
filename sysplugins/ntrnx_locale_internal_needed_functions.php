<?php

namespace NTRNX_LOCALE;

/* begin of class */
class needed_functions extends \NTRNX_LOCALE\ntrnx_locale {

	/* begin of class constructor */
	function __construct (){
	} /* end of class constructor */

	/* class destructor */
	function __destruct() {
	} /* end of class destructor */

	static function state() {

		if (\NTRNX_LOCALE\config::$allow_functions_check === TRUE) {

			return TRUE;

		} else if (self::_CLASS_NEEDED_FUNCTIONS === TRUE) {

			return TRUE;

		} else {

			return FALSE;

		}

	}

	static function get() {

		return self::$_class_needed_functions;

	}

    static function check($detailed = FALSE) {

		/* function check passed */
		define('MSG_FUNCTION_CHECK_PASSED', 0);

		/* function check failed */
		define('MSG_FUNCTION_CHECK_FAILED', -1);

		$function_array = self::$_class_needed_functions;

		if ($detailed) {

			$result = array();

		} else {

			$result = "";

		}

		$state = "";

		$key = "";

		//$value = "";

		//foreach ($function_array as $key => $value) {
		foreach ($function_array as $key) {		

			if (!function_exists($key)) {

				$state = MSG_FUNCTION_CHECK_FAILED;

			} else {

				$state = MSG_FUNCTION_CHECK_PASSED;

			}

			//echo $key . " : " . $state . "</br>";

			if ($detailed) {

				array_push ($result, array($key, $state));

			} else {

				if (($result === MSG_FUNCTION_CHECK_PASSED) OR ($result === "")) { $result = $state; }

			}
		

		}

		return $result;

	}

} /* end of class */

?>