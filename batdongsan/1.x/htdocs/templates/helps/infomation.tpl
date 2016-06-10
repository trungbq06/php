<div id="autoupload">
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="image" id="fileUpload">
	</form>
</div>				

<div class="bor pad mar-mid">
	{foreach from=$arr key=k item=list}
		<div class="pad mar bor">
			<div class="wap-x20 img">
				<img alt="" src="{$list.img}">
			</div>
			<div class="wap-x80">
				<div class="mar-lft">
					<p>{$list.name}</p>
					<p>Size: {$list.size} pixel</p>
					<p>Type: {$list.type}</p>
					<a href="javascript:void(0)" class="delete_upload" data="{$list.img}">Delete</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	{/foreach}
	
	<div class="clear"></div>
</div>