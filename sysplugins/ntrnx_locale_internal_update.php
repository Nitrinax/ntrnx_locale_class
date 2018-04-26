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

	static function checkA($detailed = FALSE) {

		/* no updated needed, you have the latest version */
		define('MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION', 0);

		/* update error, could not read update information */
		define('MSG_ERROR_COULD_NOT_READ_LOCAL_UPDATE_INFORMATION', -1);

		/* update error, could not read update information */
		define('MSG_ERROR_COULD_NOT_READ_REMOTE_UPDATE_INFORMATION', -2);

		/* update error, unknown version installed */
		define('MSG_ERROR_UNKNOWN_VERSION_INSTALLED', -4);

		/* get version data */
		$remote_version = self::get_remote_version();
		$local_version = self::get_local_version();

		/* check version data */
		if (!$local_version) { return MSG_ERROR_COULD_NOT_READ_LOCAL_UPDATE_INFORMATION; }
		if (!$remote_version) { return MSG_ERROR_COULD_NOT_READ_REMOTE_UPDATE_INFORMATION; }	

		/* handle http status codes */
		if(!preg_match('/^(\d+\.)?(\d+\.)?(\*|\d+)$/', $local_version)){ return MSG_ERROR_COULD_NOT_READ_LOCAL_UPDATE_INFORMATION; }
		if(!preg_match('/^(\d+\.)?(\d+\.)?(\*|\d+)$/', $remote_version)){ return MSG_ERROR_COULD_NOT_READ_REMOTE_UPDATE_INFORMATION; }

		/* compare version strings */
		if (version_compare($local_version, $remote_version, '<')) {

			return $remote_version;

		} else if (version_compare($local_version, $remote_version, '>')) {

			return MSG_ERROR_UNKNOWN_VERSION_INSTALLED;

		} else {

			return MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION;

		}

	}

	static function check() {

		/* no updated needed, you have the latest version */
		define('MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION', 0);

		/* update error, could not read update information */
		define('MSG_ERROR_COULD_NOT_READ_LOCAL_UPDATE_INFORMATION', -1);

		/* update error, could not read update information */
		define('MSG_ERROR_COULD_NOT_READ_REMOTE_UPDATE_INFORMATION', -2);

		/* update error, unknown version installed */
		define('MSG_ERROR_UNKNOWN_VERSION_INSTALLED', -4);

		/* get version data */
		$remote_version = self::get_remote_version();
		$local_version = self::get_local_version();

		/* check version data */
		if (!$local_version) { return MSG_ERROR_COULD_NOT_READ_LOCAL_UPDATE_INFORMATION; }
		if (!$remote_version) { return MSG_ERROR_COULD_NOT_READ_REMOTE_UPDATE_INFORMATION; }	

		/* handle http status codes */
		if(!preg_match('/^(\d+\.)?(\d+\.)?(\*|\d+)$/', $local_version)){ return MSG_ERROR_COULD_NOT_READ_LOCAL_UPDATE_INFORMATION; }
		if(!preg_match('/^(\d+\.)?(\d+\.)?(\*|\d+)$/', $remote_version)){ return MSG_ERROR_COULD_NOT_READ_REMOTE_UPDATE_INFORMATION; }

		/* compare version strings */
		if (version_compare($local_version, $remote_version, '<')) {

			return $remote_version;

		} else if (version_compare($local_version, $remote_version, '>')) {

			return MSG_ERROR_UNKNOWN_VERSION_INSTALLED;

		} else {

			return MSG_NO_UPDATE_NEEDED_YOU_HAVE_THE_LATEST_VERSION;

		}

	}

} /* end of class */

?>