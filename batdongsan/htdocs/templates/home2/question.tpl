<h1 class="title"><b>Ý kiến khách hàng</b></h1>
<div class="bor pad">

	<div class="">
		<div class="wap-x65">
			<p class="pad-mid align-rgt">
				<a href="javascript:void(0)" class="question_add">Gửi ý kiến của bạn</a>
			</p>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="wap-x65">
		
		<div class="question" id="question_form">
			<form action="" id="FrmSubmit" method="post">
				<table class="table">
					<tr>
						<td><b>Tên của bạn</b></td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td><b>Nội dung</b></td>
						<td><textarea rows="" cols="" name="content"></textarea></td>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td><input type="submit" name="FrmSubmit" value="Gửi ý kiến"></td>
					</tr>
				</table>
				
			</form>
		</div>
	
		{foreach from=$result key=k item=list}
		<div class="question">
			<h3>{$list.title}</h3>
			<div class="answer">{$list.answer}</div>
		</div>
		{/foreach}
		<div class="paging">{$paging}</div>
	</div>
	
	<div class="wap-x35">
		<div class="mar-2lft bor bor-rad">
			<h3 class="title gradient pad-cen">Logo khách hàng</h3>
			<div>
				
				{foreach from=$gallery_p3 item=list}
				<div class="wap-x50">
					<div class="pad">
						<div class="img">
							<a href=""><img alt="" src="{$list.img}" height="133"></a>
						</div>
					</div>
				</div>
				{/foreach}
			
				<div class="clear"></div>
			</div>
		</div>
	</div>
	
	<div class="clear"></div>
</div>
