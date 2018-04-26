<?php

namespace NTRNX_LOCALE;

/* begin of class */
class raise extends \NTRNX_LOCALE\ntrnx_locale {

    static function error($error_id, $string = NULL, $reserved = NULL) {

        if ((isset(\NTRNX_LOCALE\config::$allow_own_error_messages)) && (\NTRNX_LOCALE\config::$allow_own_error_messages === TRUE)) {

            switch ($error_id) {

                case NLOCCC_ERROR_UNKNOWN_STORAGE_SYSTEM: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_MSG_UNKNOWN_STORAGE_SYSTEM); break;

                case NLOCCC_ERROR_COUNTRY_DOES_NOT_EXISTS: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_MSG_COUNTRY_DOES_NOT_EXISTS); break;
                case NLOCCC_ERROR_COUNTRY_NOT_DEFINED: echo \NTRNX_LOCALE\NLOCCC_ERROR_MSG_COUNTRY_NOT_DEFINED; break;
                case NLOCCC_ERROR_COUNTRY_VERSION_REQUIRED: echo str_replace( array("%v", "%y"), array($string, $reserved), \NTRNX_LOCALE\NLOCCC_ERROR_MSG_COUNTRY_VERSION_REQUIRED); break;
                case NLOCCC_ERROR_COUNTRY_DATA_NOT_FOUND: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_MSG_COUNTRY_DATA_NOT_FOUND); break;
                case NLOCCC_ERROR_COUNTRY_STRING_NOT_FOUND: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_MSG_COUNTRY_STRING_NOT_FOUND); break;

                case NLOCCC_ERROR_LANGUAGE_DOES_NOT_EXISTS: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_MSG_LANGUAGE_DOES_NOT_EXISTS); break;
                case NLOCCC_ERROR_LANGUAGE_NOT_DEFINED: echo \NTRNX_LOCALE\NLOCCC_ERROR_LANGUAGE_NOT_DEFINED; break;
                case NLOCCC_ERROR_LANGUAGE_VERSION_REQUIRED: echo str_replace( array("%v", "%y"), array($string, $reserved), \NTRNX_LOCALE\NLOCCC_ERROR_MSG_LANGUAGE_VERSION_REQUIRED); break;
                case NLOCCC_ERROR_LANGUAGE_DATA_NOT_FOUND: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_LANGUAGE_DATA_NOT_FOUND); break;
                case NLOCCC_ERROR_LANGUAGE_STRING_NOT_FOUND: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_MSG_LANGUAGE_STRING_NOT_FOUND); break;

                case NLOCCC_ERROR_CATALOG_DOES_NOT_EXISTS: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_MSG_CATALOG_DOES_NOT_EXISTS); break;
                case NLOCCC_ERROR_CATALOG_NOT_DEFINED: echo \NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_NOT_DEFINED; break;
                case NLOCCC_ERROR_CATALOG_VERSION_REQUIRED: echo str_replace( array("%v", "%y"), array($string, $reserved), \NTRNX_LOCALE\NLOCCC_ERROR_MSG_CATALOG_VERSION_REQUIRED); break;
                case NLOCCC_ERROR_CATALOG_DATA_NOT_FOUND: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_DATA_NOT_FOUND); break;
                case NLOCCC_ERROR_CATALOG_STRING_NOT_FOUND: echo str_replace("%s", $string, \NTRNX_LOCALE\NLOCCC_ERROR_MSG_CATALOG_STRING_NOT_FOUND); break;

                /*
                echo str_replace( 
                    array("%f", "%s"),
                    array($reserved, $string)
                    , \NTRNX_LOCALE\NLOCCC_ERROR_MSG_DOES_NOT_EXISTS);
                */

                default:

                    echo NLOCCC_ERROR_MSG_UNKNOWN_ERROR;

                break;

            }

        }

        return $error_id;

    }

}

?>