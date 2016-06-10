<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:20:38
         compiled from "C:\xampp\htdocs\templates\elements\sidebar-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32245746f826bdcf54-94202135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc50a985f64f7a20d421a5bf191ddb120dab75b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\sidebar-content.tpl',
      1 => 1444905918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32245746f826bdcf54-94202135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_news' => 0,
    'list' => 0,
    'article' => 0,
    'trans' => 0,
    'gallery_p4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746f826c50040_36263022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f826c50040_36263022')) {function content_5746f826c50040_36263022($_smarty_tpl) {?>
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                     <div class="news box desktop">
                        <h3><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 <i class="glyphicon glyphicon-plus pull-right"></i></h3>
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                            <li>
                                <p class="tit"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</a></p>
                                <div class="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['img'];?>
"></a>
                                    <span><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</span>
                                </div>
                            </li>
                         <?php } ?>
                         </ul>
                      </div>
                      <?php } ?>

          <div class="box-sidebar sidebar-desktop">
                       <div class="full-content support-online">
                          <h3 style="background:#0094da; color: white; font-weight: 700; padding: 0px 0px 3px 5px;"> 
                             <!-- <p class="face-icon"></p>
                             <p class="tw-icon"></p>
                             <p class="googlePlus-icon"></p>
                             <p class="in-icon"></p>
                             <p class="youtube-icon"></p> -->
                             Hỗ trợ trực tuyến
                          </h3>
                          <div class="hotline">
                             <span class="hotlinename">Liên hệ</span> 
                             <span class="hotlinenumber">Để được tư vấn</span>
                          </div>
                          <ul class="link-support">
                            
                             <li class="boss">
                                <h3><i class="telephone ">BIDTRACO@gmail.com</i></h3> <!--homephone-->
                             </li>
                            
                             <li class="area">
                                <p class="tit"><a href="">hotline</a></p>
                                <p class="phone"><i class="usephone"></i>0917.291.339<span></span></p>
                                
                             </li>
                             
                          </ul>
                        
                       </div>
                    </div>

                    <div class="support box full-content sidebar-desktop">
                    <form method="post" action="./contact" id="FrmValidate" name="FrmValidate" class="frm_contact mar-2top">
                        <h3>Yêu cầu tư vấn</h3>
                        <ul>
                            <li>
                                <p>Họ tên (*)</p>
                                <input type="text" name="name" class="required form-control" minlength="5">
                            </li>
                            <li>
                                <p>Email (*)</p>
                                <input type="text" name="email" class="fnt-x250 email required form-control">
                            </li>
                            <li>
                                <p>Điện thoại (*)</p>
                                <input type="text" name="phone" class="fnt-x250 number form-control" minlength="10">
                            </li>
                            <li>
                                <p>Địa chỉ (*)</p>
                                <input type="text" name="address" class="fnt-x250 required form-control">
                            </li>
                            <li>
                                <p>Nội dung (*)</p>
                                <textarea name="content"  class="fnt-x360  required " minlength="40" maxlength="255" style="width: 100%; min-height: 100px;"></textarea>
                            </li>
                            <li style="display: block; margin: 10px 0px; float: left; width: 100%; clear: both;">
                                <p>Mã Bảo Mật (*)</p>
                                <div class="lf" style="float: left;"><img src="?mod=helps&site=captcha"></div>
                                <input type="text" name="captcha" minlength="6" class="fnt-x90 required number form-control" style="width: 150px; float: left; margin-left: 10px;">
                            </li>
                            <li>
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['contact_send'];?>
" name="FrmSubmit" class="contact btn btn-danger">
                                
                            </li>
                        </ul>
                    </form>
                    </div>
                    <div class="full-content advertisement">
                    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_p4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
" style="border:1px solid #ccc;float: left"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['img'];?>
" width="283"></a>
                    <?php } ?>
                    </div><?php }} ?>
