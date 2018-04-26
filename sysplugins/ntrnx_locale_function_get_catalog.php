<?php

namespace NTRNX_LOCALE;

/* begin of class */
class get_catalog extends \NTRNX_LOCALE\ntrnx_locale {

    static function data($string) {

        $error = NULL;
        $catalog_array = NULL;

        $catalog_array = \NTRNX_LOCALE\ntrnx_locale_catalog::data();

        if (array_key_exists($string, $catalog_array)) {

            $error = $catalog_array[$string];

        } else {

            $error = \NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_DATA_NOT_FOUND;

        }

        return $error;

    }

    static function string($string) {

        $error = NULL;

        $constant = '\NTRNX_LOCALE\ntrnx_locale_catalog::' . $string;

        if (defined($constant)) {

            $error = constant($constant);

        } else {

            $error = \NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_STRING_NOT_FOUND;

        }

        return $error;

    }

} /* end of class */

?>