<?php

namespace NTRNX_LOCALE;

/* begin of class open_locale */
class open_locale extends \NTRNX_LOCALE\ntrnx_locale {

    static function base($locale = NULL, $minVersion = NULL) {

        $error = NULL;
        $storage_system = NULL;
        $country_file = NULL;
        $country_version_string = NULL;
        $country_version = NULL;
        $language_string = NULL;
        $language_file = NULL;
        $language_native_string = NULL;
        $language_string = NULL;
        $language_version_string = NULL;
        $language_version = NULL;

        /* if storage system defined in settings */
        if (isset(\NTRNX_LOCALE\config::$storage_system)) {

            /* get storage system type from settings */
            $storage_system = \NTRNX_LOCALE\config::$storage_system;

        } else {

            /* else set default storage system */
            $storage_system = \NTRNX_LOCALE\NLOCCC_DEFAULT_STORAGE_SYSTEM;

        }

        switch ($storage_system) {

            /* FS_BASED_STORAGE */
            case 0:

                /* if locale set or locale set in config */
                if (($locale != NULL) || isset(\NTRNX_LOCALE\config::$country)){

                    /* if locale unequal to NULL */
                    if ($locale != NULL) {

                        /* create country file name from given locale string */
                        $country_file = LOCALE_COUNTRIES . $locale . \NTRNX_LOCALE\NLOCCC_COUNTRY_SUFFIX;

                    } elseif(isset(\NTRNX_LOCALE\config::$country)) {

                        /* create country file name from locale string from config */
                        $country_file = LOCALE_COUNTRIES . \NTRNX_LOCALE\config::$country . \NTRNX_LOCALE\NLOCCC_COUNTRY_SUFFIX;

                    }

                    /* if country file exists */
                    if (file_exists($country_file)) {

                        /* include country file */
                        include_once ($country_file);

                        /* if minversion set */
                        if ($minVersion != NULL) {

                            /* set const name for version */
                            $country_version_string = "VersionMajor";

                            /* get version from country file */
                            $country_version = \NTRNX_LOCALE\get_country::data($country_version_string);

                            /* if version not found */
                            if ($country_version === \NTRNX_LOCALE\NLOCCC_ERROR_COUNTRY_DATA_NOT_FOUND) {

                                /* display version error */
                                $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_COUNTRY_DATA_NOT_FOUND, $country_version_string);

                            } else {

                                /* if version lower than minversion */
                                if (version_compare($country_version, $minVersion, '<')) {

                                    /* display minversion error */
                                    $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_COUNTRY_VERSION_REQUIRED, $minVersion, $country_version);

                                }

                            }

                        }

                        /* if no error set */
                        if ($error === NULL) {

                            /* if language set in config */
                            if (isset(\NTRNX_LOCALE\config::$language)) {

                                /* use language from config */
                                $language_file = LOCALE_LANGUAGES . \NTRNX_LOCALE\config::$language . \NTRNX_LOCALE\NLOCCC_LANGUAGE_SUFFIX;

                            } else {

                                /* set const name for language name */
                                $language_string = "LanguageName";

                                /* use language from country file */
                                $language_file = LOCALE_LANGUAGES . \NTRNX_LOCALE\get_country::string($language_string) . \NTRNX_LOCALE\NLOCCC_LANGUAGE_SUFFIX;

                            }

                            /* if language file exists */
                            if (file_exists($language_file)) {

                                /* include language file */
                                include_once ($language_file);

                                /* if minversion set */
                                if ($minVersion != NULL) {

                                    /* set name for version const */
                                    $language_version_string = "VersionMajor";

                                    /* get version from language file */
                                    $language_version = \NTRNX_LOCALE\get_language::data($language_version_string);

                                    /* if version not found */
                                    if ($language_version === \NTRNX_LOCALE\NLOCCC_ERROR_LANGUAGE_DATA_NOT_FOUND) {

                                        /* display version error */
                                        $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_LANGUAGE_DATA_NOT_FOUND, $language_version_string);

                                    } else {

                                        /* if version lower than minversion */
                                        if (version_compare($language_version, $minVersion, '<')) {

                                            /* display minversion error */
                                            $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_LANGUAGE_VERSION_REQUIRED, $minVersion, $language_version);

                                        }

                                    }

                                }

                                /* if no error set */
                                if ($error === NULL)  {

                                    /* set const name for language native name */
                                    $language_native_string = "NativeLanguageName";

                                    /* get language native name from language file */
                                    $language_native_name = \NTRNX_LOCALE\get_language::string($language_native_string);

                                }

                            } else {

                                /* display language file error */
                                $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_LANGUAGE_DOES_NOT_EXISTS, $language_file);

                            }

                        }

                    } else {

                        /* display country file error */
                        $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_COUNTRY_DOES_NOT_EXISTS, $country_file);

                    }

                } else {

                    /* display country error */
                    $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_COUNTRY_NOT_DEFINED, $language_file);

                }

            break;

            /* DB_BASED_STORAGE */
            case 1:
                /* not included atm */
            break;

            /* UNKNOWN_STORAGE_SYSTEM */
            default:

                /* display storage system error */
                $error = \NTRNX_LOCALE\raise::error(\NTRNX_LOCALE\NLOCCC_ERROR_UNKNOWN_STORAGE_SYSTEM, $storage_system);

            break;

        }

        /* return results */
        if ($error) {

            /* return error code */
            return $error;

        } else {

            /* return locale base */
            return $language_native_name;

        }

    }

} /* end of class open_locale */

?>