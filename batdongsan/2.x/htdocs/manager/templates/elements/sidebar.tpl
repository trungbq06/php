<!-- left user starts -->
<div class="span2 main-user-span">
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-user">
            <li class="nav-header hidden-tablet">Quản lý chính</li>
            {foreach from=$sidebar key=k item=list}
            <li><a class="ajax-link" href="{$list.alias}"><i class="{$list.icon}"></i><span class="hidden-tablet"> {$list.name}</span></a></li>
            {/foreach}
        </ul>
    </div><!--/.well -->
</div><!--/span-->
<!-- left user ends -->
