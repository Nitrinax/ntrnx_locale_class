<?php

namespace NTRNX_LOCALE;

/* begin of class */
class dependences extends \NTRNX_LOCALE\ntrnx_locale {

	/* begin of class constructor */
	function __construct (){	
	} /* end of class constructor */

	/* class destructor */
	function __destruct() {
	} /* end of class destructor */

	static function state() {

		if (\NTRNX_LOCALE\config::$allow_dependences_check === TRUE) {

			return TRUE;

		} else if (self::_CLASS_DEPENDENCES === TRUE) {

			return TRUE;

		} else {

			return FALSE;

		}

	}

	static function get() {

		return self::$_class_dependences;

	}

	static function check($detailed = FALSE) {

		/* dependences check passed */
		define('MSG_DEPENDENCES_CHECK_PASSED', 0);

		/* dependences check failed */
		define('MSG_DEPENDENCES_CHECK_FAILED', -1);

		$dependences_array = self::$_class_dependences;

		if ($detailed) {

			$result = array();

		} else {

			$result = "";

		}

		$state = "";

		$key = "";

		$value = "";

		foreach ($dependences_array as $key => $value) {

			/* check of dependences source */
			switch($key) {

				/* if php */
				case "PHP":

					/* check for needed version */
					if (version_compare(phpversion(), $value, "<")) {

						$state = MSG_DEPENDENCES_CHECK_FAILED;

					} else {

						$state = MSG_DEPENDENCES_CHECK_PASSED;

					}

				break;

				default:

					$state = MSG_DEPENDENCES_CHECK_FAILED;

				break;

			}

			if ($detailed) { array_push ($result, array($key, $state)); } else { $result = $state; }

		}

		return $result;	

	}

} /* end of class */

?>