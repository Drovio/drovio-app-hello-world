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
importer::import("API", "Comm");
importer::import("UI", "Apps");

// Import APP Packages
//#section_end#
//#section#[view]
use \UI\Apps\APPContent;

$appContent = new APPContent($appID);
$appContent->build("", "SecondView", TRUE);

$t = DOM::create("h2", "Second View");
$appContent->append($t);

return $appContent->getReport();
//#section_end#
?>