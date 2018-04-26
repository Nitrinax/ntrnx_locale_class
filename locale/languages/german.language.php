<?php

namespace NTRNX_LOCALE;

/* begin of class ntrnx_locale_language */
class ntrnx_locale_language {

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

	const NativeLanguageName			= "deutsch";				/* native name of this language */

	/* daynames */
	const FormattingDay1 				= "Sonntag";				/* Sunday */
	const FormattingDay2 				= "Montag";					/* Monday */
	const FormattingDay3 				= "Dienstag";				/* Tuesday */
	const FormattingDay4 				= "Mittwoch";				/* Wednesday */
	const FormattingDay5 				= "Donnerstag";				/* Thursday */
	const FormattingDay6 				= "Freitag";				/* Friday */
	const FormattingDay7 				= "Samstag";				/* Saturday */

	const FormattingAbDay1 				= "So.";             		/* Sun */
	const FormattingAbDay2 				= "Mo.";             		/* Mon */
	const FormattingAbDay3 				= "Di.";             		/* Tue */
	const FormattingAbDay4 				= "Mi.";             		/* Wed */
	const FormattingAbDay5 				= "Do.";             		/* Thu */
	const FormattingAbDay6 				= "Fr.";             		/* Fri */
	const FormattingAbDay7 				= "Sa.";             		/* Sat */

	const FormattingNarrowDay1 			= "S";             			/* Sun */
	const FormattingNarrowDay2 			= "M";             			/* Mon */
	const FormattingNarrowDay3 			= "D";             			/* Tue */
	const FormattingNarrowDay4 			= "M";             			/* Wed */
	const FormattingNarrowDay5 			= "D";             			/* Thu */
	const FormattingNarrowDay6 			= "F";             			/* Fri */
	const FormattingNarrowDay7 			= "S";             			/* Sat */

	const StandAloneDay1 				= "Sonntag";				/* Sunday */
	const StandAloneDay2 				= "Montag";					/* Monday */
	const StandAloneDay3 				= "Dienstag";				/* Tuesday */
	const StandAloneDay4 				= "Mittwoch";				/* Wednesday */
	const StandAloneDay5 				= "Donnerstag";				/* Thursday */
	const StandAloneDay6 				= "Freitag";				/* Friday */
	const StandAloneDay7 				= "Samstag";				/* Saturday */

	const StandAloneAbDay1 				= "So";             		/* Sun */
	const StandAloneAbDay2 				= "Mo";             		/* Mon */
	const StandAloneAbDay3 				= "Di";             		/* Tue */
	const StandAloneAbDay4 				= "Mi";             		/* Wed */
	const StandAloneAbDay5 				= "Do";             		/* Thu */
	const StandAloneAbDay6 				= "Fr";             		/* Fri */
	const StandAloneAbDay7 				= "Sa";             		/* Sat */

	const StandAloneNarrowDay1 			= "S";             			/* Sun */
	const StandAloneNarrowDay2 			= "M";             			/* Mon */
	const StandAloneNarrowDay3 			= "D";             			/* Tue */
	const StandAloneNarrowDay4 			= "M";             			/* Wed */
	const StandAloneNarrowDay5 			= "D";             			/* Thu */
	const StandAloneNarrowDay6 			= "F";             			/* Fri */
	const StandAloneNarrowDay7 			= "S";             			/* Sat */

	/* month names */
	const FormattingMon1 				= "Januar";         		/* January */
	const FormattingMon2 				= "Februar";        		/* February */
	const FormattingMon3 				= "März";           		/* March */
	const FormattingMon4 				= "April";          		/* April */
	const FormattingMon5 				= "Mai";            		/* May */
	const FormattingMon6 				= "Juni";           		/* June */
	const FormattingMon7 				= "Juli";           		/* July */
	const FormattingMon8 				= "August";         		/* August */
	const FormattingMon9 				= "September";      		/* September */
	const FormattingMon10 				= "Oktober";        		/* October */
	const FormattingMon11 				= "November";       	 	/* November */
	const FormattingMon12 				= "Dezember";				/* December */

