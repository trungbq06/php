<?php
defined('_JEXEC') or die('Restricted access');

?>
<?php $rows = $this->schools; ?>
<h2 align="center">Manage School!</h2>
<div id="j-sidebar-container" class="span2">
		new
	</div>
<a href="index.php?option=com_kiddocopyright&amp;view=school&task=add"><img src="components/com_kiddocopyright/image/add-icon.png" alt="Add New"/></a>
<table border="1" cellpadding="0" cellspacing="0">
    <thead>
    <th> <?php echo JText::_("Id") ?></th> 
    <th><?php echo JText::_("Name") ?></th>
    <th><?php echo JText::_("Address") ?></th>
    <th><?php echo JText::_("Phone") ?></th>
    <th><?php echo JText::_("Fax") ?></th>
    <th><?php echo JText::_("Email") ?></th>
    <th><?php echo JText::_("Website") ?></th>
    <th><?php echo JText::_("School Manager") ?></th>
    <th colspan="2"><?php echo JText::_("Action") ?></th>
</thead>
<tbody>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td> <?php echo $row[0]; ?> </td>
            <td> <?php echo $row[1]; ?> </td>
            <td> <?php echo $row[2]; ?> </td>
            <td> <?php echo $row[3]; ?> </td>
            <td> <?php echo $row[4]; ?> </td>
            <td> <?php echo $row[5]; ?> </td>
            <td> <?php echo $row[6]; ?> </td>
            <td> <?php echo $row[7]; ?> </td>
            <td> <a href="index.php?option=com_kiddocopyright&amp;view=school&task=edit&school_id=<?php echo $row[0]; ?>">Edit</a> </td>
            <td> <a href="#">Delete</a> </td>
        </tr>
    <?php } ?>
</tbody>
</table>