<div class="footer">
	<div>
		<form action="../controller/ContactController.php" method="post" name="contact" onsubmit="return checkInputContact();">
        <fieldset>
          <legend>Liên Hệ</legend>
          <table>
		  <tr>
				<td>Họ Và Tên:</td>
				<td><input name="name" type="text" id="name" value="" size="40"></td>
		  </tr>
		  <tr>
				<td>Điện Thoại:</td>
				<td><input id="phone" name="phone" type="text" value="" size="40"></td>
          </tr>
		  <tr>
				<td>Email:</td>
				<td><input id="email" name="email" type="text" value="" size="40"></td>
		  </tr>
		  
          <tr>
				<td>Tin Nhắn:</td>
				<td><textarea id="message" name="message" cols="40" rows="4"></textarea></td>
          </tr>
		  <tr>
            <td><input id="resetform" name="resetform" type="reset" value="Xóa"></td>
            <td><input id="submitform" name="commit" type="submit" value="Gửi"></td>
          </tr>
		  </table>
        </fieldset>
      </form>
	  <div>
	  </div>
	</div>
	<div class="left_footer">Học Online 24h</div>
	<div class="center_footer">
		All Rights Reserved 2014<br />
		<img src="images/csscreme.jpg" title="free templates" border="0" /><br />
		<img src="images/payment.gif" alt="" title="" />
	</div>
	<div class="right_footer">THUCHANHTIENGNHAT.COM là sản phẩm độc quyền.</div>   
</div>  
<script>
function checkInputContact(){
	if(document.contact.name.value==""){ 
		alert("Mời Bạn Nhập Họ Tên!");
		document.contact.name.focus();
		return false;
	}
	if(document.contact.phone.value==""){ 
		alert("Mời Bạn Nhập Số Điện Thoại!");
		document.contact.phone.focus();
		return false;
	}
	if(document.contact.message.value==""){ 
		alert("Mời Bạn Nhập Tin Nhắn!");
		document.contact.message.focus();
		return false;
	}
	return true;
}
</script>