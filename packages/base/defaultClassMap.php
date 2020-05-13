<?php

/**
 * INITAL CLASS MAP OF FRAMEWORK AUTOLOADER. 
 * ALL CLASS NAMES SOULD BE IN lowercase AND FQCN FORMAT.
 * FILES PATH WILL NOT CHECK AND IF THEY NOT EXISTS AN FATAL ERROR WILL OCCUR.
 * 
 * EDIT CAREFULLY!!!
 */
return array(
	'packages\base\autoloadcontainertrait' => 'packages/base/libraries/autoloader/AutoloadContainerTrait.php',
	'packages\base\cache' => 'packages/base/libraries/cache/Cache.php',
	'packages\base\cache\dbcachehandler' => 'packages/base/libraries/cache/DbCachehandler.php',
	'packages\base\cache\filecachehandler' => 'packages/base/libraries/cache/FileCachehandler.php',
	'packages\base\cache\filelocktimeoutexception' => 'packages/base/libraries/cache/FileLockTimeoutException.php',
	'packages\base\cache\icachehandler' => 'packages/base/libraries/cache/ICachehandler.php',
	'packages\base\cache\memcacheextensionexception' => 'packages/base/libraries/cache/MemcacheExtensionException.php',
	'packages\base\cache\memcachehandler' => 'packages/base/libraries/cache/MemcacheHandler.php',
	'packages\base\cli' => 'packages/base/libraries/background/cli.php',
	'packages\base\databaseconfigexception' => 'packages/base/libraries/loader/exceptions.php',
	'packages\base\date' => 'packages/base/libraries/date/date.php',
	'packages\base\date\calendarnotexist' => 'packages/base/libraries/date/exceptions.php',
	'packages\base\date\date_interface' => 'packages/base/libraries/date/date_interface.php',
	'packages\base\date\gregorian' => 'packages/base/libraries/date/gregorian.php',
	'packages\base\date\hdate' => 'packages/base/libraries/date/hdate.php',
	'packages\base\date\jdate' => 'packages/base/libraries/date/jdate.php',
	'packages\base\date\nocalendarexception' => 'packages/base/libraries/date/exceptions.php',
	'packages\base\date\timezonenotvalid' => 'packages/base/libraries/date/exceptions.php',
	'packages\base\db' => 'packages/base/libraries/db/db.php',
	'packages\base\db\dbobject' => 'packages/base/libraries/db/dbObject.php',
	'packages\base\db\duplicaterecord' => 'packages/base/libraries/db/exceptions.php',
	'packages\base\db\inputdatatype' => 'packages/base/libraries/db/exceptions.php',
	'packages\base\db\inputrequired' => 'packages/base/libraries/db/exceptions.php',
	'packages\base\db\mysqlidb' => 'packages/base/libraries/db/MysqliDb.php',
	'packages\base\event' => 'packages/base/libraries/events/event.php',
	'packages\base\eventinterface' => 'packages/base/libraries/events/EventInterface.php',
	'packages\base\events' => 'packages/base/libraries/events/events.php',
	'packages\base\events\listener' => 'packages/base/libraries/events/exceptions.php',
	'packages\base\events\packageload' => 'packages/base/libraries/events/PackageLoad.php',
	'packages\base\events\packageloaded' => 'packages/base/libraries/events/PackageLoaded.php',
	'packages\base\events\packageregistered' => 'packages/base/libraries/events/PackageRegistered.php',
	'packages\base\exception' => 'packages/base/libraries/utility/exceptions.php',
	'packages\base\frontend\sourceassetexception' => 'packages/base/libraries/frontend/exceptions.php',
	'packages\base\frontend\sourceassetfileexception' => 'packages/base/libraries/frontend/exceptions.php',
	'packages\base\frontend\sourceautoloaderfileexception' => 'packages/base/libraries/frontend/exceptions.php',
	'packages\base\frontend\sourceconfigexception' => 'packages/base/libraries/frontend/exceptions.php',
	'packages\base\frontend\sourceviewexception' => 'packages/base/libraries/frontend/exceptions.php',
	'packages\base\frontend\sourceviewfileexception' => 'packages/base/libraries/frontend/exceptions.php',
	'packages\base\frontend\sourceviewparentexception' => 'packages/base/libraries/frontend/exceptions.php',
	'packages\base\frontend\theme' => 'packages/base/libraries/frontend/theme.php',
	'packages\base\http' => 'packages/base/libraries/http/http.php',
	'packages\base\internalerror' => 'packages/base/libraries/utility/exceptions.php',
	'packages\base\io\bindsocketexception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\io\buffer' => 'packages/base/libraries/io/buffer.php',
	'packages\base\io\createsocketexception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\io\directory' => 'packages/base/libraries/io/directory.php',
	'packages\base\io\directory\ftp' => 'packages/base/libraries/io/directory/ftp.php',
	'packages\base\io\directory\local' => 'packages/base/libraries/io/directory/local.php',
	'packages\base\io\directory\sftp' => 'packages/base/libraries/io/directory/sftp.php',
	'packages\base\io\directory\tmp' => 'packages/base/libraries/io/directory/tmp.php',
	'packages\base\io\exception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\io\file' => 'packages/base/libraries/io/file.php',
	'packages\base\io\file\local' => 'packages/base/libraries/io/file/local.php',
	'packages\base\io\listensocketexception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\io\notfoundexception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\io\rawlistensocketexception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\io\readexception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\io\socket' => 'packages/base/libraries/io/Socket.php',
	'packages\base\io\socketexception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\io\validator\ivalidator' => 'packages/base/libraries/validator/IValidator.php',
	'packages\base\io\writeexception' => 'packages/base/libraries/io/exceptions.php',
	'packages\base\json\jsonexception' => 'packages/base/libraries/json/JsonException.php',
	'packages\base\languagecontainertrait' => 'packages/base/libraries/translator/LanguageContainerTrait.php',
	'packages\base\listenercontainertrait' => 'packages/base/libraries/events/ListenerContainerTrait.php',
	'packages\base\log' => 'packages/base/libraries/logging/Log.php',
	'packages\base\log\instance' => 'packages/base/libraries/logging/instance.php',
	'packages\base\notfound' => 'packages/base/libraries/utility/exceptions.php',
	'packages\base\options' => 'packages/base/libraries/config/options.php',
	'packages\base\package' => 'packages/base/libraries/loader/package.php',
	'packages\base\packageautoloaderfileexception' => 'packages/base/libraries/loader/exceptions.php',
	'packages\base\packageconfigexception' => 'packages/base/libraries/loader/exceptions.php',
	'packages\base\packagenotconfiged' => 'packages/base/libraries/loader/exceptions.php',
	'packages\base\packagepermission' => 'packages/base/libraries/loader/exceptions.php',
	'packages\base\packages' => 'packages/base/libraries/loader/packages.php',
	'packages\base\response' => 'packages/base/libraries/utility/response.php',
	'packages\base\router' => 'packages/base/libraries/router/router.php',
	'packages\base\router\controllerexception' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\domainexception' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\invalidregexexception' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\notfound' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\permissionexception' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\routerruleexception' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\routerrulepart' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\rule' => 'packages/base/libraries/router/rule.php',
	'packages\base\router\rulemiddlewareexception' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\rulepartnameexception' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\rulepartvalue' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\router\schemeexception' => 'packages/base/libraries/router/exceptions.php',
	'packages\base\translator' => 'packages/base/libraries/translator/translator.php',
	'packages\base\translator\invalidjson' => 'packages/base/libraries/translator/exceptions.php',
	'packages\base\translator\invalidlangcode' => 'packages/base/libraries/translator/exceptions.php',
	'packages\base\translator\langalreadyexists' => 'packages/base/libraries/translator/exceptions.php',
	'packages\base\translator\language' => 'packages/base/libraries/translator/language.php',
	'packages\base\translator\phrasealreadyexists' => 'packages/base/libraries/translator/exceptions.php',
);
