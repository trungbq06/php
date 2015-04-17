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
?>
<script type="text/javascript">
    function deleteItem(item_id){
        if(confirm("<?php echo JText::_('COM_AVA_DELETE_MESSAGE'); ?>")){
            document.getElementById('form-user-delete-' + item_id).submit();
        }
    }
</script>

<div class="items">
    <ul class="items_list">
<?php $show = false; ?>
        <?php foreach ($this->items as $item) : ?>

            
				<?php
						$show = true;
						?>
							<li>
								<a href="<?php echo JRoute::_('index.php?option=com_ava&view=user&id=' . (int)$item->id); ?>"><?php echo $item->name; ?></a>
								<?php
									if(JFactory::getUser()->authorise('core.delete','com_ava.user.'.$item->id)):
									?>
										<a href="javascript:deleteItem(<?php echo $item->id; ?>);"><?php echo JText::_("COM_AVA_DELETE_ITEM"); ?></a>
										<form id="form-user-delete-<?php echo $item->id; ?>" style="display:inline" action="<?php echo JRoute::_('index.php?option=com_ava&task=user.remove'); ?>" method="post" class="form-validate" enctype="multipart/form-data">
											<input type="hidden" name="jform[id]" value="<?php echo $item->id; ?>" />
											<input type="hidden" name="option" value="com_ava" />
											<input type="hidden" name="task" value="user.remove" />
											<?php echo JHtml::_('form.token'); ?>
										</form>
									<?php
									endif;
								?>
							</li>

<?php endforeach; ?>
        <?php
        if (!$show):
            echo JText::_('COM_AVA_NO_ITEMS');
        endif;
        ?>
    </ul>
</div>
<?php if ($show): ?>
    <div class="pagination">
        <p class="counter">
            <?php echo $this->pagination->getPagesCounter(); ?>
        </p>
        <?php echo $this->pagination->getPagesLinks(); ?>
    </div>
<?php endif; ?>


									<?php if(JFactory::getUser()->authorise('core.create','com_ava')): ?><a href="<?php echo JRoute::_('index.php?option=com_ava&task=user.edit&id=0'); ?>"><?php echo JText::_("COM_AVA_ADD_ITEM"); ?></a>
	<?php endif; ?>