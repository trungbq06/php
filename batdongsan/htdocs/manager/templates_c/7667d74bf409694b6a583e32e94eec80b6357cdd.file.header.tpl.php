<?php /* Smarty version Smarty-3.1.18, created on 2015-04-16 07:22:09
         compiled from "E:\VertrigoServ\www\DAISAN\daisan\manager\templates\elements\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31313552f63211bffe6-67820021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7667d74bf409694b6a583e32e94eec80b6357cdd' => 
    array (
      0 => 'E:\\VertrigoServ\\www\\DAISAN\\daisan\\manager\\templates\\elements\\header.tpl',
      1 => 1413993460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31313552f63211bffe6-67820021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'admin_language' => 0,
    'gen_lang' => 0,
    'k' => 0,
    'list' => 0,
    'account' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_552f6321296c02_70379247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f6321296c02_70379247')) {function content_552f6321296c02_70379247($_smarty_tpl) {?><div class="navbar-inner">
    <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
"> <img alt="Charisma Logo" src="webroots/img/logo20.png" /> <span>Administrator</span></a>
        
        <!-- theme selector starts -->
        <div class="btn-group pull-right theme-container" >
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-tint"></i><span class="hidden-phone"> Change languages</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-user" id="languages">
                <li <?php if ($_smarty_tpl->tpl_vars['admin_language']->value==0) {?>class="active"<?php }?>><a data-value="0" href="#"><i class="icon-blank"></i> Default</a></li>
            	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gen_lang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['admin_language']->value==$_smarty_tpl->tpl_vars['k']->value) {?>class="active"<?php }?>><a data-value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" href="#"><i class="icon-blank"></i> <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a></li>
                <?php } ?>
            </ul>
        </div>
        <!-- theme selector ends -->
        
        <!-- user dropdown starts -->
        <div class="btn-group pull-right" >
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user"></i><span class="hidden-phone"> <?php echo $_smarty_tpl->tpl_vars['account']->value['name'];?>
</span>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-user">
                <li><a href="?mod=user&site=edit">Change Profile</a></li>
                <li><a href="?mod=user&site=password">Change password</a></li>
                <li class="divider"></li>
                <li><a href="?mod=user&site=logout">Logout</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->
        
        <div class="top-nav nav-collapse">
            <ul class="nav">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" target="_blank">Visit Site</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query span2" name="query" type="text">
                    </form>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<?php }} ?>
