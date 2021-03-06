<?php

namespace NTRNX_LOCALE;

/* begin of class */
class get_language extends \NTRNX_LOCALE\ntrnx_locale {

    static function data($string) {

        $error = NULL;
        $language_array = NULL;

        $language_array = \NTRNX_LOCALE\ntrnx_locale_language::data();

        if (array_key_exists($string, $language_array)) {

            $error = $language_array[$string];

        } else {

            $error = \NTRNX_LOCALE\NLOCCC_ERROR_LANGUAGE_DATA_NOT_FOUND;

        }

        return $error;

    }

    static function string($string) {

        $error = NULL;

        $constant = '\NTRNX_LOCALE\ntrnx_locale_language::' . $string;

        if (defined($constant)) {

            $error = constant($constant);

        } else {

            $error = \NTRNX_LOCALE\NLOCCC_ERROR_LANGUAGE_STRING_NOT_FOUND;

        }

        return $error;

    }

} /* end of class */

?>