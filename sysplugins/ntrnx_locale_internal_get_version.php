<?php

namespace NTRNX_LOCALE;

/* begin of class */
class get_version extends \NTRNX_LOCALE\ntrnx_locale {

	static function major(){

		return self::_CLASS_VERSION_MAJOR;

	}

	static function minor(){

		return self::_CLASS_VERSION_MINOR;

	}

	static function build(){

		return self::_CLASS_VERSION_BUILD;

	}

	static function revision(){

		return self::_CLASS_VERSION_REVISION;

	}

	static function date(){

		return self::_CLASS_DATE;

	}

	static function time(){

		return self::_CLASS_TIME;

	}

}

?>