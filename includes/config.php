<?php
ob_start("ob_gzhandler");
?>
<?php
$iniConfig = parse_ini_file('config.ini', true);

//SET UP GENERAL SITE DETAILS
define('ROOT', $iniConfig['SiteData']['domain']);
define('SITE_NAME', $iniConfig['SiteData'] ['title']);
define('KEYWORDS', $iniConfig['SiteData'] ['keywords']);
define('DESCRIPTION', $iniConfig['SiteData'] ['description']);
define('NAME', $iniConfig['SiteData'] ['name']);
define('PHONE', $iniConfig['SiteData'] ['phone']);
define('STRASSE', $iniConfig['SiteData'] ['strasse']);
define('ORT', $iniConfig['SiteData'] ['ort']);
define('PLZ', $iniConfig['SiteData'] ['plz']);
define('EMAIL', $iniConfig['SiteData'] ['email']);

//SET UP SITE PATHS (STYLESHEETS ETC)
define('STYLESHEETS', ROOT.$iniConfig['Paths'] ['stylesheets']);
define('IMAGES', ROOT.$iniConfig['Paths'] ['images']);
define('JAVASCRIPT', ROOT.$iniConfig['Paths'] ['javascript']);
?>

