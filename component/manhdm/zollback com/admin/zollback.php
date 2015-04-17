<?php
defined('_JEXEC') or die('Restricted access');
/**//**//**//**/
//Use class wrapper for preventing conflict with other component; 
class Zvar {
	public static $com_dir;
	public static $css_dir;

	public static $stylesheet_dir;
}

Zvar::$com_dir = "components/com_zollback/css/";
Zvar::$css_dir = JURI::base() . Zvar::$com_dir;
//echo Zvar::$css_dir;
Zvar::$stylesheet_dir = Zvar::$css_dir . 'style.css';

?>

<link rel="stylesheet" type="text/css" href="<?php echo Zvar::$stylesheet_dir ?>">


<?php
/*$db = JFactory::getDbo();
$query = $db->getQuery(true);

$query
	->select("*")
	->from("#__zb_song");
	//->where('catId=9');

$db->setQuery($query);

$rows = $db->loadRowList();

//print_r($rows);*/
?>

<?php 
function _zb_p($status = 0) {
	if($status == 0) {
		return "unpublished";
	}
	return "published";
}
?>




<!-- Controller -->
<?php
// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('Zollback');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
?>
<!-- End -->


