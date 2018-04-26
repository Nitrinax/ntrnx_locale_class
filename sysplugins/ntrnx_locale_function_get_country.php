<?php

namespace NTRNX_LOCALE;

/* begin of class */
class get_country extends \NTRNX_LOCALE\ntrnx_locale {

    static function data($string) {

        $error = NULL;
        $country_array = NULL;

        $country_array = \NTRNX_LOCALE\ntrnx_locale_country::data();

        if (array_key_exists($string, $country_array)) {

            $error = $country_array[$string];

        } else {

            $error = \NTRNX_LOCALE\NLOCCC_ERROR_COUNTRY_DATA_NOT_FOUND;

        }

        return $error;

    }

    static function string($string) {

        $error = NULL;

        $constant = '\NTRNX_LOCALE\ntrnx_locale_country::' . $string;

        if (defined($constant)) {

            $error = constant($constant);

        } else {

            $error = \NTRNX_LOCALE\NLOCCC_ERROR_COUNTRY_STRING_NOT_FOUND;

        }

        return $error;

    }

} /* end of class */

?>