<?php

namespace NTRNX_LOCALE;

/* begin of class */
class update extends \NTRNX_LOCALE\ntrnx_locale {

	/* begin of class constructor */
	function __construct (){	
	} /* end of class constructor */

	/* class destructor */
	function __destruct() {
	} /* end of class destructor */

	static function state() {

		if (\NTRNX_LOCALE\config::$allow_update_check === TRUE) {

			return TRUE;

		} else if (self::_CLASS_UPDATE_CHECK === TRUE) {

			return TRUE;

		} else {

			return FALSE;

		}

	}

	static function get_class_version() {}

	static function get_module_version() {}

	static function get_plugin_version() {}

	static function get_sysplugin_version() {}

	static function get_local_version() {

		$version_string_separator = ".";

		return \NTRNX_LOCALE\get_version::major()
				. $version_string_separator
				. \NTRNX_LOCALE\get_version::minor()
				. $version_string_separator
				. \NTRNX_LOCALE\get_version::build()
				. $version_string_separator
				. \NTRNX_LOCALE\get_version::revision();

	}

	static function get_remote_version() {

		$url = self::_CLASS_UPDATE_RAW_VERSION_URL;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($ch, CURLOPT_HEADER, false);
		//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$data = curl_exec($ch);
		curl_close($ch);

		return $data;

	}

	static function check($detailed = FALSE) {

		/* update possible, there is an update available */
		define('MSG_UPDATE_POSSIBLE_THERE_IS_AN_UPDATE_AVAILABLE', 1);

		/* no updated needed, you have the latest version */
		define('MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION', 0);

		/* update error, unknown version installed */
		define('MSG_ERROR_UNKNOWN_VERSION', -1);

		if ($detailed) {

			$result = array();

		} else {

			$result = "";

		}

		$state = "";

		/* get version data */
		$remote_version = self::get_remote_version();
		//echo $remote_version . "</br>";

		$local_version = self::get_local_version();
		//echo $local_version . "</br>";

		/* compare version strings */
		if (version_compare($local_version, $remote_version, '<')) {

			if ($detailed) {

				array_push ($result, array($remote_version, MSG_UPDATE_POSSIBLE_THERE_IS_AN_UPDATE_AVAILABLE));
				array_push ($result, array($local_version, MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION));

			} else {

				$result = MSG_UPDATE_POSSIBLE_THERE_IS_AN_UPDATE_AVAILABLE;

			}

		} else if (version_compare($local_version, $remote_version, '>')) {

			if ($detailed) {

				array_push ($result, array($remote_version, MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION));
				array_push ($result, array($local_version, MSG_ERROR_UNKNOWN_VERSION));

			} else {

				$result = MSG_ERROR_UNKNOWN_VERSION;

			}

		} else {

			if ($detailed) {

				array_push ($result, array($remote_version, MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION));
				array_push ($result, array($local_version, MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION));

			} else {

				$result = MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION;

			}

		}

		return $result;

	}

} /* end of class */

?>