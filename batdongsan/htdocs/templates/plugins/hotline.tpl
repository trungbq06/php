<div id="contact">
	<div><p class="name cufon">Liên hệ</p></div>

	{foreach from=$support key=k item=list}
	<div><p class="phone">{$list.phone}</p></div>
	<div><p class="email">{$list.email}</p></div>
	<div>
		<div class="wap-x50">
			<p class="pad img">
				<a style=" border:none" href="ymsgr:sendim?{$list.yahoo}">
					<img alt="{$list.yahoo}" height="26" src="http://opi.yahoo.com/online?u={$list.yahoo}&amp;m=g&amp;t=2&amp;l=us">
				</a>
			</p>
		</div>
		<div class="wap-x50">
			<p class="pad img">
				<a href="skype:{$list.skype}?chat">
					<img alt="skype.gif" height="26" src="webroot/images/icon/skype.gif">
				</a>
			</p>
		</div>
		<div class="clear"></div>
	</div>
	{/foreach}

</div>
