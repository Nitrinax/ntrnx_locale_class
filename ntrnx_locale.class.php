<?php

namespace NTRNX_LOCALE;

/* init arrays */
$ntrnx_locale_array_files = array();
$ntrnx_locale_array_dirs = array();

/* define shorthand directory separator constant */
if (!defined(__NAMESPACE__ . "\NLOCCC_DS")) { define(__NAMESPACE__ . "\NLOCCC_DS", DIRECTORY_SEPARATOR); }
if (!defined(__NAMESPACE__ . "\NLOCCC_PS")) { define(__NAMESPACE__ . "\NLOCCC_PS", PATH_SEPARATOR); }
if (!defined(__NAMESPACE__ . "\NLOCCC_BR")) { define(__NAMESPACE__ . "\NLOCCC_BR", "<br />"); }             /* HTML break row */
if (!defined(__NAMESPACE__ . "\NLOCCC_LF")) { define(__NAMESPACE__ . "\NLOCCC_LF", "\n"); }                 /* PHP line feed */
if (!defined(__NAMESPACE__ . "\NLOCCC_PHP_SUFFIX")) { define(__NAMESPACE__ . "\NLOCCC_PHP_SUFFIX", ".php"); }

/* set DIR to absolute path to library files */
if (!defined(__NAMESPACE__ . "\NLOCCC_DIR")) { define(__NAMESPACE__ . "\NLOCCC_DIR", dirname(__FILE__) . \NTRNX_LOCALE\NLOCCC_DS); }
//echo NLOCCC_DIR . \NTRNX_LOCALE\NLOCCC_BR;

/* defines dir for locale system */
if (!defined(LOCALE)) { define(LOCALE, \NTRNX_LOCALE\NLOCCC_DIR . "locale" . \NTRNX_LOCALE\NLOCCC_DS); }
//echo LOCALE . \NTRNX_LOCALE\NLOCCC_BR;
if (!defined(LOCALE_CATALOGS)) { define(LOCALE_CATALOGS, LOCALE . "catalogs" . \NTRNX_LOCALE\NLOCCC_DS); }
//echo LOCALE_CATALOGS . \NTRNX_LOCALE\NLOCCC_BR;
if (!defined(LOCALE_COUNTRIES)) { define(LOCALE_COUNTRIES, LOCALE . "countries" . \NTRNX_LOCALE\NLOCCC_DS); }
//echo LOCALE_COUNTRIES . \NTRNX_LOCALE\NLOCCC_BR;
if (!defined(LOCALE_LANGUAGES)) { define(LOCALE_LANGUAGES, LOCALE . "languages" . \NTRNX_LOCALE\NLOCCC_DS); }
//echo LOCALE_LANGUAGES . \NTRNX_LOCALE\NLOCCC_BR;
if (!defined(LOCALE_CONFIG_DIR)) { define(LOCALE_CONFIG_DIR, \NTRNX_LOCALE\NLOCCC_DIR . "configs" . \NTRNX_LOCALE\NLOCCC_DS ); }
//echo LOCALE_CONFIG_DIR . \NTRNX_LOCALE\NLOCCC_BR;

/* default storage system */
if (!defined(__NAMESPACE__ . "\NLOCCC_DEFAULT_STORAGE_SYSTEM")) { define(__NAMESPACE__ . "\NLOCCC_DEFAULT_STORAGE_SYSTEM", 0); }