	const FormattingAbMon1				= "Jan.";            		/* Jan */
	const FormattingAbMon2 				= "Feb.";            		/* Feb */
	const FormattingAbMon3 				= "Mär.";            		/* Mar */
	const FormattingAbMon4 				= "Apr.";            		/* Apr */
	const FormattingAbMon5 				= "Mai";            		/* May */
	const FormattingAbMon6 				= "Jun.";            		/* Jun */
	const FormattingAbMon7 				= "Jul.";            		/* Jul */
	const FormattingAbMon8 				= "Aug.";            		/* Aug */
	const FormattingAbMon9 				= "Sep.";            		/* Sep */
	const FormattingAbMon10 			= "Okt.";            		/* Oct */
	const FormattingAbMon11 			= "Nov.";            		/* Nov */
	const FormattingAbMon12 			= "Dez.";            		/* Dec */

	const FormattingNarrowMon1			= "J";            			/* Jan */
	const FormattingNarrowMon2 			= "F";            			/* Feb */
	const FormattingNarrowMon3 			= "M";            			/* Mar */
	const FormattingNarrowMon4 			= "A";            			/* Apr */
	const FormattingNarrowMon5 			= "M";            			/* May */
	const FormattingNarrowMon6 			= "J";            			/* Jun */
	const FormattingNarrowMon7 			= "J";            			/* Jul */
	const FormattingNarrowMon8 			= "A";            			/* Aug */
	const FormattingNarrowMon9 			= "S";            			/* Sep */
	const FormattingNarrowMon10 		= "O";            			/* Oct */
	const FormattingNarrowMon11 		= "N";            			/* Nov */
	const FormattingNarrowMon12 		= "D";            			/* Dec */

	const StandAloneMon1 				= "Januar";         		/* January */
	const StandAloneMon2 				= "Februar";        		/* February */
	const StandAloneMon3 				= "März";           		/* March */
	const StandAloneMon4 				= "April";          		/* April */
	const StandAloneMon5 				= "Mai";            		/* May */
	const StandAloneMon6 				= "Juni";           		/* June */
	const StandAloneMon7 				= "Juli";           		/* July */
	const StandAloneMon8 				= "August";         		/* August */
	const StandAloneMon9 				= "September";      		/* September */
	const StandAloneMon10 				= "Oktober";        		/* October */
	const StandAloneMon11 				= "November";       	 	/* November */
	const StandAloneMon12 				= "Dezember";				/* December */

	const StandAloneAbMon1				= "Jan";            		/* Jan */
	const StandAloneAbMon2 				= "Feb";            		/* Feb */
	const StandAloneAbMon3 				= "Mär";            		/* Mar */
	const StandAloneAbMon4 				= "Apr";            		/* Apr */
	const StandAloneAbMon5 				= "Mai";            		/* May */
	const StandAloneAbMon6 				= "Jun";            		/* Jun */
	const StandAloneAbMon7 				= "Jul";            		/* Jul */
	const StandAloneAbMon8 				= "Aug";            		/* Aug */
	const StandAloneAbMon9 				= "Sep";            		/* Sep */
	const StandAloneAbMon10 			= "Okt";            		/* Oct */
	const StandAloneAbMon11 			= "Nov";            		/* Nov */
	const StandAloneAbMon12 			= "Dez";            		/* Dec */

	const StandAloneNarrowMon1			= "J";            			/* Jan */
	const StandAloneNarrowMon2 			= "F";            			/* Feb */
	const StandAloneNarrowMon3 			= "M";            			/* Mar */
	const StandAloneNarrowMon4 			= "A";            			/* Apr */
	const StandAloneNarrowMon5 			= "M";            			/* May */
	const StandAloneNarrowMon6 			= "J";            			/* Jun */
	const StandAloneNarrowMon7 			= "J";            			/* Jul */
	const StandAloneNarrowMon8 			= "A";            			/* Aug */
	const StandAloneNarrowMon9 			= "S";            			/* Sep */
	const StandAloneNarrowMon10 		= "O";            			/* Oct */
	const StandAloneNarrowMon11 		= "N";            			/* Nov */
	const StandAloneNarrowMon12 		= "D";            			/* Dec */

	/* daytime */
	const AMStr 						= "vormittags";				/* AM */
	const PMStr 						= "nachmittags";			/* PM */
	const AbAMStr 						= "vorm.";					/* AM */
	const AbPMStr 						= "nachm.";					/* PM */

