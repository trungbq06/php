<?php
	include '../../dtos/clsGroupProducts.php';
	require '../../model/GroupProductsModel.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Thêm sản phẩm</title>
<style>
.style1 {color: #FF0000}
</style>
<script language="JavaScript" type="text/javascript">     
function check_formProduct()
		{	
		if(document.form1.textfield.value=="")
		{			
			alert ("Nhập tên sản phẩm !"); 
			document.form1.textfield.focus();
			return false;
		}		
		if(document.form1.textfield2.value=="")
		{			
			alert ("Nhập Id nhóm sản phẩm !"); 
			document.form1.textfield2.focus();
			return false;
		}
		if(isNaN(document.form1.textfield2.value))
		{			
			alert ("Nhập Id nhóm sản phẩm bằng số!"); 
			document.form1.textfield2.focus();
			return false;
		}
		if(document.form1.textfield22.value=="")
		{			
			alert ("Nhập giá thành !"); 
			document.form1.textfield22.focus();
			return false;
		}		
		if(isNaN(document.form1.textfield22.value))
		{			
			alert ("Nhập giá thành bằng số!"); 
			document.form1.textfield22.focus();
			return false;
		}		
		if(document.form1.textfield23.value=="")
		{			
			alert ("Nhập thông tin sản phẩm !"); 
			document.form1.textfield23.focus();
			return false;
		}		
		if(document.form1.textfield24.value=="")
		{			
			alert ("Nhập trạng thái !"); 
			document.form1.textfield24.focus();
			return false;
		}		
		if(isNaN(document.form1.textfield24.value))
		{			
			alert ("Nhập trạng thái bằng 1 hoặc 0 !"); 
			document.form1.textfield24.focus();
			return false;
		}		
		if(document.form1.textfield25.value=="")
		{			
			alert ("Nhập Hot !"); 
			document.form1.textfield25.focus();
			return false;
		}		
		if(isNaN(document.form1.textfield25.value))
		{			
			alert ("Nhập Hot bằng 1 hoặc 0 !"); 
			document.form1.textfield25.focus();
			return false;
		}	
		
		if(document.form1.textfield28.value=="")
		{			
			alert ("Nhập loại màn hình !"); 
			document.form1.textfield28.focus();
			return false;
		}		
		if(document.form1.textfield29.value=="")
		{			
			alert ("Nhập máy ảnh !"); 
			document.form1.textfield29.focus();
			return false;
		}		
		
		if(document.form1.textfield210.value=="")
		{			
			alert ("Nhập hệ điều hành !"); 
			document.form1.textfield210.focus();
			return false;
		}		
		
		if(document.form1.textfield211.value=="")
		{			
			alert ("Nhập vi xử lí CPU !"); 
			document.form1.textfield211.focus();
			return false;
		}		
		
		if(document.form1.textfield212.value=="")
		{			
			alert ("Nhập kcihs thước màn hình !"); 
			document.form1.textfield212.focus();
			return false;
		}		
		
		if(document.form1.textfield213.value=="")
		{			
			alert ("Nhập quay phim !"); 
			document.form1.textfield213.focus();
			return false;
		}		
		
		if(document.form1.textfield214.value=="")
		{			
			alert ("Nhập bộ nhớ trong !"); 
			document.form1.textfield214.focus();
			return false;
		}		
		
		if(document.form1.textfield215.value=="")
		{			
			alert ("Nhập phân khúc sản phẩm !"); 
			document.form1.textfield215.focus();
			return false;
		}		
		
		if(document.form1.textfield216.value=="")
		{			
			alert ("Nhập danh bạ !"); 
			document.form1.textfield216.focus();
			return false;
		}		
		
		if(document.form1.textfield217.value=="")
		{			
			alert ("Nhập thẻ nhớ ngoài !"); 
			document.form1.textfield217.focus();
			return false;
		}	

		if(document.form1.textfield218.value=="")
		{			
			alert ("Nhập giới hạn cuộc gọi !"); 
			document.form1.textfield218.focus();
			return false;
		}	

		if(document.form1.textfield219.value=="")
		{			
			alert ("Nhập dung lượng pin !"); 
			document.form1.textfield219.focus();
			return false;
		}			
		document.form1.submit();
}
</script>

</head>
<body>
<div style="text-align:center">
<table width="756" height="818" border="1px solid gray" cellspacing="0px">
  <tr>
    <td width="1074">
		<div align="center"><img src="web-design-sthelens-930x300.jpg">
			<?php include 'menutrong.php'?>
		</div></td>
  </tr>
  
  <tr>
    <td height="463">
	    <div align="center"><b></b> </div>
	    <h2 align="center" class="style1">Danh s&aacute;ch c&aacute;c nh&oacute;m s&#7843;n ph&#7849;m</h2>
		
	    <div align="center">
	      <table width="246" border="1" cellspacing="0px">
            <tr>
              <th width="40" scope="row">Id</th>
              <th width="190"><div align="center">T&ecirc;n Nh&oacute;m </div></th>
            </tr>
			<?php
			$group=getGroupProducts();
			foreach($group as $item)
			{
			?>
            <tr>
              <th scope="row"><?php echo $item->Id ?></th>
              <td><?php echo $item->Name ?></td>
            </tr>
			<?php
			}
			?>
          </table>
	    </div>
	    <p align="center">&nbsp; </p>
		<h2 align="center" class="style1"><b>Thêm sản phẩm</b></h2>
		<form id="form1" name="form1" method="post" action="ProductFinish.php">
	      
          <div align="center">
            <table width="902" height="598" border="1" cellspacing="0px">
              <tr>
                <th width="227" rowspan="6" scope="row"><span>Th&ocirc;ng tin s&#7843;n ph&#7849;m </span></th>
                <th width="280" scope="row">T&ecirc;n s&#7843;n ph&#7849;m </th>
                <td width="398"><label>
                  <input type="text" name="textfield" size=63/>
                </label></td>
              </tr>
              <tr>
                <th scope="row">Id nh&oacute;m s&#7843;n ph&#7849;m </th>
                <td><label>
                  <input type="text" name="textfield2" size=63/>
                </label></td>
              </tr>
              <tr>
                <th scope="row">Gi&aacute; th&agrave;nh </th>
                <td><input type="text" name="textfield22" size=63/></td>
              </tr>
              <tr>
                <th scope="row">Th&ocirc;ng tin s&#7843;n ph&#7849;m </th>
                <td><input type="text" name="textfield23" size=63/></td>
              </tr>
              <tr>
                <th height="25" scope="row">Tr&#7841;ng th&aacute;i(c&oacute;-&gt;nh&#7853;p 1, kh&ocirc;ng-&gt;nh&#7853;p 0) </th>
                <td><input type="text" name="textfield24" size=63/></td>
              </tr>
              <tr>
                <th scope="row"> Hot(c&oacute;-&gt;nh&#7853;p 1, kh&ocirc;ng-&gt;nh&#7853;p 0)</th>
                <td><input type="text" name="textfield25" size=63/></td>
              </tr>
              <tr>
                <th rowspan="2" scope="row"><span class="style6">T&ecirc;n file &#7843;nh </span></th>
                <th scope="row">Icon(file.đuôiảnh)(83x83)</th>
                <td><input type="file" name="textfield26" size=63/></td>
              </tr>
              <tr>
                <th scope="row">Full(file.đuôiảnh)(516x500)</th>
                <td><input type="file" name="textfield27" size=63/></td>
              </tr>
              <tr>
                <th rowspan="12" scope="row"><span class="style6">Th&ocirc;ng tin chi ti&#7871;t </span></th>
                <th scope="row">Lo&#7841;i m&agrave;n h&igrave;nh </th>
                <td><input type="text" name="textfield28" size=63/></td>
              </tr>
              <tr>
                <th scope="row">M&aacute;y &#7843;nh </th>
                <td><input type="text" name="textfield29"size=63 /></td>
              </tr>
              <tr>
                <th scope="row">H&#7879; &#273;i&#7873;u h&agrave;nh </th>
                <td><input type="text" name="textfield210"size=63 /></td>
              </tr>
              <tr>
                <th scope="row">Vi x&#7917; l&iacute; CPU </th>
                <td><input type="text" name="textfield211"size=63 /></td>
              </tr>
              <tr>
                <th scope="row">K&iacute;ch th&#432;&#7899;c m&agrave;n h&igrave;nh </th>
                <td><input type="text" name="textfield212" size=63/></td>
              </tr>
              <tr>
                <th scope="row">Quay phim </th>
                <td><input type="text" name="textfield213" size=63/></td>
              </tr>
              <tr>
                <th scope="row">B&#7897; nh&#7899; trong </th>
                <td><input type="text" name="textfield214" size=63/></td>
              </tr>
              <tr>
                <th scope="row">Ph&acirc;n kh&uacute;c s&#7843;n ph&#7849;m </th>
                <td><input type="text" name="textfield215"size=63 /></td>
              </tr>
              <tr>
                <th scope="row">Danh b&#7841; </th>
                <td><input type="text" name="textfield216" size=63/></td>
              </tr>
              <tr>
                <th scope="row">Th&#7867; nh&#7899; ngo&agrave;i </th>
                <td><input type="text" name="textfield217" size=63/></td>
              </tr>
              <tr>
                <th scope="row">Gi&#7899;i h&#7841;n cu&#7897;c g&#7885;i </th>
                <td><input type="text" name="textfield218" size=63/></td>
              </tr>
              <tr>
                <th scope="row">Dung l&#432;&#7907;ng pin </th>
                <td><input type="text" name="textfield219" size=63/></td>
              </tr>
                                    </table>
            <p>
              <label>
              <input type="submit" name="Submit" value="Submit" onclick="return check_formProduct();"/>
              </label>
            </p>
          </div>
		</form>
      <p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td><div align="center"><b>SmileQuangKK@gmail.com</b></div></td>
  </tr>
</table>
</div>
</body>
</html>
