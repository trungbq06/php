<div class="mar bor shadow pad-big" id="contact">
	<h1 class="bor-btm">Liên hệ</h1>
	<div class="content">{$p_content}</div>

	<h3 class="mar-3top bor-btm">Gửi liên hệ</h3>
     <p class="mar-sbtm">Vui lòng gửi thông tin liên hệ với chúng tôi, Chúng tôi sẽ phản hồi về những yêu cầu của Quý khách.</p>
     <p>Cảm ơn quý khách đã quan tâm, tín nhiệm sử dụng Dịch vụ của chúng tôi!</p>
     <form method="post" action="" id="FrmValidate" class="frm_contact mar-2top">
    	<table class="table mar-btm tableFrm">
    		<tr>
    			<td width="120">{$trans.contact_name} <span class="color-red">(*)</span></td>
    			<td><input type="text" name="name" class="fnt-x250  required" minlength="5"></td>
    		</tr>
    		<tr>
    			<td>{$trans.contact_phone} </td>
    			<td><input type="text" name="phone" class="fnt-x250" minlength="10"></td>
    		</tr>
    		<!--  
    		<tr>
    			<td>{$trans.contact_company}</td>
    			<td><input type="text" name="address" class="fnt-x250 "></td>
    		</tr>
    		-->
    		<tr>
    			<td>{$trans.contact_email} <span class="color-red">(*)</span></td>
    			<td><input type="text" name="email" class="fnt-x250 email required"></td>
    		</tr>
    		<tr>
    			<td>Tiêu đề <span class="color-red">(*)</span></td>
    			<td><input type="text" name="title" class="fnt-x250  required" minlength="15"></td>
    		</tr>
    		<tr>
    			<td>{$trans.contact_content} <span class="color-red">(*)</span></td>
    			<td><textarea name="content"  class="fnt-x360  required" minlength="40" maxlength="255"></textarea></td>
    		</tr>
    		<tr>
    			<td class="bold">&nbsp</td>
    			<td><div class="lf"><img src="?mod=helps&site=captcha"></div><input type="text" name="captcha" minlength="6" class="fnt-x90 required number"></td>
    		</tr>
    		<tr>
    			<td>&nbsp</td>
    			<td><input type="submit" value="{$trans.contact_send}" name="FrmSubmit" class="contact"></td>
    		</tr>
    	</table>


</div>
