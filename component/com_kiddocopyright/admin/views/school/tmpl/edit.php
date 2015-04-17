<?php
defined('_JEXEC') or die('Restricted access');
?>
<?php $rows = $this->school; ?>
<h2 align="center">Manage School!</h2>
<div style="padding-left: 30%;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 515px; float: center;">
        <caption>Edit School</caption>
        <?php foreach ($rows as $r) { ?>
            <form action="" method="POST">

                <input type="hidden" name="school_id" value="<?php echo $r[0]; ?>">
                <tr>
                    <td>Name</th> 
                    <td><input type="text" name="nameSchool" value="<?php echo $r[1]; ?>" class="inputaddschool" /></td>
                </tr>
                <tr>
                    <td>Address</th> 
                    <td><input type="text" name="address" value="<?php echo $r[2]; ?>" class="inputaddschool" /></td>
                </tr>
                <tr>
                    <td>Phone</th> 
                    <td><input type="text" name="phone" value="<?php echo $r[3]; ?>" class="inputaddschool" /></td>
                </tr>
                <tr>
                    <td>Fax</th> 
                    <td><input type="text" name="fax" value="<?php echo $r[4]; ?>" class="inputaddschool" /></td>
                </tr>
                <tr>
                    <td>Email</th> 
                    <td><input type="text" name="email" value="<?php echo $r[5]; ?>" class="inputaddschool" /></td>
                </tr>
                <tr>
                    <td>Website</th> 
                    <td><input type="text" name="website" value="<?php echo $r[6]; ?>" class="inputaddschool" /></td>
                </tr>
                <tr>
                    <td>School Manager</th> 
                    <td><input type="text" name="schoolManage" value="<?php echo $r[7]; ?>" class="inputaddschool" /></td>
                </tr>
                <tr>
                    <td></td> 
                    <td><input type="reset" value=" Update " /></td>
                </tr>

            </form>
        <?php } ?>
    </table>
</div>
<a href="index.php?option=com_kiddocopyright&view=school">Back</a>