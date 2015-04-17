<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Thêm thương hiệu</title>
<style>
.style1 {color: #FF0000}
</style>
<script language="JavaScript" type="text/javascript">     
function check_formGroup()
		{
		tenmenu=document.form1.txtnamegroup.value;		
		if(tenmenu=="")
		{			
			alert ("Chưa nhập tên thương hiệu !"); 
			document.form1.txtnamegroup.focus();
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
    <td>
		<img src="web-design-sthelens-930x300.jpg">
			<?php include 'menutrong.php'?>
		</td>
  </tr>
  
  <tr>
    <td height="463">
		<b></b>
		<h2 align="center" class="style1"><b>Thêm thương hiệu vào Menu</b></h2>
	    <form id="form1" name="form1" method="post" action="GroupFinish.php">
	      <div align="center">
	        <table width="303" border="1">
	          <tr>
	            <td width="104">T&ecirc;n Th&#432;&#417;ng hi&#7879;u </td>
                <td width="183"><label>
                <input type="text" name="txtnamegroup" size="24"/>
                </label></td>
              </tr>
	          <tr>
	            <td colspan="2"><label>
	              <div align="center">
	                <input type="submit" value="Submit" onclick="return check_formGroup();"/>
                  </div>
	            </label></td>
              </tr>
            </table>
          </div>
	    </form>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td><b>SmileQuangKK@gmail.com</b></td>
  </tr>
</table>
</div>
</body>
</html>