	const BeforeChristStr				= "v. Chr.";				/* BC */
	const AnnoDominiStr					= "n. Chr.";				/* AD */
	const AbBeforeChristStr				= "v. Chr.";				/* BC */
	const AbAnnoDominiStr				= "n. Chr.";				/* AD */

	const DayBeforeYesterdayStr			= "vorgestern";   			/* day before yesterday */
	const YesterdayStr					= "gestern";      			/* Yesterday */
	const TodayStr						= "heute";        			/* Today */
	const TomorrowStr					= "morgen";       			/* Tomorrow */
	const DayAfterTomorrowStr			= "übermorgen";				/* day after tomorrow */
	const FutureStr						= "zukunft";				/* Future */

	/* frquency */
	const HourlyStr						= "stündlich";				/* hourly */
	const DailyStr						= "täglich";				/* daily */
	const WeeklyStr 					= "wöchentlich";			/* weekly */
	const MonthlyStr 					= "monatlich";				/* monthly */
	const YearlyStr 					= "jährlich";				/* yearly */

	/* response */
	const YesStr 						= "Ja";						/* affirmative response for yes/no queries */
	const NoStr 						= "Nein";					/* negative response for yes/no queries    */
	const ContinueStr 					= "Weiter";					/* affirmative response for continue/cancel queries */
	const CancelStr 					= "Abbruch";				/* negative response for continue/cancel queries */

	/* state */
	const OnStr 						= "An";						/* state on */
	const OffStr 						= "Aus";					/* stae off */
	const OpenStr 						= "offen";					/* state open */
	const ClosedStr						= "geschlossen";			/* state closed */

	/* hyphenation */
	const SoftHyphen 					= CM_SOFT_HYPHEN;				/* soft hyphenation */
	const HardHyphen 					= CM_HARD_HYPHEN;				/* hard hyphenation */

	/* Quotes */
	const PpenDbQuote 					= CDQM_DOUBLE_LOW_9;		/* start of double Quoted block */
	const CloseDbQuote 					= CDQM_DOUBLE_HIGH_REVERSED_9;	/* end of double Quoted block */
	const OpenSnQuote 					= CSQM_SINGLE_LOW_9;		/* start of single Quoted block */
	const CloseSnQuote 					= CSQM_LEFT_SINGLE;		    /* end of single Quoted block */
	const Apostrophe 					= CSQM_RIGHT_SINGLE;		/* apoStrophe */
	const Prime 						= CM_PRIME;		    		/* prime */
	const DoublePrime 					= CM_DOUBLE_PRIME;			/* double prime */
	const EnDash 						= CM_ENDASH;		    	/* en dash */
	const EmDash 						= CM_EMDASH;		    	/* em dash */

	const AddStr 						= "hinzufügen";
	const ChangeStr 					= "umschalten";    
	const DeleteStr 					= "löschen";
	const EditStr 						= "bearbeiten";
	const LockStr 						= "schließen";
	const ModifyStr 					= "ändern";
	const PrintStr 						= "drucken";
	const ResetStr 						= "zurücksetzen";
	const SaveStr 						= "speichern";
	const ScanStr 						= "scannen";
	const SearchStr						= "suchen";
	const SelectStr 					= "auswählen";
	const ShowStr 						= "anzeigen";
	const SwitchStr						= "umschalten";

	/* online */
	const LoginStr 						= "anmelden";
	const RegisterStr 					= "regiStrieren";

	/* navigation */
	const FirstStr 						= "erste";
	const LastStr 						= "letzte";
	const NextStr 						= "nächste";
	const PreviousStr					= "vorherige";
	const ForwardStr 					= "vorwärts";
	const BackwardStr					= "rückwärts";
	const BackStr 						= "zurück";

	/* position */
	const LeftStr 						= "links";
	const RightStr 						= "rechts";
	const TopStr 						= "oben";
	const BottomStr						= "unten";
	const CenterStr 					= "zentriert";
	const MiddleStr 					= "mittig";
	const AboveStr 						= "darüber";
	const BelowStr 						= "darunter";
	const InfrontStr					= "davor";
	const BehindStr 					= "dahinter";
	const WithinStr 					= "innerhalb";
	const BeyondStr 					= "außerhalb";
	const InsideStr 					= "innen";
	const OutsideStr  					= "außen";

	/* range */
	const FromStr 						= "von";
	const UptoStr 						= "bis";

} /* end of class ntrnx_locale_language */

?>