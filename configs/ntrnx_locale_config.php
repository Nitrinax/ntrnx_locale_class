<?php

namespace NTRNX_LOCALE;

const FS_BASED_STORAGE = 0;	/* file system based storage */
const DB_BASED_STORAGE = 1;	/* database based storage */ /* not included in this version */

/* begin of class ntrnx_locale_config */
class config {

	/* allow class dependences check */
	static $allow_dependences_check = FALSE;

	/* allow class needef functions check */
	static $allow_functions_check = FALSE;

	/* allow class update check */
	static $allow_update_check = FALSE;

	/* allow own class error messages */
	static $allow_own_error_messages = FALSE;

	/* storage system */
	static $storage_system = FS_BASED_STORAGE;

	/* ##### custom dirs ##### */

	/* custom locale dir */
	static $locale_dir = "";

	/* custom catalogs dir */
	static $allow_own_catalogs_dir = "";

	/* custom countries dir */
	static $allow_own_countries_dir = "";

	/* custom languages dir */
	static $allow_own_languages_dir = "";

	/* custom config dir */
	static $allow_own_config_dir = "";

	/* ##### custom strings ##### */

	/* country setting */
	static $country = "Germany";

	/* language string */
	static $allow_own_language = "german";

	/* catalog setting */
	static $allow_own_catalog = "ntrnx_locale.catalog.php";

} /* end of class ntrnx_locale_config */

?>