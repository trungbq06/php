<?php

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');

class ManageschoolController extends JControllerLegacy {

    public function ahha() {
        $mainframe = JFactory::getApplication();
        $mainframe->redirect('index.php?option=com_kiddocopyright&view=school');
    }

}
