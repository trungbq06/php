<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Thêm dịch vụ</title>
<style>
.style1 {color: #FF0000}
</style>
<script language="JavaScript" type="text/javascript">     
function check_formGroup()
		{
		tenmenu1=document.form1.txtname.value;		
		tenmenu2=document.form1.txtbody.value;		
		if(tenmenu1=="")
		{			
			alert ("Chưa nhập tên dich vụ !"); 
			document.form1.txtname.focus();
			return false;
		}	
		if(tenmenu2=="")
		{			
			alert ("Chưa nhập nội dung !"); 
			document.form1.txtbody.focus();
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
		<h2 align="center" class="style1"><b>Thêm dịch vụ vào danh sách</b></h2>
	    <form id="form1" name="form1" method="post" action="ServiceFinish.php">
	      <div align="center">
	        <table border="1">
	          <tr>
	            <td >Tên Dịch vụ</td>
                <td ><label>
                <input type="text" name="txtname" size="52"/>
				
                </label>
				</td>
              </tr>
	          <tr>
	            <td>Nội dung</td>
                <td ><label>
                <textarea cols="40" rows="5" name="txtbody"></textarea>
                </label>
				</td>
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