/* file parts */
if (!defined(__NAMESPACE__ . "\NLOCCC_COUNTRY_SUFFIX")) { define(__NAMESPACE__ . "\NLOCCC_COUNTRY_SUFFIX", ".country" . \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }
if (!defined(__NAMESPACE__ . "\NLOCCC_LANGUAGE_SUFFIX")) { define(__NAMESPACE__ . "\NLOCCC_LANGUAGE_SUFFIX", ".language" . \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }
if (!defined(__NAMESPACE__ . "\NLOCCC_CATALOG_SUFFIX")) { define(__NAMESPACE__ . "\NLOCCC_CATALOG_SUFFIX", ".catalog" . \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }

/* define dir for sysplugins */
if (!defined(__NAMESPACE__ . "\NLOCCC_SYSPLUGINS_DIR")) { define(__NAMESPACE__ . "\NLOCCC_SYSPLUGINS_DIR", \NTRNX_LOCALE\NLOCCC_DIR . "sysplugins" . \NTRNX_LOCALE\NLOCCC_DS); }
//echo NLOCCC_SYSPLUGINS_DIR . \NTRNX_LOCALE\NLOCCC_BR;

/* setup autoloader */
if (!defined(__NAMESPACE__ . "\NLOCCC_INCLUDE_AUTOLOADER")) { define(__NAMESPACE__ . "\NLOCCC_INCLUDE_AUTOLOADER", \NTRNX_LOCALE\NLOCCC_DIR . "ntrnx_locale.autoloader" . \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }
if (!defined(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_NAMESPACE")) { define(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_NAMESPACE", __NAMESPACE__); }
if (!defined(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_FILE_DIR")) { define(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_FILE_DIR", \NTRNX_LOCALE\NLOCCC_SYSPLUGINS_DIR); }
if (!defined(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_FILE_SUFFIX")) { define(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_FILE_SUFFIX", \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }
if (!defined(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_INTERNAL_PART")) { define(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_INTERNAL_PART", "internal"); }
if (!defined(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_FUNCTION_PART")) { define(__NAMESPACE__ . "\NLOCCC_AUTOLOADER_FUNCTION_PART", "function"); }

/* setup includes */
if (!defined(__NAMESPACE__ . "\NLOCCC_INCLUDE_ERRORS")) { define(__NAMESPACE__ . "\NLOCCC_INCLUDE_ERRORS", \NTRNX_LOCALE\NLOCCC_DIR . \NTRNX_LOCALE\NLOCCC_DS . "ntrnx_locale_include_errors" . \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }
if (!defined(__NAMESPACE__ . "\NLOCCC_INCLUDE_MESSAGES")) { define(__NAMESPACE__ . "\NLOCCC_INCLUDE_MESSAGES", \NTRNX_LOCALE\NLOCCC_DIR . \NTRNX_LOCALE\NLOCCC_DS . "ntrnx_locale_include_error_messages" . \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }

/* other files */
if (!defined(__NAMESPACE__ . "\NLOCCC_INCLUDE_CONFIG_FILE")) { define(__NAMESPACE__ . "\NLOCCC_INCLUDE_CONFIG_FILE", LOCALE_CONFIG_DIR. "ntrnx_locale_config" . \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }
if (!defined(__NAMESPACE__ . "\NLOCCC_INCLUDE_DATA_FILE")) { define(__NAMESPACE__ . "\NLOCCC_INCLUDE_DATA_FILE", \NTRNX_LOCALE\NLOCCC_SYSPLUGINS_DIR . "ntrnx_locale_data" . \NTRNX_LOCALE\NLOCCC_PHP_SUFFIX); }

// put needed directories in array
array_push($ntrnx_locale_array_files,
	\NTRNX_LOCALE\NLOCCC_INCLUDE_ERRORS,
	\NTRNX_LOCALE\NLOCCC_INCLUDE_MESSAGES,
	\NTRNX_LOCALE\NLOCCC_INCLUDE_AUTOLOADER,
    \NTRNX_LOCALE\NLOCCC_INCLUDE_CONFIG_FILE,
    \NTRNX_LOCALE\NLOCCC_INCLUDE_DATA_FILE
);

/* check if files exist */
foreach ($ntrnx_locale_array_files as &$ntrnx_locale_var_file) {

	//echo $ntrnx_locale_var_file . "<br />";

	if (!file_exists($ntrnx_locale_var_file)) {

		die ("file not found " . $ntrnx_locale_var_file);

	} else {

		include_once ($ntrnx_locale_var_file);

	}

}

array_push($ntrnx_locale_array_dirs,
	\NTRNX_LOCALE\NLOCCC_SYSPLUGINS_DIR,
	LOCALE,
	LOCALE_CONFIG_DIR,
	LOCALE_CATALOGS,
	LOCALE_COUNTRIES,
	LOCALE_LANGUAGES
);

/* check if directories exist */
foreach ($ntrnx_locale_array_dirs as &$ntrnx_locale_var_dir) {

	//echo $ntrnx_locale_var_dir . \NTRNX_LOCALE\NLOCCC_BR;

	if (!is_dir($ntrnx_locale_var_dir)) {

		die ("directory not found " . $ntrnx_locale_var_dir);

	}

}

/* init autoloader */
\ntrnx_locale_autoloader::register();

/* begin of class ntrnx_locale */
class ntrnx_locale extends \NTRNX_LOCALE\ntrnx_locale_data {

	/* constants for cp_MeasuringSystem */
	const MS_ISO		= 0;		/* international metric system */
	const MS_AMERICAN	= 1;		/* american system */
	const MS_IMPERIAL	= 2;		/* imperial system */
	const MS_BRITISH	= 3;		/* british system */

	/* constants for cp_CalendarType */
	const CT_7SUN = 0;				/* 7 days a week, Sunday is the first day */
	const CT_7MON = 1;				/* 7 days a week, Monday is the first day */
	const CT_7TUE = 2;				/* 7 days a week, Tuesday is the first day */
	const CT_7WED = 3;				/* 7 days a week, Wednesday is the first day */
	const CT_7THU = 4;				/* 7 days a week, Thursday is the first day */
	const CT_7FRI = 5;				/* 7 days a week, Friday is the first day */
	const CT_7SAT = 6;				/* 7 days a week, Saturday is the first day */

	/* constants for cp_MonPositiveSpaceSep and cp_MonNegativeSpaceSep */
	const SS_NOSPACE	= 0;		/* cur. symbol is NOT separated from value with a space */
	const SS_SPACE		= 1;		/* cur. symbol IS separated from value with a space */

	/* constants for cp_MonPositiveSignPos and cp_MonNegativeSignPos */
	const SP_PARENS		= 0;		/* () surround the quantity and currency_symbol */
	const SP_PREC_ALL	= 1;		/* sign string comes before amount and symbol */
	const SP_SUCC_ALL	= 2;		/* sign string comes after amount and symbol */
	const SP_PREC_CURR	= 3;		/* sign string comes right before currency symbol */
	const SP_SUCC_CURR	= 4;		/* sign string comes right after currency symbol */

	/* constants for cp_MonPositiveCSPos and cp_MonNegativeCSPos */
	const CSP_PRECEDES = 0;			/* currency symbol comes before value */
	const CSP_SUCCEEDS = 1;			/* currency symbol comes after value  */

	/* Common single quotation marks*/
	const CSQM_LEFT_SINGLE				= "&#8216;";	/* ‘  U+2018 LEFT SINGLE QUOTATION MARK */
	const CSQM_RIGHT_SINGLE				= "&#8217;";	/* ’  U+2019 RIGHT SINGLE QUOTATION MARK */
	const CSQM_SINGLE_LOW_9				= "&#8218;";	/* ‚  U+201A SINGLE LOW-9 QUOTATION MARK */
	const CSQM_SINGLE_HIGH_REVERSED_9	= "&#8219;";	/* ‛  U+201B SINGLE HIGH-REVERSED-9 QUOTATION MARK */
	const CSQM_SINGLE_LEFT_POINTING		= "&#8249;";	/* ‹  U+2039 SINGLE LEFT-POINTING ANGLE QUOTATION MARK */
	const CSQM_SINGLE_RIGHT_POINTING	= "&#8250;";	/* ›  U+203A SINGLE RIGHT-POINTING ANGLE QUOTATION MARK */

	/* Common double quotation marks */
	const CDQM_LEFT_POINTING_DOUBLE		= "&#171;";		/* «  U+00AB LEFT-POINTING DOUBLE ANGLE QUOTATION MARK */
	const CDQM_RIGHT_POINTING_DOUBLE	= "&#187;";		/* »  U+00BB RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK */
	const CDQM_LEFT_DOUBLE				= "&#8220;";	/* “  U+201C LEFT DOUBLE QUOTATION MARK */
	const CDQM_RIGHT_DOUBLE				= "&#8221;";	/* ”  U+201D RIGHT DOUBLE QUOTATION MARK */
	const CDQM_DOUBLE_LOW_9				= "&#8222;";	/* „  U+201E DOUBLE LOW-9 QUOTATION MARK */
	const CDQM_DOUBLE_HIGH_REVERSED_9	= "&#8223;"; 	/* ‟  U+201F DOUBLE HIGH-REVERSED-9 QUOTATION MARK */

	/* Common marks */
	const CM_SOFT_HYPHEN				= "-";			/* -soft hyphenation */
	const CM_HARD_HYPHEN				= "-";			/* - hard hyphenation */
	const CM_PRIME						= "&#8242;";	/* ′  U+2032 PRIME */
	const CM_DOUBLE_PRIME				= "&#8243;";	/* ″  U+2033 DOUBLE PRIME */
	const CM_EN_DASH					= "&#8211;";	/* –  U+2013 EN DASH */
	const CM_EM_DASH					= "&#8212;";	/* —  U+2014 EM DASH */

	/* begin of class constructor */
	function __construct (){
	} /* end of class constructor */

	/* class destructor */
	function __destruct() {
	} /* end of class destructor */

} /* end of class ntrnx_locale */

?>