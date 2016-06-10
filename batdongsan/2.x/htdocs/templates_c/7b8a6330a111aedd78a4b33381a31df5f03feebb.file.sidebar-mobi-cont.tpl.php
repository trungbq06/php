<?php /* Smarty version Smarty-3.1.18, created on 2016-05-26 15:20:39
         compiled from "C:\xampp\htdocs\templates\elements\sidebar-mobi-cont.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223175746f82722dfa8-86038850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b8a6330a111aedd78a4b33381a31df5f03feebb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\elements\\sidebar-mobi-cont.tpl',
      1 => 1444979143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223175746f82722dfa8-86038850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'trans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5746f827297255_27445181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746f827297255_27445181')) {function content_5746f827297255_27445181($_smarty_tpl) {?><div class="row col-default sidebar-mobile-cont">
            <div class="container">
                <div class="box-sidebar">
                       <div class="full-content support-online">
                          <h3 style="background:#0094da; color: white; font-weight: 700; padding: 0px 0px 3px 5px;">
                            Hỗ trợ trực tuyến
                             <!-- <p class="face-icon"></p>
                             <p class="tw-icon"></p>
                             <p class="googlePlus-icon"></p>
                             <p class="in-icon"></p>
                             <p class="youtube-icon"></p> -->
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
                                <p class="tit"><a href="">Hotline</a></p>
                                <p class="phone"><i class="usephone"></i><?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
<span> </span></p>
                                
                             </li>
                            
                          </ul>
                        
                       </div>
                    </div>

                    <div class="support box full-content">
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
            </div>
        </div><?php }} ?>
