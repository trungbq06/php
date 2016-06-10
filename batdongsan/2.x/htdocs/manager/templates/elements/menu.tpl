<div>
    <ul class="breadcrumb">
    	{foreach from=$menu key=k item=list}
        <li>
            <i class="{$list.icon}"></i> <a href="{$list.alias}"> {$list.name}</a> <span class="divider">|</span>
        </li>
        {/foreach}
    </ul>
</div>
