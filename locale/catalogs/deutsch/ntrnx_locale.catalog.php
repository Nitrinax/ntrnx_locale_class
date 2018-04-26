<?php

namespace NTRNX_LOCALE;

/* begin of class ntrnx_locale_catalog */
class ntrnx_locale_catalog {

	public static function data() {

		return array(

			BaseName		=> basename("\\" . __FILE__),
			VersionMajor	=> 0,
			VersionMinor	=> 0,
			VersionBuild	=> 0,
			VersionRevision	=> 0,
			Date			=> "00-00-00",
			Time			=> "00:00:00"

		);

	}

	const STR_WORD = "mary";

	const STR_PHRASE = "mary had a Little lamb and she loved it so";

} /* end of class ntrnx_locale_catalog */

?>