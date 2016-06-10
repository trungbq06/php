<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 16:42:57
         compiled from "C:\xampp\htdocs\templates\home\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1379557470b7194b1e7-12784115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4299137440c698ce03ed1c716f1bf199ee598bb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\home\\contact.tpl',
      1 => 1444729768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1379557470b7194b1e7-12784115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57470b719d6183_92449158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57470b719d6183_92449158')) {function content_57470b719d6183_92449158($_smarty_tpl) {?>
<div class="content" style="padding-left: 0px !important;">
                       
                        <div class="products-box">

                            <div class="post-553 post type-post status-publish format-standard hentry category-uncategorized" id="post-553">
                            <h3><?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_wellcome'];?>
</h3>
                            <div class="entry">
                            	<h5>Công ty CP tư vấn xây dựng và Thương mại Vitraco Việt Nam</h5>
                                <p>Địa chỉ: Phường Phú Đô - Quận Nam Từ Liêm - Thành phố Hà nội</p>
                                <p>Điện thoại: 0917291339</p>
                                <p>Mobile: 01686.934.289 – 0938.179.588</p>
                                <p>Email: BIDTRACO@GMAIL.COM</p>

                                <form>
                                	
                                </form>

						<form method="post" action="" id="FrmValidate" class="frm_contact mar-2top">
								    	<table class="table mar-btm tableFrm">
								    		<tr>
								    			<td width="120"><?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_name'];?>
 <span class="color-red">(*)</span></td>
								    			<td><input type="text" name="name" class="required form-control" minlength="5"></td>
								    		</tr>
								    		<tr>
								    			<td><?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_phone'];?>
 </td>
								    			<td><input type="text" name="phone" class="fnt-x250 number form-control" minlength="10"></td>
								    		</tr>
								    		
								    		<tr>
								    			<td><?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_email'];?>
 <span class="color-red">(*)</span></td>
								    			<td><input type="text" name="email" class="fnt-x250 email required form-control"></td>
								    		</tr>

								    		<tr>
								    			<td><?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_address'];?>
 <span class="color-red">(*)</span></td>
								    			<td><input type="text" name="address" class="fnt-x250 required form-control"></td>
								    		</tr>
								    		
								    		<tr>
								    			<td><?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_content'];?>
 <span class="color-red">(*)</span></td>
								    			<td><textarea name="content"  class="fnt-x360  required " minlength="40" maxlength="255" style="width: 100%; min-height: 100px;"></textarea></td>
								    		</tr>
								    		<tr>
								    			<td>
								    				<td>
								    					<div class="lf"><img src="?mod=helps&site=captcha"></div>
								    					<input type="text" name="captcha" minlength="6" class="fnt-x90 required number">
								    				</td>
								    			</td>
								    		</tr>
								    		<tr>
								    			<td>&nbsp</td>
								    			<td><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_send'];?>
" name="FrmSubmit" class="contact"></td>
								    		</tr>
								    	</table>
								    </form>
                            </div>
                        </div>
                            
                        </div>
                    </div><!--end .content-->
                   
<?php }} ?>
