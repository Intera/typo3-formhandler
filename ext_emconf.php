<?php

########################################################################
# Extension Manager/Repository config file for ext "formhandler".
#
# Auto generated 23-09-2011 12:49
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Formhandler',
	'description' => 'The swiss army knife for all kinds of mailforms, completely new written using the MVC concept. Result: Flexibility, Flexibility, Flexibility  :-).',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.1.0dev',
	'state' => 'stable',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Dev-Team Typoheads',
	'author_email' => 'dev@typoheads.at',
	'author_company' => 'Typoheads GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.2.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:320:{s:13:"CHANGELOG.txt";s:4:"d77a";s:12:"ext_icon.gif";s:4:"f735";s:17:"ext_localconf.php";s:4:"4fc4";s:14:"ext_tables.php";s:4:"af2e";s:14:"ext_tables.sql";s:4:"c248";s:7:"tca.php";s:4:"ab15";s:58:"Classes/AjaxHandler/Tx_Formhandler_AbstractAjaxHandler.php";s:4:"e9ed";s:57:"Classes/AjaxHandler/Tx_Formhandler_AjaxHandler_JQuery.php";s:4:"79f3";s:50:"Classes/Component/Tx_Formhandler_AbstractClass.php";s:4:"5cd7";s:54:"Classes/Component/Tx_Formhandler_AbstractComponent.php";s:4:"bc35";s:54:"Classes/Component/Tx_Formhandler_Component_Manager.php";s:4:"c24c";s:56:"Classes/Controller/Tx_Formhandler_AbstractController.php";s:4:"a740";s:51:"Classes/Controller/Tx_Formhandler_Configuration.php";s:4:"9e42";s:45:"Classes/Controller/Tx_Formhandler_Content.php";s:4:"8598";s:57:"Classes/Controller/Tx_Formhandler_ControllerInterface.php";s:4:"b77f";s:53:"Classes/Controller/Tx_Formhandler_Controller_Form.php";s:4:"732c";s:48:"Classes/Controller/Tx_Formhandler_Dispatcher.php";s:4:"277c";s:63:"Classes/Controller/Module/Tx_Formhandler_Controller_Backend.php";s:4:"0bc0";s:72:"Classes/Controller/Module/Tx_Formhandler_Controller_BackendClearLogs.php";s:4:"449d";s:66:"Classes/Controller/Module/class.tx_formhandler_mod1_pagination.php";s:4:"c7e5";s:35:"Classes/Controller/Module/clear.gif";s:4:"f58d";s:34:"Classes/Controller/Module/conf.php";s:4:"8605";s:35:"Classes/Controller/Module/index.php";s:4:"1f47";s:40:"Classes/Controller/Module/moduleicon.gif";s:4:"1b05";s:52:"Classes/Debugger/Tx_Formhandler_AbstractDebugger.php";s:4:"7044";s:51:"Classes/Debugger/Tx_Formhandler_Debugger_DevLog.php";s:4:"c877";s:50:"Classes/Debugger/Tx_Formhandler_Debugger_Print.php";s:4:"cc74";s:52:"Classes/Finisher/Tx_Formhandler_AbstractFinisher.php";s:4:"7b7f";s:51:"Classes/Finisher/Tx_Formhandler_Finisher_AutoDB.php";s:4:"e29f";s:55:"Classes/Finisher/Tx_Formhandler_Finisher_ClearCache.php";s:4:"e4a5";s:47:"Classes/Finisher/Tx_Formhandler_Finisher_DB.php";s:4:"12fc";s:56:"Classes/Finisher/Tx_Formhandler_Finisher_DifferentDB.php";s:4:"cf97";s:61:"Classes/Finisher/Tx_Formhandler_Finisher_GenerateAuthCode.php";s:4:"70e8";s:49:"Classes/Finisher/Tx_Formhandler_Finisher_Mail.php";s:4:"30e0";s:53:"Classes/Finisher/Tx_Formhandler_Finisher_Redirect.php";s:4:"9fb8";s:60:"Classes/Finisher/Tx_Formhandler_Finisher_RestoreLanguage.php";s:4:"0e21";s:56:"Classes/Finisher/Tx_Formhandler_Finisher_SetLanguage.php";s:4:"d9b1";s:52:"Classes/Finisher/Tx_Formhandler_Finisher_StoreGP.php";s:4:"cf33";s:63:"Classes/Finisher/Tx_Formhandler_Finisher_StoreUploadedFiles.php";s:4:"633b";s:56:"Classes/Finisher/Tx_Formhandler_Finisher_SubmittedOK.php";s:4:"98e5";s:50:"Classes/Generator/Tx_Formhandler_Generator_CSV.php";s:4:"7eb7";s:52:"Classes/Generator/Tx_Formhandler_Generator_TCPDF.php";s:4:"585e";s:57:"Classes/Generator/FE/Tx_Formhandler_AbstractGenerator.php";s:4:"e740";s:53:"Classes/Generator/FE/Tx_Formhandler_Generator_Csv.php";s:4:"87b8";s:62:"Classes/Generator/FE/Tx_Formhandler_Generator_PdfGenerator.php";s:4:"453b";s:55:"Classes/Generator/FE/Tx_Formhandler_Generator_Print.php";s:4:"068b";s:55:"Classes/Generator/FE/Tx_Formhandler_Generator_TcPdf.php";s:4:"c8b9";s:59:"Classes/Generator/FE/Tx_Formhandler_Generator_WebkitPdf.php";s:4:"5ba9";s:58:"Classes/Interceptor/Tx_Formhandler_AbstractInterceptor.php";s:4:"6516";s:67:"Classes/Interceptor/Tx_Formhandler_Interceptor_AntiSpamFormTime.php";s:4:"3490";s:64:"Classes/Interceptor/Tx_Formhandler_Interceptor_CombineFields.php";s:4:"7ef7";s:63:"Classes/Interceptor/Tx_Formhandler_Interceptor_Filtreatment.php";s:4:"2f4c";s:65:"Classes/Interceptor/Tx_Formhandler_Interceptor_FormProtection.php";s:4:"726b";s:61:"Classes/Interceptor/Tx_Formhandler_Interceptor_IPBlocking.php";s:4:"e613";s:62:"Classes/Interceptor/Tx_Formhandler_Interceptor_ParseValues.php";s:4:"bc53";s:66:"Classes/Interceptor/Tx_Formhandler_Interceptor_TranslateFields.php";s:4:"986a";s:48:"Classes/Logger/Tx_Formhandler_AbstractLogger.php";s:4:"379c";s:43:"Classes/Logger/Tx_Formhandler_Logger_DB.php";s:4:"8e93";s:47:"Classes/Logger/Tx_Formhandler_Logger_DevLog.php";s:4:"5887";s:48:"Classes/Mailer/Tx_Formhandler_AbstractMailer.php";s:4:"fd43";s:49:"Classes/Mailer/Tx_Formhandler_MailerInterface.php";s:4:"8c1e";s:49:"Classes/Mailer/Tx_Formhandler_Mailer_HtmlMail.php";s:4:"3908";s:60:"Classes/PreProcessor/Tx_Formhandler_AbstractPreProcessor.php";s:4:"4dc1";s:67:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_ClearTempFiles.php";s:4:"641e";s:59:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_LoadDB.php";s:4:"fb1d";s:70:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_LoadDefaultValues.php";s:4:"e581";s:64:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_LoadGetPost.php";s:4:"3282";s:69:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_ValidateAuthCode.php";s:4:"b29d";s:50:"Classes/Session/Tx_Formhandler_AbstractSession.php";s:4:"cad1";s:46:"Classes/Session/Tx_Formhandler_Session_PHP.php";s:4:"794f";s:48:"Classes/Session/Tx_Formhandler_Session_TYPO3.php";s:4:"44ef";s:40:"Classes/Utils/Tx_Formhandler_Globals.php";s:4:"5232";s:47:"Classes/Utils/Tx_Formhandler_Template_TCPDF.php";s:4:"0d8c";s:45:"Classes/Utils/Tx_Formhandler_UtilityFuncs.php";s:4:"11bd";s:53:"Classes/Utils/Tx_Formhandler_Utils_AjaxRemoveFile.php";s:4:"8402";s:51:"Classes/Utils/Tx_Formhandler_Utils_AjaxValidate.php";s:4:"4f4e";s:54:"Classes/Validator/Tx_Formhandler_AbstractValidator.php";s:4:"c1f1";s:51:"Classes/Validator/Tx_Formhandler_Validator_Ajax.php";s:4:"445f";s:54:"Classes/Validator/Tx_Formhandler_Validator_Default.php";s:4:"7e7e";s:67:"Classes/Validator/ErrorChecks/Tx_Formhandler_AbstractErrorCheck.php";s:4:"382f";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_BetweenItems.php";s:4:"855d";s:73:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_BetweenLength.php";s:4:"22f2";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_BetweenValue.php";s:4:"df1f";s:78:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_CalculatingCaptcha.php";s:4:"a5b1";s:67:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Captcha.php";s:4:"c5c2";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_ContainsAll.php";s:4:"162e";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_ContainsNone.php";s:4:"02cb";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_ContainsOne.php";s:4:"8bc0";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_ContainsOnly.php";s:4:"c07b";s:64:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Date.php";s:4:"2b6d";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_DateRange.php";s:4:"ae5b";s:65:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Email.php";s:4:"4aa5";s:66:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Equals.php";s:4:"7e65";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_EqualsField.php";s:4:"7f8a";s:76:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileAllowedTypes.php";s:4:"1ba9";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMaxCount.php";s:4:"965c";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMaxSize.php";s:4:"e167";s:76:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMaxTotalSize.php";s:4:"b99c";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMinCount.php";s:4:"9948";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMinSize.php";s:4:"feea";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileRequired.php";s:4:"6335";s:65:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Float.php";s:4:"9fb1";s:67:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Integer.php";s:4:"4c65";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_IsInDBTable.php";s:4:"9fdd";s:74:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_IsNotInDBTable.php";s:4:"4217";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_JmRecaptcha.php";s:4:"eef5";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MathGuard.php";s:4:"70a6";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MaxItems.php";s:4:"a9a4";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MaxLength.php";s:4:"a8f1";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MaxValue.php";s:4:"1bca";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MinItems.php";s:4:"0928";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MinLength.php";s:4:"b6f7";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MinValue.php";s:4:"0faf";s:75:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_NotDefaultValue.php";s:4:"593d";s:74:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_NotEqualsField.php";s:4:"aa39";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_PregMatch.php";s:4:"6fef";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Required.php";s:4:"ffd2";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_SrFreecap.php";s:4:"bbb9";s:64:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Time.php";s:4:"d35a";s:63:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Url.php";s:4:"aafa";s:80:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_WtCalculatingCaptcha.php";s:4:"bd8d";s:44:"Classes/View/Tx_Formhandler_AbstractView.php";s:4:"a057";s:45:"Classes/View/Tx_Formhandler_View_AntiSpam.php";s:4:"03e1";s:41:"Classes/View/Tx_Formhandler_View_Form.php";s:4:"a470";s:41:"Classes/View/Tx_Formhandler_View_Mail.php";s:4:"8dd2";s:40:"Classes/View/Tx_Formhandler_View_PDF.php";s:4:"9aa3";s:48:"Classes/View/Tx_Formhandler_View_SubmittedOK.php";s:4:"1212";s:32:"Configuration/Settings/setup.txt";s:4:"9a7b";s:26:"Examples/Captcha/howto.txt";s:4:"131d";s:25:"Examples/Captcha/lang.xml";s:4:"eb7a";s:27:"Examples/Captcha/styles.css";s:4:"9dca";s:30:"Examples/Captcha/template.html";s:4:"b569";s:37:"Examples/Captcha/typoscript_setup.txt";s:4:"fcf0";s:26:"Examples/Default/howto.txt";s:4:"9a91";s:25:"Examples/Default/lang.xml";s:4:"ac8b";s:30:"Examples/Default/template.html";s:4:"05f0";s:37:"Examples/Default/typoscript_setup.txt";s:4:"63a6";s:33:"Examples/MasterTemplate/howto.txt";s:4:"9573";s:32:"Examples/MasterTemplate/lang.xml";s:4:"4375";s:44:"Examples/MasterTemplate/master_template.html";s:4:"4722";s:34:"Examples/MasterTemplate/styles.css";s:4:"9dca";s:37:"Examples/MasterTemplate/template.html";s:4:"6b00";s:44:"Examples/MasterTemplate/typoscript_setup.txt";s:4:"ae9a";s:28:"Examples/MultiStep/howto.txt";s:4:"b7c3";s:27:"Examples/MultiStep/lang.xml";s:4:"3415";s:29:"Examples/MultiStep/styles.css";s:4:"9dca";s:32:"Examples/MultiStep/template.html";s:4:"aae6";s:39:"Examples/MultiStep/typoscript_setup.txt";s:4:"74e1";s:38:"Examples/MultiStepConditions/howto.txt";s:4:"c020";s:37:"Examples/MultiStepConditions/lang.xml";s:4:"fbe9";s:39:"Examples/MultiStepConditions/styles.css";s:4:"9dca";s:42:"Examples/MultiStepConditions/template.html";s:4:"8d2a";s:49:"Examples/MultiStepConditions/typoscript_setup.txt";s:4:"9f7d";s:29:"Examples/SingleStep/howto.txt";s:4:"e4fe";s:28:"Examples/SingleStep/lang.xml";s:4:"4375";s:30:"Examples/SingleStep/styles.css";s:4:"9dca";s:33:"Examples/SingleStep/template.html";s:4:"99b0";s:40:"Examples/SingleStep/typoscript_setup.txt";s:4:"7665";s:32:"Resources/CSS/backend/styles.css";s:4:"f4c6";s:36:"Resources/HTML/backend/template.html";s:4:"cdd0";s:32:"Resources/Images/ajax-loader.gif";s:4:"7b97";s:31:"Resources/Images/ce_wiz_pi1.png";s:4:"45fa";s:31:"Resources/Images/ce_wiz_pi2.png";s:4:"f891";s:26:"Resources/Images/notok.png";s:4:"4249";s:23:"Resources/Images/ok.png";s:4:"c9b5";s:38:"Resources/JS/addFields_predefinedJS.js";s:4:"17f6";s:37:"Resources/JS/jscalendar-1.0/ChangeLog";s:4:"5628";s:34:"Resources/JS/jscalendar-1.0/README";s:4:"fd96";s:55:"Resources/JS/jscalendar-1.0/bugtest-hidden-selects.html";s:4:"d49b";s:45:"Resources/JS/jscalendar-1.0/calendar-blue.css";s:4:"b8bb";s:46:"Resources/JS/jscalendar-1.0/calendar-blue2.css";s:4:"654d";s:46:"Resources/JS/jscalendar-1.0/calendar-brown.css";s:4:"f326";s:46:"Resources/JS/jscalendar-1.0/calendar-green.css";s:4:"b44e";s:45:"Resources/JS/jscalendar-1.0/calendar-setup.js";s:4:"827f";s:54:"Resources/JS/jscalendar-1.0/calendar-setup_stripped.js";s:4:"1bd1";s:47:"Resources/JS/jscalendar-1.0/calendar-system.css";s:4:"9b44";s:44:"Resources/JS/jscalendar-1.0/calendar-tas.css";s:4:"fa3b";s:48:"Resources/JS/jscalendar-1.0/calendar-win2k-1.css";s:4:"e3c6";s:48:"Resources/JS/jscalendar-1.0/calendar-win2k-2.css";s:4:"332d";s:53:"Resources/JS/jscalendar-1.0/calendar-win2k-cold-1.css";s:4:"b081";s:53:"Resources/JS/jscalendar-1.0/calendar-win2k-cold-2.css";s:4:"3487";s:39:"Resources/JS/jscalendar-1.0/calendar.js";s:4:"4479";s:40:"Resources/JS/jscalendar-1.0/calendar.php";s:4:"8f8b";s:48:"Resources/JS/jscalendar-1.0/calendar_stripped.js";s:4:"4be3";s:40:"Resources/JS/jscalendar-1.0/dayinfo.html";s:4:"9f1c";s:35:"Resources/JS/jscalendar-1.0/img.gif";s:4:"c1e5";s:38:"Resources/JS/jscalendar-1.0/index.html";s:4:"5ae1";s:41:"Resources/JS/jscalendar-1.0/menuarrow.gif";s:4:"b5a9";s:42:"Resources/JS/jscalendar-1.0/menuarrow2.gif";s:4:"1f8c";s:47:"Resources/JS/jscalendar-1.0/multiple-dates.html";s:4:"eba2";s:46:"Resources/JS/jscalendar-1.0/release-notes.html";s:4:"cb86";s:41:"Resources/JS/jscalendar-1.0/simple-1.html";s:4:"026a";s:41:"Resources/JS/jscalendar-1.0/simple-2.html";s:4:"afee";s:41:"Resources/JS/jscalendar-1.0/simple-3.html";s:4:"1980";s:46:"Resources/JS/jscalendar-1.0/test-position.html";s:4:"8db2";s:36:"Resources/JS/jscalendar-1.0/test.php";s:4:"94fb";s:45:"Resources/JS/jscalendar-1.0/doc/reference.pdf";s:4:"2b6b";s:53:"Resources/JS/jscalendar-1.0/doc/html/field-button.jpg";s:4:"3b80";s:54:"Resources/JS/jscalendar-1.0/doc/html/reference-Z-S.css";s:4:"5fa8";s:50:"Resources/JS/jscalendar-1.0/doc/html/reference.css";s:4:"ab36";s:51:"Resources/JS/jscalendar-1.0/doc/html/reference.html";s:4:"da77";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-af.js";s:4:"65fc";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-al.js";s:4:"262a";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-bg.js";s:4:"7cc8";s:54:"Resources/JS/jscalendar-1.0/lang/calendar-big5-utf8.js";s:4:"4b1a";s:49:"Resources/JS/jscalendar-1.0/lang/calendar-big5.js";s:4:"8b21";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-br.js";s:4:"d8a9";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-ca.js";s:4:"7feb";s:52:"Resources/JS/jscalendar-1.0/lang/calendar-cs-utf8.js";s:4:"aae7";s:51:"Resources/JS/jscalendar-1.0/lang/calendar-cs-win.js";s:4:"1ac7";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-da.js";s:4:"47c7";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-de.js";s:4:"b625";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-du.js";s:4:"82ab";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-el.js";s:4:"5a13";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-en.js";s:4:"4681";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-es.js";s:4:"22e6";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-fi.js";s:4:"f201";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-fr.js";s:4:"4277";s:52:"Resources/JS/jscalendar-1.0/lang/calendar-he-utf8.js";s:4:"7ace";s:52:"Resources/JS/jscalendar-1.0/lang/calendar-hr-utf8.js";s:4:"8d3b";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-hr.js";s:4:"48e3";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-hu.js";s:4:"4b5e";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-it.js";s:4:"70d1";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-jp.js";s:4:"b47d";s:52:"Resources/JS/jscalendar-1.0/lang/calendar-ko-utf8.js";s:4:"9411";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-ko.js";s:4:"882d";s:52:"Resources/JS/jscalendar-1.0/lang/calendar-lt-utf8.js";s:4:"0a5f";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-lt.js";s:4:"a0cf";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-lv.js";s:4:"030a";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-nl.js";s:4:"f0e8";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-no.js";s:4:"d834";s:52:"Resources/JS/jscalendar-1.0/lang/calendar-pl-utf8.js";s:4:"4247";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-pl.js";s:4:"2510";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-pt.js";s:4:"4265";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-ro.js";s:4:"6011";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-ru.js";s:4:"3402";s:52:"Resources/JS/jscalendar-1.0/lang/calendar-ru_win_.js";s:4:"eafc";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-si.js";s:4:"ef1f";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-sk.js";s:4:"6e55";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-sp.js";s:4:"e6e4";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-sv.js";s:4:"d9f1";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-tr.js";s:4:"bbbb";s:47:"Resources/JS/jscalendar-1.0/lang/calendar-zh.js";s:4:"4e19";s:43:"Resources/JS/jscalendar-1.0/lang/cn_utf8.js";s:4:"2085";s:52:"Resources/JS/jscalendar-1.0/skins/aqua/active-bg.gif";s:4:"f8fb";s:50:"Resources/JS/jscalendar-1.0/skins/aqua/dark-bg.gif";s:4:"949f";s:51:"Resources/JS/jscalendar-1.0/skins/aqua/hover-bg.gif";s:4:"803a";s:52:"Resources/JS/jscalendar-1.0/skins/aqua/menuarrow.gif";s:4:"1f8c";s:52:"Resources/JS/jscalendar-1.0/skins/aqua/normal-bg.gif";s:4:"8511";s:54:"Resources/JS/jscalendar-1.0/skins/aqua/rowhover-bg.gif";s:4:"c097";s:52:"Resources/JS/jscalendar-1.0/skins/aqua/status-bg.gif";s:4:"1238";s:48:"Resources/JS/jscalendar-1.0/skins/aqua/theme.css";s:4:"ec69";s:51:"Resources/JS/jscalendar-1.0/skins/aqua/title-bg.gif";s:4:"8d65";s:51:"Resources/JS/jscalendar-1.0/skins/aqua/today-bg.gif";s:4:"9bef";s:32:"Resources/Language/locallang.xml";s:4:"d1da";s:35:"Resources/Language/locallang_db.xml";s:4:"0f94";s:38:"Resources/Language/locallang_debug.xml";s:4:"633b";s:43:"Resources/Language/locallang_exceptions.xml";s:4:"dbbd";s:36:"Resources/Language/locallang_mod.xml";s:4:"895a";s:36:"Resources/Language/locallang_tca.xml";s:4:"ce0d";s:44:"Resources/PHP/class.formhandler_htmlmail.php";s:4:"989c";s:35:"Resources/PHP/class.tx_dynaflex.php";s:4:"37a6";s:53:"Resources/PHP/class.tx_formhandler_formprotection.php";s:4:"8d6d";s:47:"Resources/PHP/class.tx_formhandler_tcafuncs.php";s:4:"26a7";s:46:"Resources/PHP/class.tx_formhandler_wizicon.php";s:4:"fe97";s:30:"Resources/PHP/parsecsv.lib.php";s:4:"8cb8";s:55:"Resources/PHP/Hooks/class.tx_formhandler_clearCache.php";s:4:"f55b";s:52:"Resources/PHP/Hooks/class.tx_formhandler_stdwrap.php";s:4:"f62b";s:43:"Resources/PHP/filtreatment/Filtreatment.php";s:4:"fd67";s:33:"Resources/PHP/tcpdf/CHANGELOG.TXT";s:4:"3b6c";s:31:"Resources/PHP/tcpdf/LICENSE.TXT";s:4:"7fbc";s:30:"Resources/PHP/tcpdf/README.TXT";s:4:"80d9";s:32:"Resources/PHP/tcpdf/barcodes.php";s:4:"b1a4";s:34:"Resources/PHP/tcpdf/htmlcolors.php";s:4:"0871";s:29:"Resources/PHP/tcpdf/tcpdf.php";s:4:"f1ed";s:36:"Resources/PHP/tcpdf/unicode_data.php";s:4:"e4e5";s:44:"Resources/PHP/tcpdf/cache/chapter_demo_1.txt";s:4:"f118";s:44:"Resources/PHP/tcpdf/cache/chapter_demo_2.txt";s:4:"7b9a";s:45:"Resources/PHP/tcpdf/cache/table_data_demo.txt";s:4:"2fa9";s:38:"Resources/PHP/tcpdf/cache/utf8test.txt";s:4:"b90d";s:43:"Resources/PHP/tcpdf/config/tcpdf_config.php";s:4:"72c3";s:47:"Resources/PHP/tcpdf/config/tcpdf_config_alt.php";s:4:"6917";s:39:"Resources/PHP/tcpdf/config/lang/eng.php";s:4:"c9c6";s:39:"Resources/PHP/tcpdf/config/lang/ita.php";s:4:"d006";s:36:"Resources/PHP/tcpdf/fonts/README.TXT";s:4:"ff43";s:40:"Resources/PHP/tcpdf/fonts/freesans.ctg.z";s:4:"543a";s:38:"Resources/PHP/tcpdf/fonts/freesans.php";s:4:"f455";s:36:"Resources/PHP/tcpdf/fonts/freesans.z";s:4:"ae32";s:41:"Resources/PHP/tcpdf/fonts/freesansb.ctg.z";s:4:"5c10";s:39:"Resources/PHP/tcpdf/fonts/freesansb.php";s:4:"45f0";s:37:"Resources/PHP/tcpdf/fonts/freesansb.z";s:4:"42f4";s:42:"Resources/PHP/tcpdf/fonts/freesansbi.ctg.z";s:4:"192f";s:40:"Resources/PHP/tcpdf/fonts/freesansbi.php";s:4:"e013";s:38:"Resources/PHP/tcpdf/fonts/freesansbi.z";s:4:"e650";s:41:"Resources/PHP/tcpdf/fonts/freesansi.ctg.z";s:4:"c190";s:39:"Resources/PHP/tcpdf/fonts/freesansi.php";s:4:"f30c";s:37:"Resources/PHP/tcpdf/fonts/freesansi.z";s:4:"eb2c";s:39:"Resources/PHP/tcpdf/fonts/helvetica.php";s:4:"74b5";s:40:"Resources/PHP/tcpdf/fonts/helveticab.php";s:4:"d9ae";s:41:"Resources/PHP/tcpdf/fonts/helveticabi.php";s:4:"d9ae";s:40:"Resources/PHP/tcpdf/fonts/helveticai.php";s:4:"74b5";s:37:"Resources/PHP/tcpdf/images/_blank.png";s:4:"f91c";s:36:"Resources/PHP/tcpdf/images/alpha.png";s:4:"d187";s:34:"Resources/PHP/tcpdf/images/bug.eps";s:4:"e01e";s:41:"Resources/PHP/tcpdf/images/image_demo.jpg";s:4:"6bc3";s:47:"Resources/PHP/tcpdf/images/image_with_alpha.png";s:4:"9fd2";s:34:"Resources/PHP/tcpdf/images/img.png";s:4:"9a1b";s:43:"Resources/PHP/tcpdf/images/logo_example.gif";s:4:"fcc9";s:43:"Resources/PHP/tcpdf/images/logo_example.jpg";s:4:"a3ee";s:43:"Resources/PHP/tcpdf/images/logo_example.png";s:4:"a595";s:37:"Resources/PHP/tcpdf/images/pelican.ai";s:4:"a3e3";s:41:"Resources/PHP/tcpdf/images/tcpdf_logo.jpg";s:4:"bd3f";s:35:"Resources/PHP/tcpdf/images/tiger.ai";s:4:"bc49";s:29:"Resources/XML/flexform_ds.xml";s:4:"24f2";s:14:"doc/index.html";s:4:"4367";s:19:"doc/manual-full.sxw";s:4:"fbd6";s:14:"doc/manual.pdf";s:4:"f4eb";s:14:"doc/manual.sxw";s:4:"6e66";s:14:"doc/manual.txt";s:4:"2e7e";s:32:"pi1/class.tx_formhandler_pi1.php";s:4:"6168";}',
	'suggests' => array(
	),
);

?>