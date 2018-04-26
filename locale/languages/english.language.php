<?php

namespace NTRNX_LOCALE;

/* begin of class ntrnx_locale_language */
class ntrnx_locale_language {

	public static function data() {

		return array(

			VersionMajor	=> 0,
			VersionMinor	=> 0,
			VersionBuild	=> 0,
			VersionRevision	=> 0,
			Date			=> "00-00-00",
			Time			=> "00:00:00"

		);

	}

	public static function prefs() {

		define (NATIVE_LANGUAGE_NAME,		"english");	 	 	/* native language of this locale */	

		/* daynames */
		define (DAY_1,						"Sunday");			/* Sunday */
		define (DAY_2,						"Monday");			/* Monday */
		define (DAY_3,						"Tuesday");			/* Tuesday */
		define (DAY_4,						"Wednesday");		/* Wednesday */
		define (DAY_5,						"Thursday");		/* Thursday */
		define (DAY_6,						"Friday");			/* Friday */
		define (DAY_7,						"Saturday");		/* Saturday */

		define (ABDAY_1,					"Sun");             /* Sun */
		define (ABDAY_2,					"Mon");             /* Mon */
		define (ABDAY_3,					"Tue");             /* Tue */
		define (ABDAY_4,					"Wed");             /* Wed */
		define (ABDAY_5,					"Thu");             /* Thu */
		define (ABDAY_6,					"Fri");             /* Fri */
		define (ABDAY_7,					"Sat");             /* Sat */

		/* month names */
		define (MON_1,						"January");         /* January */
		define (MON_2,						"February");        /* February */
		define (MON_3,						"March");           /* March */
		define (MON_4,						"April");          	/* April */
		define (MON_5,						"May");            	/* May */
		define (MON_6,						"June");           	/* June */
		define (MON_7,						"July");           	/* July */
		define (MON_8,						"August");         	/* August */
		define (MON_9,						"September");      	/* September */
		define (MON_10,						"October");        	/* October */
		define (MON_11,						"November");       	/* November */
		define (MON_12,						"December");       	/* December */

		define (ABMON_1,					"Jan");            	/* Jan */
		define (ABMON_2,					"Feb");            	/* Feb */
		define (ABMON_3,					"Mar");            	/* Mar */
		define (ABMON_4,					"Apr");            	/* Apr */
		define (ABMON_5,					"May");            	/* May */
		define (ABMON_6,					"Jun");            	/* Jun */
		define (ABMON_7,					"Jul");            	/* Jul */
		define (ABMON_8,					"Aug");            	/* Aug */
		define (ABMON_9,					"Sep");            	/* Sep */
		define (ABMON_10,					"Oct");            	/* Oct */
		define (ABMON_11,					"Nov");            	/* Nov */
		define (ABMON_12,					"Dec");            	/* Dec */

		/* daytime */
		define (AM_STR,						"AM");				/* AM */
		define (PM_STR,						"PM");				/* PM */
		define (ABAM_STR,					"AM");				/* AM */
		define (ABPM_STR,					"PM.");				/* PM */

		//const BeforeChristStr		= "BC";						/* BC */
		//const AnnoDominiStr			= "AD";						/* AD */
		//const AbBeforeChristStr		= "B";						/* BC */
		//const AbAnnoDominiStr		= "A";						/* AD */

		define (DAY_BEFORE_YESTERDAY_STR,	"Day before Yesterday");   	/* day before yesterday */
		define (YESTERDAY_STR,				"Yesterday");      	/* Yesterday */
		define (TODAY_STR,					"Today");        	/* Today */
		define (TOMORROW_STR,				"Tomorrow");       	/* Tomorrow */
		define (DAY_AFTER_TOMORROW_STR,		"Day after Tomorrow ");		/* day after tomorrow */
		define (FUTURE_STR,					"Future");			/* Future */

		/* frquency */
		define (HOURLY_STR,					"hourly");			/* hourly */
		define (DAILY_STR,					"daily");			/* daily */
		define (WEEKLY_STR,					"weekly");			/* weekly */
		define (MONTHLY_STR,				"monthly");			/* monthly */
		define (YEARLY_STR,					"yearly");			/* yearly */

		/* response */
		define (YES_STR,					"Yes");				/* affirmative response for yes/no queries */
		define (NO_STR,						"No");				/* negative response for yes/no queries    */
		define (CONTINUE_STR,				"Continue");		/* affirmative response for continue/cancel queries */
		define (CANCEL_STR,					"Cancel");			/* negative response for continue/cancel queries */

		/* state */
		define (ON_STR,						"on");				/* state on */
		define (OFF_STR,					"off");				/* stae off */
		define (OPEN_STR,					"open");			/* state open */
		define (CLOSED_STR,					"closed");			/* state closed */

		/* hyphenation */
		define (SOFT_HYPHEN,				"-");				/* soft hyphenation */
		define (HARD_HYPHEN,				"-");				/* hard hyphenation */

		/* quotes */
		define (OPEN_DB_QUOTE,				"&#8222");		    /* start of double quoted block */
		define (CLOSE_DB_QUOTE,				"&#8220");		    /* end of double quoted block */
		define (OPEN_SN_QUOTE,				"&#8218");		    /* start of single quoted block */
		define (CLOSE_SN_QUOTE,				"&#8216");		    /* end of single quoted block */
		define (APOSTROPHE,					"&#8217");		    /* apostrophe */
		define (PRIME,						"&#8242");		    /* prime */
		define (DOUBLE_PRIME,				"&#8243");		    /* double prime */
		define (EN_DASH,					"&#8211");		    /* en dash */
		define (EM_DASH,					"&#8212");		    /* em dash */

		define (ADD_STR,					"add");
		define (CHANGE_STR,					"change");    
		define (DELETE_STR,					"delete");
		define (EDIT_STR,					"edit");
		define (LOCK_STR,					"lock");
		define (MODIFY_STR,					"modify");
		define (PRINT_STR,					"print");
		define (RESET_STR,					"reset");
		define (SAVE_STR,					"save");
		define (SCAN_STR,					"scan");
		define (SEARCH_STR,					"search");
		define (SELECT_STR,					"select");
		define (SHOW_STR,					"show");
		define (SWITCH_STR,					"switch");

		/* online */
		define (LOGIN_STR,					"login");
		define (REGISTER_STR,				"register");

		/* navigation */
		define (FIRST_STR,					"first");
		define (LAST_STR,					"last");
		define (NEXT_STR,					"next");
		define (PREVIOUS_STR,				"previous");
		define (FORWARD_STR,				"forward");
		define (BACKWARD_STR,				"backward");
		define (BACK_STR,					"back");

		/* position */
		define (LEFT_STR,					"left");
		define (RIGHT_STR,					"right");
		define (TOP_STR,					"top");
		define (BOTTOM_STR,					"bottom");
		define (CENTER_STR,					"center");
		define (MIDDLE_STR,					"middle");
		define (ABOVE_STR,					"above");
		define (BELOW_STR,					"below");
		define (IN_FRONT_STR,				"in front of");
		define (BEHIND_STR,					"behind");
		define (WITHIN_STR,					"within");
		define (BEYOND_STR,					"beyond");
		define (INSIDE_STR,					"inside");
		define (OUTSIDE_STR,				"outside");

		/* range */
		define (FROM_STR,					"from");
		define (UPTO_STR,					"to");

	}

}

?>