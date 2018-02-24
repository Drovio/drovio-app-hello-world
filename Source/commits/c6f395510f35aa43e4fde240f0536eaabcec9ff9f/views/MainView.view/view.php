<?php
//#section#[header]
// Use Important Headers
use \API\Platform\importer;
use \Exception;

// Check Platform Existance
if (!defined('_RB_PLATFORM_')) throw new Exception("Platform is not defined!");

// Import DOM, HTML
importer::import("UI", "Html", "DOM");
importer::import("UI", "Html", "HTML");

use \UI\Html\DOM;
use \UI\Html\HTML;

// Import application for initialization
importer::import("AEL", "Platform", "application");
use \AEL\Platform\application;

// Increase application's view loading depth
application::incLoadingDepth();

// Set Application ID
$appID = 35;

// Init Application and Application literal
application::init(35);
// Secure Importer
importer::secure(TRUE);

// Import SDK Packages
importer::import("UI", "Apps");
importer::import("UI", "Html");

// Import APP Packages
application::import("Main");
//#section_end#
//#section#[view]
use \UI\Apps\APPContent;
use \APP\Main\obj1;

$appContent = new APPContent($appID);
$appContent->build("", "myApp", TRUE);

$t = DOM::create("h3", "Test Application", "", "app_header");
$appContent->append($t);

$c = application::loadView("SecondView");
$appContent->append($c);

$t = DOM::create("h4", obj1::test(), "", "app_header");
$appContent->append($t);

return $appContent->getReport();
//#section_end#
?>