<?php
/**
 * @version     1.0.0
 * @package     com_ava
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Quang Nguyen <quangnguyen.nq@gmail.com> - http://facebook.com
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Users list controller class.
 */
class AvaControllerUsers extends AvaController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Users', $prefix = 'AvaModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}