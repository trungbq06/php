<?php /* Smarty version Smarty-3.1.18, created on 2015-11-24 15:17:52
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/home/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75078480356547fa073aab6-85608638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f79eb1c2ea6c7c9579c25f35b051e31b8c8ac67e' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/home/contact.tpl',
      1 => 1444729768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75078480356547fa073aab6-85608638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56547fa0847200_15833151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56547fa0847200_15833151')) {function content_56547fa0847200_15833151($_smarty_tpl) {?>
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
