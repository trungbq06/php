<?php

/**
 * @version     1.0.0
 * @package     com_ava
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Quang Nguyen <quangnguyen.nq@gmail.com> - http://facebook.com
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Ava helper.
 */
class AvaBackendHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_AVA_TITLE_SCHOOLS'),
			'index.php?option=com_ava&view=schools',
			$vName == 'schools'
		);

    }

    /**
     * Gets a list of the actions that can be performed.
     *
     * @return	JObject
     * @since	1.6
     */
    public static function getActions() {
        $user = JFactory::getUser();
        $result = new JObject;

        $assetName = 'com_ava';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
