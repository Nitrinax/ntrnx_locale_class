<?php

namespace NTRNX_LOCALE;

/* begin of class ntrnx_locale_country */
class ntrnx_locale_country {

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

	const NativeName			= "Deutschland";		/* native name of this country */
	const LanguageName			= "german";				/* language of this locale */
	const PrefLanguages			= "german, english";	/* preferred languages */
	const Charset				= "utf8";
	const Collate				= "utf8mb4_unicode_ci";
	const LocaleLanguage		= "de";
	const LocaleLanguage3		= "deu";
	const LocaleRegion			= "DE";
	const LocaleRegion3			= "DEU";	
	const LocaleCode			= LocaleLanguage . "-" . LocaleRegion;
	//const LocaleCodePHP			= LocaleLanguage . "_" . LocaleRegion;

	const TelephoneCode			= "49";				/* The international telephone code for the country. */
	const TimeZone				= "Europa/Berlin";	/* Timezone identifier */
	const GMTOffset				= 60;				/* The offset in minutes of the current location from GMT. Positive indicates a Westerly direction from GMT, negative Easterly. */
	const UTCOffset				= 3600;				/* The offset in seconds of the current location from UTC. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. */
	const MeasuringSystem		= MS_ISO;			/* The measuring system being used. */
	const CalendarType			= CT_7MON;			/* what calendar type? */

	const FullTimeFormat		= "H:i:s e";		/* 02:31:33 Rocky Mountain-Normalzeit */
	const LongTimeFormat		= "H:i:s P";		/* 02:31:33 GMT-7 */
	const MediumTimeFormat		= "H:i:s";			/* 02:31:33 */
	const ShortTimeFormat		= "H:i";			/* 02:31 */
	
	const FullDateFormat		= "l, d. F Y";		/* Montag, 12. März 2018 */
	const LongDateFormat		= "d. F Y";			/* 12. März 2018 */
	const MediumDateFormat		= "d.m.Y";			/* 12.03.2018 */
	const ShortDateFormat		= "d.m.y";			/* 12.03.18 */
	
	const DateTimeFormat		= "d.m.Y, H:i";		/* 12.03.18, 02:31 */

	/* for numeric values */
	const DecimalPoint			= ";";				/* The decimal point character used to format non-monetary quantities. */
	const GroupSeparator		= ".";				/* The characters used to separate groups of digits before the decimal-point character in formatted non-monetary quantities. */
	const FracGroupSeparator	= ".";				/* The characters used to separate groups of digits after the decimal-point character in formatted non-monetary quantities. */
	const Grouping				= 3;				/* A string whose elements indicate the size of each group of digits before the decimal-point character in formatted non-monetary quantities. */
	const FracGrouping			= 3;				/* A string whose elements indicate the size of each group of digits after the decimal-point character in formatted non-monetary quantities. */
	const FracDigits			= 2;				/* The number of fractional digits (those after the decimal-point) to be displayed in a formatted quantity. */
	const IntFracDigits			= 2;				/* The number of fractional digits (those after the decimal-point) to be displayed in an internationally formatted quantity */

	/* for monetary values */
	const MonDecimalPoint		= ";";				/* The decimal-point used to format monetary quantities. */
	const MonGroupSeparator		= ".";				/* The separator for groups of digits before the decimal-point in monetary quantities. */
	const MonFracGroupSeparator	= ".";				/* The separator for groups of digits after the decimal-point in monetary quantities. */
	const MonGrouping			= 3;				/* A string whose elements indicate the size of each group of digits before the decimal-point character in monetary quantities. */
	const MonFracGrouping		= 3;				/* A string whose elements indicate the size of each group of digits after the decimal-point character in monetary quantities. */
	const MonFracDigits			= 2;				/* The number of fractional digits (those after the decimal-point) to be displayed in a formatted monetary quantity. */
	const MonIntFracDigits		= 2;				/* The number of fractional digits (those after the decimal-point) to be displayed in an internationally formatted monetary quantity */

	/* for monetary symbols */
	const MonCurrency			= "Euro";			/* currency */
	const MonCS					= "€";				/* The local currency symbol applicable to the current locale. */
	const MonSmallCS			= "Cent";			/* The currency symbol for small amounts. */
	const MonIntCS				= "EUR";			/* The international currency symbol applicable to the current locale. The first three characters contain the alphabetic international currency symbol in accordance with those specified in ISO 4217 Codes for the Representation of Currency and Funds. The fourth character (immediately preceding the NULL) is the character used to separate the international currency symbol from the monetary quantity. */
	const MonHtmlCodeCS			= "&euro;";			/* HTML CS code */
	const MonDecimalCodeCS		= "&#8364;";		/* Decimal CS code */
	const MonHexCodeCS			= "&#x20AC;";		/* Hex CS code */

	/* for positive monetary values */
	const MonPositiveSign		= "";				/* The string used to indicate a non-negative monetary quantity. */
	const MonPositiveSpaceSep	= SS_SPACE;			/* Specifies the number of spaces separating the currency symbol from the non-negative monetary quantity. */
	const MonPositiveSignPos	= SP_PREC_ALL;		/* Set to a value indicating the positioning of MON_POSITIVE_SIGN_POS for a non-negative monetary quantity. */
	const MonPositiveCSPos		= CSP_SUCCEEDS;		/* Set to 1 or 0 if MON_POSITIVE_CS_POS respectively precedes or succeeds the value for a non-negative monetary quantity. */
	const MonPositiveColor		= "Green";
	const MonPositiveHexColor	= "#00B300";
	const MonPositiveRgbColor	= "0, 179, 0";
	const MonPositiveHslColor	= "120, 100%, 35%";

	/* for negative monetary values */
	const MonNegativeSign		= "-";				/* The string used to indicate a negative monetary quantity. */
	const MonNegativeSpaceSep	= SS_SPACE;			/* Specifies the number of spaces separating the currency symbol from the negative monetary quantity. */
	const MonNegativeSignPos	= SP_PREC_ALL;		/* Set to a value indicating the positioning of MON_NEGATIVE_SIGN_POS for a negative monetary quantity. */
	const MonNegativeCSPos		= CSP_SUCCEEDS;		/* Set to 1 or 0 if MON_NEGATIVE_CS_POS respectively precedes or succeeds the value for a negative monetary quantity. */
	const MonNegativeColor		= "Red";
	const MonNegativeHexColor	= "#ff0000";
	const MonNegativeRgbColor	= "255, 0, 0";
	const MonNegativeHslColor	= "0, 100%, 50%";

}

?>