<?php
defined('_JEXEC') or die('Restricted access');
?>
<h2 align="center">Manage School!</h2>
<div style="padding-left: 30%;">
    <table border="0" cellpadding="0" cellspacing="0" style="width: 515px; float: center;">
        <caption>Add School</caption>
        <form action="index.php?option=com_kiddocopyright&view=school&task=btnAdd" method="POST">
            <tr>
                <td>Name</th> 
                <td><input type="text" name="nameSchool" class="inputaddschool" /></td>
            </tr>
            <tr>
                <td>Address</th> 
                <td><input type="text" name="address" class="inputaddschool" /></td>
            </tr>
            <tr>
                <td>Phone</th> 
                <td><input type="text" name="phone" class="inputaddschool" /></td>
            </tr>
            <tr>
                <td>Fax</th> 
                <td><input type="text" name="fax" class="inputaddschool" /></td>
            </tr>
            <tr>
                <td>Email</th> 
                <td><input type="text" name="email" class="inputaddschool" /></td>
            </tr>
            <tr>
                <td>Website</th> 
                <td><input type="text" name="website" class="inputaddschool" /></td>
            </tr>
            <tr>
                <td>School Manager</th> 
                <td><input type="text" name="schoolManage" class="inputaddschool" /></td>
            </tr>
            <tr>
                <td></th> 
                <td><input type="submit" value=" Add " /></td>
            </tr>
        </form>
    </table>
</div>
<a href="index.php?option=com_kiddocopyright&view=school">Back</a>