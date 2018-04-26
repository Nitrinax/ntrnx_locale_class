<?php

namespace NTRNX_LOCALE;

/* begin of class open_catalog */
class open_catalog extends \NTRNX_LOCALE\ntrnx_locale {

    static function base($locale_base, $catalog_name, $minVersion = NULL) {

        $error = NULL;
        $catalog_file = NULL;
        $catalog_version_string = NULL;
        $catalog_version = NULL;
        $catalog_base_string = NULL;
        $catalog_base = NULL;

        /* create catalog file name from given locale_base and catalog_name */
        $catalog_file = LOCALE_CATALOGS . $locale_base . \NTRNX_LOCALE\NLOCCC_DS . $catalog_name . \NTRNX_LOCALE\NLOCCC_CATALOG_SUFFIX;

        if (file_exists($catalog_file)) {

            include_once ($catalog_file);

            /* if minversion set */
            if ($minVersion != NULL) {

                /* set const name for version */
                $catalog_version_string = "VersionMajor";

                /* get version from catalog file */
                $catalog_version = \NTRNX_LOCALE\get_catalog::data($catalog_version_string);

                /* if version not found */
                if ($catalog_version === \NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_DATA_NOT_FOUND) {

                    /* display version error */
                    $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_DATA_NOT_FOUND, $catalog_version_string);

                } else {

                    /* if version lower than minversion */
                    if (version_compare($catalog_version, $minVersion, '<')) {

                        /* display minversion error */
                        $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_VERSION_REQUIRED, $minVersion, $catalog_version);

                    }

                }

            }

            /* if no error set */
            if ($error === NULL) {

                /* set const name for catalog base */
                $catalog_base_string = "BaseName";

                /* get catalog base from catalog file */
                $catalog_base = \NTRNX_LOCALE\get_catalog::data($catalog_base_string);

                /* if version not found */
                if ($catalog_base === \NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_DATA_NOT_FOUND) {

                    /* display version error */
                    $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_DATA_NOT_FOUND, $catalog_base_string);

                }

            }

        } else {

            /* display file error */
            $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_CATALOG_DOES_NOT_EXISTS, $catalog_file);

        }

        /* return results */
        if ($error) {

            /* return error code */
            return $error;

        } else {

            /* return locale base */
            return $catalog_base;

        }

    }

} /* end of class open_catalog */

?>