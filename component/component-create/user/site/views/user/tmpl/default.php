<?php
/**
 * @version     1.0.0
 * @package     com_ava
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Quang Nguyen <quangnguyen.nq@gmail.com> - http://facebook.com
 */
// no direct access
defined('_JEXEC') or die;

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_ava', JPATH_ADMINISTRATOR);
$canEdit = JFactory::getUser()->authorise('core.edit', 'com_ava.' . $this->item->id);
if (!$canEdit && JFactory::getUser()->authorise('core.edit.own', 'com_ava' . $this->item->id)) {
	$canEdit = JFactory::getUser()->id == $this->item->created_by;
}
?>
<?php if ($this->item) : ?>

    <div class="item_fields">

        <ul class="fields_list">

            			<li><?php echo JText::_('COM_AVA_FORM_LBL_USER_ID'); ?>:
			<?php echo $this->item->id; ?></li>
			<li><?php echo JText::_('COM_AVA_FORM_LBL_USER_SCHOOL_ID'); ?>:
			<?php echo $this->item->school_id; ?></li>
			<li><?php echo JText::_('COM_AVA_FORM_LBL_USER_NAME'); ?>:
			<?php echo $this->item->name; ?></li>
			<li><?php echo JText::_('COM_AVA_FORM_LBL_USER_PHONE_NUMBER'); ?>:
			<?php echo $this->item->phone_number; ?></li>
			<li><?php echo JText::_('COM_AVA_FORM_LBL_USER_EMAIL'); ?>:
			<?php echo $this->item->email; ?></li>
			<li><?php echo JText::_('COM_AVA_FORM_LBL_USER_ADDRESS'); ?>:
			<?php echo $this->item->address; ?></li>
			<li><?php echo JText::_('COM_AVA_FORM_LBL_USER_JOB'); ?>:
			<?php echo $this->item->job; ?></li>


        </ul>

    </div>
    <?php if($canEdit): ?>
		<a href="<?php echo JRoute::_('index.php?option=com_ava&task=user.edit&id='.$this->item->id); ?>"><?php echo JText::_("COM_AVA_EDIT_ITEM"); ?></a>
	<?php endif; ?>
								<?php if(JFactory::getUser()->authorise('core.delete','com_ava.user.'.$this->item->id)):
								?>
									<a href="javascript:document.getElementById('form-user-delete-<?php echo $this->item->id ?>').submit()"><?php echo JText::_("COM_AVA_DELETE_ITEM"); ?></a>
									<form id="form-user-delete-<?php echo $this->item->id; ?>" style="display:inline" action="<?php echo JRoute::_('index.php?option=com_ava&task=user.remove'); ?>" method="post" class="form-validate" enctype="multipart/form-data">
										<input type="hidden" name="jform[id]" value="<?php echo $this->item->id; ?>" />
										<input type="hidden" name="option" value="com_ava" />
										<input type="hidden" name="task" value="user.remove" />
										<?php echo JHtml::_('form.token'); ?>
									</form>
								<?php
								endif;
							?>
<?php
else:
    echo JText::_('COM_AVA_ITEM_NOT_LOADED');
endif;
?>
