<?php

const SHOW_CLASSDATA = FALSE;

/* error reporting for classname */
ini_set ("error_reporting", E_ALL & ~E_NOTICE);
ini_set ("display_errors", 1);

include_once "ntrnx_locale.class.php";

$html_br = "<br/>";
$html_br2 = $html_br . $html_br;

$state_on = "</b>ON</b>";
$state_off = "</b>OFF</b>";

$state_possible = "<i>possible</i>";
$state_passed = "<i>passed</i>";
$state_failed = "<i>failed</i>";
$state_unknown = "<i>unknown</i>";

echo "example for using the ntrnx_locale_class". $html_br2;

echo "class : "
. \NTRNX_LOCALE\get_class::name() . " "
. \NTRNX_LOCALE\get_version::major() . "."
. \NTRNX_LOCALE\get_version::minor() . "."
. \NTRNX_LOCALE\get_version::build() . "."
. \NTRNX_LOCALE\get_version::revision() . " ("
. \NTRNX_LOCALE\get_version::date() . ") ["
. \NTRNX_LOCALE\get_version::time() . "] loaded". $html_br2;

if (SHOW_CLASSDATA === TRUE) {

	echo "show class data". $html_br2;

	echo "class branch : " . \NTRNX_LOCALE\get_build::branch() . $html_br;
	echo "class buildchannel : " . \NTRNX_LOCALE\get_build::channel() . $html_br;
	echo "class api : " . \NTRNX_LOCALE\get_class::api() . $html_br;

	echo "class author name: " . \NTRNX_LOCALE\get_author::name() . $html_br;
	echo "class author nick: " . \NTRNX_LOCALE\get_author::nick() . $html_br;
	echo "class author email: " . \NTRNX_LOCALE\get_author::email() . $html_br;
	echo "class author url: " . \NTRNX_LOCALE\get_author::url() . $html_br;

	echo "class project url : " . \NTRNX_LOCALE\get_url::project() . $html_br;
	echo "class source url : " . \NTRNX_LOCALE\get_url::source() . $html_br;
	echo "class version url : " . \NTRNX_LOCALE\get_url::version() . $html_br;
	echo "class update url : " . \NTRNX_LOCALE\get_url::update() . $html_br;
	echo "class manual url : " . \NTRNX_LOCALE\get_url::manual() . $html_br;

	echo "class dependences check : ";

	if (\NTRNX_LOCALE\dependences::state()===TRUE) {

		echo $state_on . $html_br;

		/* 0 = dependences check passed */
		/* -1 dependences check failed */

		//$result = \NTRNX_LOCALE\dependences::check();
		$result = \NTRNX_LOCALE\dependences::check(TRUE);

		echo "class dependences state : ";

		if (is_array($result)) {

			echo $html_br;

			foreach ($result as $key => $value) {

				echo " - " . $value[0] . " - ";

				if ($value[1] === 0) { echo $state_passed; } else { echo $state_failed; }

				echo $html_br;

			}

		} else {

			if ($result === 0) { echo $state_passed; } else { echo $state_failed; }

			echo $html_br;

		}

	} else {

		echo $state_off . $html_br;

	}

	echo "class needed functions check : ";

	if (\NTRNX_LOCALE\needed_functions::state()===TRUE) {

		echo $state_on . $html_br;

		//echo "class needed function state :" . \NTRNX_LOCALE\needed_functions::check() .$html_br;

		echo "class needed function state : ";

		/*   0 = function check passed */
		/*  -1 = function check failed */

		//$result = \NTRNX_LOCALE\needed_functions::check();
		$result = \NTRNX_LOCALE\needed_functions::check(TRUE);

		if (is_array($result)) {

			echo $html_br;

			foreach ($result as $key => $value) {

				echo " - " . $value[0] . " - ";

				if ($value[1] === 0) { echo $state_passed; } else { echo $state_failed; }

				echo $html_br;

			}

		} else {

			switch ($result) {

				case 1:

					echo $state_possible . $html_br;

				break;

				case 0:

					echo $state_passed . $html_br;

				break;

				case -1:

					echo $state_failed . $html_br;

				break;

				default:
				break;

			}

		}

	} else {

		echo $state_off . $html_br;

	}

	echo "class update check : ";

	if (\NTRNX_LOCALE\update::state()===TRUE) {

		echo $state_on . $html_br;

		/*  1 = update possible, there is an update available */
		/*  0 = no updated needed, you have the latest version */
		/* -1 = update error, unknown version */

		//$result = \NTRNX_LOCALE\update::check();
		$result = \NTRNX_LOCALE\update::check(TRUE);

		echo "class update state : ";

		if (is_array($result)) {

			echo $html_br;

			foreach ($result as $key => $value) {

				echo " - " . $value[0] . " - ";

				switch ($value[1]) {

					case 1:

						echo $state_possible;

					break;

					case 0:

						echo $state_passed;

					break;

					case -1:

						echo $state_unknown;

					break;

					default:
					break;


				}

				echo $html_br;

			}

		} else {

			switch ($result) {

				case 1:

					echo $state_possible . $html_br;

				break;

				case 0:

					echo $state_passed . $html_br;

				break;

				case -1:

					echo $state_unknown . $html_br;

				break;

				default:
				break;

			}

		}

	} else {

		echo $state_off . $html_br;
	}

	echo $html_br;

}

echo "testing class functions". $html_br . $html_br;

$locale_base = \NTRNX_LOCALE\open_locale::base();				/* open locale */
//$locale_base = \NTRNX_LOCALE\open_locale::base(NULL, 1);		/* open locale with min version check */
//$locale_base = \NTRNX_LOCALE\open_locale::base("Germany");		/* open a named locale */
//$locale_base = \NTRNX_LOCALE\open_locale::base("Germany", 1);	/* open a named locale with min version check */

if (is_string($locale_base)) {

	//echo "locale_base : " . $locale_base  . $html_br;

	$catalog_base = (\NTRNX_LOCALE\open_catalog::base($locale_base, 'ntrnx_locale'));

	if (is_string($catalog_base)) {

		//echo "catalog_base : " . $catalog_base  . $html_br;

		$str_lower = \NTRNX_LOCALE\get_catalog::string("STR_WORD");

		echo "Single words:" . $html_br;
		echo "original string from catalog (STR_WORD) = " . $str_lower . $html_br2;

		$str_phrase = \NTRNX_LOCALE\get_catalog::string("STR_PHRASE");

		echo "Phrases:" . $html_br;
		echo "original phrase from catalog (STR_PHRASE) = " . $str_phrase . $html_br;

	} else {

		echo "catalog error : " . $catalog_base;

	}

} else {

	echo "locale error : " . $locale_base;

}

exit();

?>