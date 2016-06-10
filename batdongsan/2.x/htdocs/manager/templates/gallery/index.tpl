<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-picture"></i> Gallery</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
                 	<br>
			<ul class="thumbnails gallery">
				{foreach from=$list key=k item=value}
				<li id="" class="thumbnail">
					<a style="background:url({$value.img})" title="{$value.name}" href="{$value.img}">
                      	<img class="grayscale" src="{$value.img}" alt="{$value.name}">
                    </a>
				</li>
				{/foreach}
			</ul>
		</div>
	</div><!--/span-->

</div><!--/row-->
