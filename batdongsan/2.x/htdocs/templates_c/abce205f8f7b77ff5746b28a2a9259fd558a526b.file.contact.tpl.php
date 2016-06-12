<?php /* Smarty version Smarty-3.1.18, created on 2016-06-12 07:16:34
         compiled from "/home/chungcu2/public_html/templates/home/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197823291575acf5e0fd399-56150006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abce205f8f7b77ff5746b28a2a9259fd558a526b' => 
    array (
      0 => '/home/chungcu2/public_html/templates/home/contact.tpl',
      1 => 1465715792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197823291575acf5e0fd399-56150006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_575acf5e194739_94914334',
  'variables' => 
  array (
    'trans' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575acf5e194739_94914334')) {function content_575acf5e194739_94914334($_smarty_tpl) {?><div class="content" style="padding-left: 0px !important;">
                       
                        <div class="products-box">

                            <div class="post-553 post type-post status-publish format-standard hentry category-uncategorized" id="post-553">
                            <h3><?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_wellcome'];?>
</h3>
                            <div class="entry">
                            	<h5>Công ty CP đầu tư và thương mại Hoàng Vinh</h5>
                                <p>Địa chỉ: Số 207, Tòa nhà C3, Đ.Nguyễn Cơ Thạch, Mỹ Đình 1, Nam Từ Liêm, TP.Hà Nội</p>
                                <p>Điện thoại: 0978 205 104</p>
                                <p>Email: chungcuviet247@gmail.com</p>
<br />
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
