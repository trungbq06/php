<?php
	include '../../dtos/clsProducts.php';
	include '../../dtos/clsProductImages.php';
	include '../../dtos/clsDescriptionProd.php';
	
	require '../../model/ProductsModel.php';
	require '../../model/ProductImagesModel.php';
	require '../../model/DescriptionProdModel.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Finish</title>
<style>
.style1 {color: #FF0000}
</style>
</script>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #00CC00}
-->
</style>
</head>
<body>
<div style="text-align:center">
<table width="756" height="818" border="1px solid gray" cellspacing="0px">
	<tr>
		<td>
			<img src="web-design-sthelens-930x300.jpg">
				<?php include 'menutrong.php'?>
		</td>
	</tr>
	<tr>
		<td height="463">
		<b></b>
		<?php
		$tensanpham = $_POST["textfield"];
		$idnhom = $_POST["textfield2"];
		$giathanh = $_POST["textfield22"];
		$infor = $_POST["textfield23"];
		$trangthai = $_POST["textfield24"];
		$hot = $_POST["textfield25"];
		insertProduct($tensanpham, $idnhom, $giathanh, $infor, $trangthai, $hot);
			
		$Icon = $_POST["textfield26"];
		$Full = $_POST["textfield27"];
		insertProductImage($Icon, $Full);
		
		$loaimanhinhdt = $_POST["textfield28"];
		$mayanhdt = $_POST["textfield29"];
		$hedieuhanhdt = $_POST["textfield210"];
		$cpu = $_POST["textfield211"];
		$kichthuocmanhinhdt = $_POST["textfield212"];
		$quayphimdt = $_POST["textfield213"];
		$bonhotrongdt = $_POST["textfield214"];
		$phankhucsanphamdt = $_POST["textfield215"];
		$danhbadt = $_POST["textfield216"];
		$thenhongoaidt = $_POST["textfield217"];
		$gioihancuocgoidt = $_POST["textfield218"];
		$dungluongpndt = $_POST["textfield219"];
		insertProductDetai($loaimanhinhdt, $mayanhdt, $hedieuhanhdt, $cpu, $kichthuocmanhinhdt, $quayphimdt, $bonhotrongdt, $phankhucsanphamdt, $danhbadt, $thenhongoaidt, $gioihancuocgoidt, $dungluongpndt);	
		?>
		<h2 align="center" class="style1" >S&#7843;n ph&#7849;m &#273;&atilde; th&ecirc;m </h2>
		<p align="center"> <table width="902" height="598" border="1" cellspacing="0px">
			<tr>
                <th width="227" rowspan="6" scope="row"><span class="style2">Th&ocirc;ng tin s&#7843;n ph&#7849;m </span></th>
                <th width="280" scope="row">T&ecirc;n s&#7843;n ph&#7849;m </th>
                <td width="398"><label>
                  <?php echo $tensanpham ?>
                </label>
				</td>
			</tr>
			<tr>
                <th scope="row">Id nh&oacute;m s&#7843;n ph&#7849;m </th>
                <td><label>
				<?php echo $idnhom ?>
                </label></td>
			</tr>
			<tr>
                <th scope="row">Gi&aacute; th&agrave;nh </th>
                <td><?php echo $giathanh ?></td>
			</tr>
			<tr>
                <th scope="row">Th&ocirc;ng tin s&#7843;n ph&#7849;m </th>
                <td><?php echo $infor ?></td>
			</tr>
			<tr>
                <th height="25" scope="row">Tr&#7841;ng th&aacute;i(c&oacute;-&gt;nh&#7853;p 1, kh&ocirc;ng-&gt;nh&#7853;p 0) </th>
                <td><?php echo $trangthai ?></td>
			</tr>
			<tr>
                <th scope="row"> Hot(c&oacute;-&gt;nh&#7853;p 1, kh&ocirc;ng-&gt;nh&#7853;p 0)</th>
                <td><?php echo $hot ?></td>
			</tr>
			<tr>
                <th rowspan="2" scope="row"><span class="style6 style2">T&ecirc;n file &#7843;nh </span></th>
                <th scope="row">Icon(file.&#273;u&ocirc;i&#7843;nh)</th>
                <td><?php echo $Icon ?></td>
			</tr>
			<tr>
                <th scope="row">Full(file.&#273;u&ocirc;i&#7843;nh)</th>
                <td><?php echo $Full ?></td>
			</tr>
			<tr>
                <th rowspan="12" scope="row"><span class="style6 style2">Th&ocirc;ng tin chi ti&#7871;t </span></th>
                <th scope="row">Lo&#7841;i m&agrave;n h&igrave;nh </th>
                <td><?php echo $loaimanhinhdt ?></td>
			</tr>
			<tr>
                <th scope="row">M&aacute;y &#7843;nh </th>
                <td><?php echo $mayanhdt ?></td>
			</tr>
			<tr>
                <th scope="row">H&#7879; &#273;i&#7873;u h&agrave;nh </th>
                <td><?php echo $hedieuhanhdt ?></td>
			</tr>
			<tr>
                <th scope="row">Vi x&#7917; l&iacute; CPU </th>
                <td><?php echo $cpu ?></td>
			</tr>
			<tr>
                <th scope="row">K&iacute;ch th&#432;&#7899;c m&agrave;n h&igrave;nh </th>
                <td><?php echo $kichthuocmanhinhdt ?></td>
			</tr>
			<tr>
                <th scope="row">Quay phim </th>
                <td><?php echo $quayphimdt ?></td>
			</tr>
			<tr>
                <th scope="row">B&#7897; nh&#7899; trong </th>
                <td><?php echo $bonhotrongdt ?></td>
			</tr>
			<tr>
                <th scope="row">Ph&acirc;n kh&uacute;c s&#7843;n ph&#7849;m </th>
                <td><?php echo $phankhucsanphamdt ?></td>
			</tr>
			<tr>
                <th scope="row">Danh b&#7841; </th>
                <td><?php echo $danhbadt ?></td>
			</tr>
			<tr>
                <th scope="row">Th&#7867; nh&#7899; ngo&agrave;i </th>
                <td><?php echo $thenhongoaidt ?></td>
			</tr>
			<tr>
                <th scope="row">Gi&#7899;i h&#7841;n cu&#7897;c g&#7885;i </th>
                <td><?php echo $gioihancuocgoidt ?></td>
			</tr>
			<tr>
                <th scope="row">Dung l&#432;&#7907;ng pin </th>
                <td><?php echo $dungluongpndt ?></td>
			</tr>
		</table>
	</p>
	</td>
	</tr>
	<tr>
		<td><div align="center"><b>SmileQuangKK@gmail.com</b></div></td>
	</tr>
</table>
</div>
</body>
</html>
