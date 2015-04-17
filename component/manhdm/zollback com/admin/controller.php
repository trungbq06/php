<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
/**
 * Zollback Component Controller
 */
class ZollbackController extends JControllerLegacy
{
	public function ahha() {
		$mainframe = JFactory::getApplication();
		$mainframe->redirect('index.php?option=com_zollback&view=song');
	}
}