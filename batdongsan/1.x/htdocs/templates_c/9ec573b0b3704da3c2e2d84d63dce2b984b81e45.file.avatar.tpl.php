<?php /* Smarty version Smarty-3.1.18, created on 2015-11-19 02:56:51
         compiled from "/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/avatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1189186433564d3a7372a620-05104302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ec573b0b3704da3c2e2d84d63dce2b984b81e45' => 
    array (
      0 => '/home/tuvanxd/domains/tuvanxaydungtructuyen.vn/public_html/templates/member/avatar.tpl',
      1 => 1407161874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189186433564d3a7372a620-05104302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_564d3a73768ca8_94527460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d3a73768ca8_94527460')) {function content_564d3a73768ca8_94527460($_smarty_tpl) {?><h3 class="pad bg gray mar">Thay đổi avatar đại diện</h3>

<?php if ($_smarty_tpl->tpl_vars['avatar']->value==null) {?>

<div class="pad bor mar">
	<form name="photo" enctype="multipart/form-data" action="" method="post">
		<h3 class="mar-btm">Upload ảnh đại diện</h3>
		<p>Vui lòng chọn ảnh đúng định dạng .gif, .jpg, .jpeg, .png</p>
		<p>Kích thước ảnh không được lớn quá 3Mb, và không được nhỏ hơn 200x200 (pixel)
		<div class="mar-2top">
			Photo <input type="file" name="image" size="30" /> <input type="submit" name="upload" value="Upload" />
		</div>
		<p class="mar-2mid"><b>Lưu ý:</b> Ảnh đại diện phải phù hợp, không được vi phạm các quy định của website. Nếu vi phạm, sẽ có các hình thức xử lý.</p>
	</form>
</div>

<?php } else { ?>

<script type="text/javascript" src="webroot/js/jquery-pack.js"></script>
<script type="text/javascript" src="webroot/js/jquery.imgareaselect.min.js"></script>

<script type="text/javascript">


function preview(img, selection) { 
	var scaleX = 120 / selection.width; 
	var scaleY = 120 / selection.height; 

	var img_w = $('#thumbnail').width();
	var img_h = $('#thumbnail').height();
	
	$('div#get_thumb > img').css({ 
		width: Math.round(scaleX * img_w) + 'px', 
		height: Math.round(scaleY * img_h) + 'px',
		marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px', 
		marginTop: '-' + Math.round(scaleY * selection.y1) + 'px' 
	});
	$('#x1').val(selection.x1);
	$('#y1').val(selection.y1);
	$('#x2').val(selection.x2);
	$('#y2').val(selection.y2);
	$('#w').val(selection.width);
	$('#h').val(selection.height);
} 

$(document).ready(function () { 
	$('#save_thumb').click(function() {
		var x1 = $('#x1').val();
		var y1 = $('#y1').val();
		var x2 = $('#x2').val();
		var y2 = $('#y2').val();
		var w = $('#w').val();
		var h = $('#h').val();
		if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
			alert("You must make a selection first");
			return false;
		}else{
			return true;
		}
	});
}); 

$(window).load(function () { 
	$('#thumbnail').imgAreaSelect({ aspectRatio: '1:1', onSelectChange: preview }); 
});

</script>


<div class="pad">
	<div class="bor pad">
		<h2 class="bor-btm">Tạo ảnh logo</h2>
		<div>
			<div class="wap-x70 bg gray pad bor" align="center">
				<img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" id="thumbnail" alt="Create Thumbnail" />
			</div>
			<div id="get_thumb" class="mar-lft" style="border:1px #e5e5e5 solid; float:left; position:relative; overflow:hidden; width:120px; height:120px;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" style="position: relative;" alt="Thumbnail Preview" />
			</div>
			<br style="clear:both;"/>
			<form name="thumbnail" action="" method="post" class="mar-2top">
				<input type="hidden" name="x1" value="" id="x1" />
				<input type="hidden" name="y1" value="" id="y1" />
				<input type="hidden" name="x2" value="" id="x2" />
				<input type="hidden" name="y2" value="" id="y2" />
				<input type="hidden" name="w" value="" id="w" />
				<input type="hidden" name="h" value="" id="h" />
				<input type="submit" name="upload_thumbnail" value="Save Thumbnail" id="save_thumb" />
			</form>
		</div>
	</div>
</div>

<?php }?><?php }} ?>
