
<div class="bor pad">
	<div class="wap-x50">

		<div class="mar-top mar-2rgt" id="contact">
			 <h1 class="bor-btm">{$trans.contact_wellcome}</h1>
		     <p class="mar-sbtm">Vui lòng gửi mail liên hệ với chúng tôi, Chúng tôi sẽ phản hồi về những yêu cầu của Quý khách.</p>
		     <p>Cảm ơn quý khách đã quan tâm, tín nhiệm sử dụng Dịch vụ của  chúng tôi!</p>
		     <form method="post" action="" id="FrmValidate" class="frm_contact mar-2top">
		    	<table class="table mar-btm tableFrm">
		    		<tr>
		    			<td width="120">{$trans.contact_name} <span class="color-red">(*)</span></td>
		    			<td><input type="text" name="name" class="fnt-x250  required" minlength="5"></td>
		    		</tr>
		    		<tr>
		    			<td>{$trans.contact_phone} </td>
		    			<td><input type="text" name="phone" class="fnt-x250 number" minlength="10"></td>
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
		    		<!--
		    		<tr>
		    			<td>{$trans.contact_title} <span class="color-red">(*)</span></td>
		    			<td><input type="text" name="title" class="fnt-x250  required" minlength="15"></td>
		    		</tr>
		    		-->
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
		    </form>
		</div>

	</div>
	<div class="wap-x50">
	
		<div class="mar-2rgt mar-2btm">
			{$info.contact}
		</div>
	
		<div id="map_canvas" style="width:100%; height:460px;" class=""></div><br/>
		<div style="display: none;">
			<label>latitude: </label><input id="txtPositionY" type="text"/><br/>
			<label>longitude: </label><input id="txtPositionX" type="text"/>
		</div>
	</div>
	
	<div class="clear"></div>
</div>

