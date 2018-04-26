<?php

/**
 * ntrnx_locale.class.php
 *
 * @category  Locale Management
 * @package   ntrnx_locale
 * @author    René Zimmerling <nitrinax at googlemail dot com>
 * @license   http://opensource.org/licenses/gpl-3.0.html GNU Public License
 * @link      https://github.com/Nitrinax
 * @version   0.2.1.0-master
 *
 **/

namespace NTRNX_LOCALE;

/* begin of class ntrnx_locale_data */
class ntrnx_locale_data extends \NTRNX_LOCALE\config {

	/* class name */
	const _CLASS_NAME = "ntrnx_locale.class.php";
	/* class version
	* http://en.wikipedia.org/wiki/Software_versioning
	* major.minor[.build[.revision]]
	*/
	const _CLASS_VERSION_MAJOR = "0";
	const _CLASS_VERSION_MINOR = "2";
	const _CLASS_VERSION_BUILD = "10";
	const _CLASS_VERSION_REVISION = "0";
	/* YYYY-MM-DD */
	const _CLASS_DATE = "2018-04-26";
	/* hh:mm:ss */
	const _CLASS_TIME = "09:27:00";

	/*
	* project branches
	*
	*		branch			suffix		desc
	*
	*		morning star	ms			new ideas
	*		dbg				dbg			with error output informations
	* 		master						master branch
	*/
	const _CLASS_BRANCH = "ms";

	/*
	* project build channel
	*
	*		channel			suffix		desc
	*
	*		shadow copy		sc			experimental
	*		nightly			nightly		nightly build
	*		aurora			alpha		alpha build
	*		sunrise			beta		beta build
	*		daylight		rc			release candidate
	*		high noon					release
	*/
	const _CLASS_BUILD_CHANNEL = "sc";

	/* class api version */
	const _CLASS_API = "1.0";

	/* author data */
	const _CLASS_AUTHOR_NAME = "René Zimmerling";
	const _CLASS_AUTHOR_NICK = "Nitrinax";
	const _CLASS_AUTHOR_MAIL = "nitrinax at googlemail dot com";
	const _CLASS_AUTHOR_URL	 = "https://github.com/Nitrinax/";

	/* class description */
	const _CLASS_DESCRIPTION = "provide locale functions";

	/* project main url */
	const _CLASS_PROJECT_URL = "https://github.com/Nitrinax/ntrnx_locale_class/";
	/* project source url */
	const _CLASS_SOURCE_URL = "https://github.com/Nitrinax/ntrnx_locale_class/source/";
	/* project version url */
	const _CLASS_VERSION_URL = "https://raw.githubusercontent.com/Nitrinax/ntrnx_locale_class/master/docs/VERSION.txt";
	/* project update url */
	const _CLASS_UPDATE_URL = "https://github.com/Nitrinax/ntrnx_locale_class/";
	const _CLASS_UPDATE_VERSION_URL = "https://github.com/Nitrinax/ntrnx_locale_class/blob/master/docs/VERSION.txt";
	const _CLASS_UPDATE_RAW_VERSION_URL = "https://raw.githubusercontent.com/Nitrinax/ntrnx_locale_class/master/docs/VERSION.txt";

	/* project manual url */
	const _CLASS_MANUAL_URL = "https://github.com/Nitrinax/ntrnx_locale_class/master/docs/";

	/* class dependences possible */
	const _CLASS_DEPENDENCES = FALSE;

	/* class dependences array */
	static $_class_dependences = array(

		/* name => version */
		"PHP" => "7.0.0"

	);

	/* class dependences possible */
	const _CLASS_NEEDED_FUNCTIONS = FALSE;

	/* needed php functions as array */
	static $_class_needed_functions = array(

		/* php function names */
		"version_compare",
		"phpversion",
		"array_key_exists",
		"constant"

	);

	/* class update possible */
	const _CLASS_UPDATE_CHECK = FALSE;

} /* end of class ntrnx_locale_data */

?>