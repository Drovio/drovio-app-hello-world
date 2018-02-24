<?php
//#section#[header]
// Namespace
namespace APP\Main\Ns1;

require_once($_SERVER['DOCUMENT_ROOT'].'/_domainConfig.php');

// Use Important Headers
use \AEL\Platform\classLoader as importer;
use \Exception;

// Check Platform Existance
if (!defined('_RB_PLATFORM_')) throw new Exception("Platform is not defined!");
//#section_end#
//#section#[class]
class obj2
{
	// Constructor Method
	public function __construct()
	{
		// Put your constructor method code here.
	}
}
//#section_end#
?>